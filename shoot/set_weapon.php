<?php 
	
	include('../dbConnection.php');  
	
	$weaponappearance 	= $_POST['weaponappearance'];
	$weaponsound 		= $_POST['weaponsound'];
	$weaponreloadsound 	= $_POST['weaponreloadsound'];
	$weaponemptysound 	= $_POST['weaponemptysound'];

	$mysql_query_update = "UPDATE shooters SET src = '$weaponappearance' , sound_fire  = '$weaponsound' , sound_reload  = '$weaponreloadsound' , sound_empty  = '$weaponemptysound' WHERE id_session = $_SESSION[id_session];";

	mysqli_query($link,$mysql_query_update);

	if (!$debug) {
		header("location: index.php");
	}else{
		echo "rslt: ".$weaponappearance." - ".$weaponsound." - ".$weaponreloadsound." - ".$weaponemptysound." - ".$_SESSION['id_session'];
		echo "<br/><br/>".$mysql_query_update;
	}

?>