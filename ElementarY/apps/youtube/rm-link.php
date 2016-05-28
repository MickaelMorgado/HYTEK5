<?php 
	include('../../dbConnection.php');
	$rmid = $_POST['rm-id'];
	echo $rmid;
	mysqli_query($link,"DELETE FROM playlists WHERE id_playlist = $rmid");
	if($debug!=true){ header("location: ../../"); }
?>