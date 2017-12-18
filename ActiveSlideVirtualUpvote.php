<?php
define('IN_PHPBB', true);

/** Define global usable variables*/
global $db;
$forum_id = request_var('f', int);
$session_id = request_var('sid', string);
$aufzeigen = request_var('aufzeigen', string);
$reset = request_var('reset', string);
$show = request_var('reset', string);
$counter=0;

if($aufzeigen=="true")
{
    echo "+1";
    /** Welchem Dozenten gehört das Forum*/
    $sql = "SELECT owner FROM phpbb_forums WHERE forum_id=$forum_id";
    $result = $db->sql_query($sql);
    while($row = $db->sql_fetchrow($result))
        $ownerID = (int)$row['owner'];

    /** Welchem Dozenten gehört das Forum*/
    $sql = "SELECT PK_UpvotesID FROM ActiveSlide_Upvotes WHERE FK_UserID=$ownerID";
    $result = $db->sql_query($sql);
    while($row = $db->sql_fetchrow($result))
        $upvoteID = (int)$row['PK_UpvotesID'];

    if($aufzeigen=="true" && $session_id!="string"){
        $schonvorhanden=false;
        $sql = "SELECT * FROM ActiveSlide_Upvotes_ztbl WHERE FK_UpvoteID=$upvoteID";
        $result = $db->sql_query($sql);
        while($row = $db->sql_fetchrow($result)){
            $tmp = (string)$row['SID'];
            if($tmp==$session_id){
                $schonvorhanden=true;
                break;
            }
        }
        if(!$schonvorhanden){
            $sql = "INSERT INTO ActiveSlide_Upvotes_ztbl (FK_UpvoteID, SID) VALUES ('$upvoteID','$session_id')";
            $result = $db->sql_query($sql);
        }
        else{
            $sql = "DELETE FROM ActiveSlide_Upvotes_ztbl  WHERE FK_UpvoteID='$upvoteID' AND SID='$session_id' LIMIT 1";
            $result = $db->sql_query($sql);
        }
    }
?>
    <script>
        window.history.pushState({}, "Hide", "viewforum.php?f=<?php echo $forum_id?>&sid=<?php echo $session_id?>");
        location.reload();
    </script>
<?php } else if($reset=="true"){
    echo "ResetAll";
    /** Welchem Dozenten gehört das Forum*/
    $sql = "SELECT owner FROM phpbb_forums WHERE forum_id=$forum_id";
    $result = $db->sql_query($sql);
    while($row = $db->sql_fetchrow($result))
        $ownerID = (int)$row['owner'];

    /** Welchem Dozenten gehört das Forum*/
    $sql = "SELECT PK_UpvotesID FROM ActiveSlide_Upvotes WHERE FK_UserID=$ownerID";
    $result = $db->sql_query($sql);
    while($row = $db->sql_fetchrow($result))
        $upvoteID = (int)$row['PK_UpvotesID'];

    $sql = "DELETE FROM ActiveSlide_Upvotes_ztbl  WHERE FK_UpvoteID='$upvoteID'";
        $result = $db->sql_query($sql);
        ?>
<script>
    window.history.pushState({}, "Hide", "viewforum.php?f=<?php echo $forum_id?>&sid=<?php echo $session_id?>");
    location.reload();
</script>
<?php } else if($show=="true"){
    echo "test";
}

$template->assign_var('UP_COUNTER', $counter);
$template->assign_var('F_ID', $forum_id);
$template->assign_var('U_SID', $session_id);
$template->assign_var('F_OWNER', $ownerID);?>


