<?php 
	@include('../dbConnection.php');
	$spurl = $_POST['spurl'];
	$result = mysqli_query($link, "UPDATE playlists SET `spotifyplaylistlink` = '$spurl' WHERE ID_session = $_SESSION[id_session]");
?>