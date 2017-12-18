<?php
define('IN_PHPBB', true);

/** Define global usable variables*/
global $db;

$forum_id = request_var('f', int);
$session_id = request_var('sid', string);

/** Welchem Dozenten gehört das Forum*/
$sql = "SELECT owner FROM phpbb_forums WHERE forum_id=$forum_id";
$result = $db->sql_query($sql);
while($row = $db->sql_fetchrow($result))
    $ownerID = (int)$row['owner'];

/** Name des Dozenten ermitteln */
$sql = "SELECT username FROM phpbb_users WHERE user_id=$ownerID";
$result = $db->sql_query($sql);
while($row = $db->sql_fetchrow($result))
    $ownerName = (string)$row['username'];

echo "<h3>Dozent: $ownerName</h3>";

/** Weblinks ausgeben */
$aktuellesFach = "";
$sql = "SELECT Titel, Link, Fach FROM ActiveSlide_Weblinks WHERE FK_UserID=$ownerID ORDER BY Fach";
$result = $db->sql_query($sql);
while($row = $db->sql_fetchrow($result))
{
    $titel = $row['Titel'];
    $link = $row['Link'];
    $fach = $row['Fach'];
    if(strcmp($aktuellesFach, $fach) != 0)
    {
        $aktuellesFach = $fach;
        echo "<h4>$aktuellesFach <br></h4>";
    }
    echo "<a href='$link' target=\'_blank'>$titel</a><br>";
}
?>