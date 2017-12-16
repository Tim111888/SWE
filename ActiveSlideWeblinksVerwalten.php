<?php
define('IN_PHPBB', true);

/** Define global usable variables*/
$user->session_begin();

$userid	= request_var('u', $user->data['user_id']);

?>




<?php
/** unset($_POST)
 * unset($_POST['value'])*/
if(isset($_POST["link"]))
{
    $link = $_POST["link"];
    $titel = $_POST["titel"];
    $fach = $_POST["fach"];
    /** Einfügen */

    $sql = "SELECT * FROM phpbb_forums	WHERE forum_id=$select";
    $result = $db->sql_query($sql);
    while($row = $db->sql_fetchrow($result))
        $tmp = (string)$row['forum_name'];
}

?>

<form action="" methode="post">
    Link: <input type="text" name="link" required><br>
    Titel: <input type="text" name="titel" required><br>
    Fach: <input type="text" name="fach" required><br>
    <input type="submit" name="submit" value="submit">
</form>

<?php


/** Löschen
$sql = "DELETE FROM ActiveSlide_Weblinks WHERE Link = 'LINK HIER EINFÜGEN'";
$result = $db->sql_query($sql);


/** Editieren
$sql = "UPDATE ActiveSlide_Weblinks SET Titel='TITEL HIER',Link='LINK HIER',Fach='FACH HIER' WHERE Link='Ausgewählter LINK'";
$result = $db->sql_query($sql);
*/

?>

