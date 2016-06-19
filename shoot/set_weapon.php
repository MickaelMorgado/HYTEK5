<?php 
	
	include('head.php'); 
	
	$weaponappearance = $_POST['weaponappearance'];
	$weaponsound = $_POST['weaponsound'];
	$weaponreloadsound = $_POST['weaponreloadsound'];

	//echo "lol: ".$weaponappearance.$weaponsound.$weaponreloadsound.$_SESSION['id_player'];

	mysqli_query($link,"UPDATE weapons INNER JOIN players ON weapons.id_player=players.id_player SET src = '$weaponappearance' , sound_fire  = '$weaponsound' , sound_reload  = '$weaponreloadsound' WHERE players.id_player = $_SESSION[id_player];");

	header("location: index.php");

?>