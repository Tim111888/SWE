<?php
define('IN_PHPBB', true);

/** Define global usable variables*/
global $db;

/** Get Paramaters */
$forum_id = request_var('f', int);
$select = request_var('Select', int);
$status = request_var('status', string);
$session_id = request_var('sid', string);

/** Print Data - Just for Debugging */
?>
<div>
    <?php
    echo "Select $status <br/>";
    echo "ID $select<br/>";
    echo "Forum $forum_id<br/>";
    echo "SessionID $session_id<br/>";
    ?>
</div>
<?php

/** Delete or Open!  */
if(!($select=="int")&&!($status=="string")&&!($session_id=="string")&&!($forum_id=="int")){

    $sql = "SELECT * FROM phpbb_forums	WHERE forum_id=$select";
    $result = $db->sql_query($sql);
    while($row = $db->sql_fetchrow($result))
        $tmp = (string)$row['forum_name'];
    echo"$tmp";

    if($status=="Oeffnen"){
        if($tmp=="Fragen"){
            $sql = 'UPDATE ' . FORUMS_TABLE . ' SET 
            forum_type = 1,
			forum_status = 0
			WHERE forum_id = ' . $select;
            $db->sql_query($sql);
        }else{
            $sql = 'UPDATE ' . FORUMS_TABLE . '
			SET forum_type = 2,
			forum_status = 0
			WHERE forum_id = ' . $select;
            $db->sql_query($sql);
        }
    }else if($status=="Schliessen"){
        $sql = 'UPDATE ' . FORUMS_TABLE . ' SET 
            forum_type = 0,
			forum_status = 1 
			WHERE forum_id = ' . $select;
        $db->sql_query($sql);
    }?>

    <?php
    /** Reload Page after Opening/Closing topic */
    ?>
    <script>
        if(typeof window.history.pushState == 'function') {
            window.history.pushState({}, "Hide", "viewforum.php?f=<?php echo $forum_id?>&sid=<?php echo $session_id?>");
            location.reload();
        }
    </script>

    <?php
}
/** Get all "Fragen"-forums */
$sql = "SELECT * FROM phpbb_forums	WHERE parent_id=$forum_id AND forum_name ='Fragen'";
$result = $db->sql_query($sql);
while($row = $db->sql_fetchrow($result))
    $fragenforum = (int)$row['forum_id'];

/** Get all "Übungen"-links */
$sql = "SELECT * FROM phpbb_forums	WHERE parent_id=$forum_id AND forum_name ='Übungen'";
$result = $db->sql_query($sql);
while($row = $db->sql_fetchrow($result))
    $übungen = (int)$row['forum_id'];

$sql = "SELECT * FROM phpbb_forums WHERE parent_id=$übungen ORDER BY forum_ID";
$result = $db->sql_query($sql);
?>
    <form action="viewforum.php" method="get">
        <input hidden value="<?php echo $forum_id; ?>" name="f">
        <input hidden value="<?php echo $session_id; ?>" name="sid">
        <select name="Select">

            <option value="<?php echo $fragenforum; ?>"><a>Fragen</a></option>
            <?php
while($row = $db->sql_fetchrow($result)){
    echo (int)$row['forum_id'];
    ?>

            <option value="<?php echo (int)$row['forum_id']; ?>"><a><?php echo (string)$row['forum_name']; ?></a></option>


    <?php } ?>
        </select>
        <input type="submit" value="Oeffnen" class="btn btn-secondary" aria-haspopup="true" aria-expanded="false" name="status">
        <input type="submit" value="Schliessen" class="btn btn-secondary" aria-haspopup="true" aria-expanded="false" name="status">
    </form>
<?php

?>