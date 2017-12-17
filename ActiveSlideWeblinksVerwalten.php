<?php
define('IN_PHPBB', true);

/** Define global usable variables*/

global $db, $user;

$user->session_begin();

$forum_id = request_var('f', int);
$session_id = request_var('sid', string);
$userid	= request_var('u', $user->data['user_id']);


/** unset($_POST)
 * unset($_POST['value'])*/
if(isset($_GET["weblinksubmit"]))
{
    $mode = request_var('weblinksubmit',string);
    echo "$mode";

    /** Einfügen */
    if(strcmp($mode,"Hinzufuegen") == 0 )
    {
        $link = request_var('link',string);
        $titel = request_var('titel',string);
        $fach = request_var('fach',string);

        $sql = "INSERT INTO ActiveSlide_Weblinks (FK_UserID, Titel, Link, Fach) VALUES ('$userid','$titel','$link','$fach')";
        $result = $db->sql_query($sql);
    }
    /** Editieren */
    if(strcmp($mode,"Editieren") == 0 )
    {
        $linkid = request_var('picklink',int);
        $link = request_var('link',string);
        $titel = request_var('titel',string);
        $fach = request_var('fach',string);

        $sql = "UPDATE ActiveSlide_Weblinks SET Titel='$titel',Link='$link',Fach='$fach' WHERE PK_WeblinkID = '$linkid'";
        $result = $db->sql_query($sql);
    }
    /** Löschen */
    if(strcmp($mode,"Loeschen") == 0 )
    {
        $linkid = request_var('picklink',int);
        $sql = "DELETE FROM ActiveSlide_Weblinks WHERE PK_WeblinkID = '$linkid'";
        $result = $db->sql_query($sql);
    }
    ?>
<?php
}
?>
<style>
    /* The Modal (background) */
    .modal {
        display: none; /* Hidden by default */
        position: fixed; /* Stay in place */
        z-index: 1; /* Sit on top */
        padding-top: 100px; /* Location of the box */
        left: 0;
        top: 0;
        width: 100%; /* Full width */
        height: 100%; /* Full height */
        overflow: auto; /* Enable scroll if needed */
        background-color: rgb(0,0,0); /* Fallback color */
        background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
    }

    /* Modal Content */
    .modal-content {
        background-color: #fefefe;
        margin: auto;
        padding: 20px;
        border: 1px solid #888;
        width: 80%;
    }

    /* The Close Button */
    .close {
        color: #aaaaaa;
        float: right;
        font-size: 28px;
        font-weight: bold;
    }

    .close:hover,
    .close:focus {
        color: #000;
        text-decoration: none;
        cursor: pointer;
    }
</style>
</head>
<body>
<div id="myModal" class="modal">

    <div class="modal-content">
        <span class="close">&times;</span>
        <div class="row">
            <div class="col-md-12" style="text-align: center">
                <h2>Weblink Verwaltung</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4" style="text-align: center">
                <h4>Link Hinzufügen</h4><br>
                <form action="viewforum.php" methode="get">
                    <input hidden value="<?php echo $forum_id; ?>" name="f">
                    <input hidden value="<?php echo $session_id; ?>" name="sid">
                    <input hidden value="weblinks" name="action">
                    Link: <input type="text" name="link" required><br>
                    Titel: <input type="text" name="titel" required><br>
                    Fach: <input type="text" name="fach" required><br><br>
                    <input type="submit" name="weblinksubmit" value="Hinzufuegen">
                </form>
            </div>
            <div class="col-md-4" style="text-align: center">
                <h4>Link Editieren</h4>
                <form action="viewforum.php" methode="get">
                    <input hidden value="<?php echo $forum_id; ?>" name="f">
                    <input hidden value="<?php echo $session_id; ?>" name="sid">
                    <input hidden value="weblinks" name="action">
                    <select name="picklink">
                        <?php
                        $sql = "SELECT owner FROM phpbb_forums WHERE forum_id=$forum_id";
                        $result = $db->sql_query($sql);
                        while($row = $db->sql_fetchrow($result))
                            $ownerID = (int)$row['owner'];

                        $sql = "SELECT PK_WeblinkID, Titel FROM ActiveSlide_Weblinks WHERE FK_UserID=$ownerID ORDER BY Fach";
                        $result = $db->sql_query($sql);
                        while($row = $db->sql_fetchrow($result))
                        {
                            $linkid = $row['PK_WeblinkID'];
                            $titel = $row['Titel'];
                            ?>
                            <option value=<?php echo "$linkid"; ?>><a> <?php echo "$titel"; ?> </a></option>
                            <?php
                        }
                        ?>
                    </select><br>
                    Link: <input type="text" name="link" required><br>
                    Titel: <input type="text" name="titel" required><br>
                    Fach: <input type="text" name="fach" required><br><br>
                    <input type="submit" name="weblinksubmit" value="Editieren">
                </form>
            </div>
            <div class="col-md-4" style="text-align: center">
                <h4>Link Löschen</h4>
                <form action="viewforum.php" methode="get">
                    <input hidden value="<?php echo $forum_id; ?>" name="f">
                    <input hidden value="<?php echo $session_id; ?>" name="sid">
                    <input hidden value="weblinks" name="action">
                    <select name="picklink">
                        <?php
                        $sql = "SELECT owner FROM phpbb_forums WHERE forum_id=$forum_id";
                        $result = $db->sql_query($sql);
                        while($row = $db->sql_fetchrow($result))
                            $ownerID = (int)$row['owner'];

                        $sql = "SELECT PK_WeblinkID, Titel FROM ActiveSlide_Weblinks WHERE FK_UserID=$ownerID ORDER BY Fach";
                        $result = $db->sql_query($sql);
                        while($row = $db->sql_fetchrow($result))
                        {
                            $linkid = $row['PK_WeblinkID'];
                            $titel = $row['Titel'];
                            ?>
                            <option value=<?php echo "$linkid"; ?>><a> <?php echo "$titel"; ?> </a></option>
                            <?php
                        }
                        ?>
                    </select><br><br>
                    <input type="submit" name="weblinksubmit" value="Loeschen">
                </form>
            </div>
        </div>
    </div>

</div>

<script>
    // Get the modal
    var modal = document.getElementById('myModal');

    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];

    modal.style.display = "block";

    // When the user clicks on <span> (x), close the modal
    span.onclick = function() {
        modal.style.display = "none";
        if(typeof window.history.pushState == 'function') {
            window.history.pushState({}, "Hide", "viewforum.php?f=<?php echo $forum_id?>&sid=<?php echo $session_id?>");
            location.reload();
        }
    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
            window.history.pushState({}, "Hide", "viewforum.php?f=<?php echo $forum_id?>&sid=<?php echo $session_id?>");
            location.reload();
        }
    }
</script>