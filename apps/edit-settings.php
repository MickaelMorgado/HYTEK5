<?php 
@include('../dbConnection.php');

$fundo 			= $_POST['fundo'];
$youtube 		= $_POST['youtube'];
$spotify 		= $_POST['spotify'];
$tabs_order 	= $_POST['tabs_order'];

/*
echo "<br>".$fundo;
echo "<br>".$youtube;
echo "<br>".$spotify;
echo "<br>".$tabs_order;
*/

db_update("settings","`bg` = '$fundo',`tabs_order` = '$tabs_order'","id_settings = $_SESSION[id_session]");
db_update("playlists","`youtubeplaylistlink` = '$youtube',`spotifyplaylistlink` = '$spotify'","ID_session = $_SESSION[id_session]");
header("location: ../index2.php");
?>