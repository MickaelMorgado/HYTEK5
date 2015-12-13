<?php 
	@include('../dbConnection.php');
	$yturl = $_POST['yturl'];
	$result = mysqli_query($link, "UPDATE playlists SET `youtubeplaylistlink` = '$yturl' WHERE ID_session = $_SESSION[id_session]");
?>