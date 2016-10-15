<?php 
	
	include('../dbConnection.php');  
	
	$weaponappearance 	= $_POST['weaponappearance'];
	$weaponsound 		= $_POST['weaponsound'];
	$weaponreloadsound 	= $_POST['weaponreloadsound'];

	//echo "lol: ".$weaponappearance.$weaponsound.$weaponreloadsound.$_SESSION['id_session'];

	//echo "UPDATE shooters_myweapon INNER JOIN users ON shooters_myweapon.id_session=users.id_session SET src = '$weaponappearance' , sound_fire  = '$weaponsound' , sound_reload  = '$weaponreloadsound' WHERE users.id_session = $_SESSION[id_session];";

	mysqli_query($link,"UPDATE shooters SET src = '$weaponappearance' , sound_fire  = '$weaponsound' , sound_reload  = '$weaponreloadsound' WHERE id_session = $_SESSION[id_session];");

	header("location: index.php");

?>