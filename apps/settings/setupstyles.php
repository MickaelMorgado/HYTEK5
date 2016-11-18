<?php 
	require_once '../../dbConnection.php';

	$lol = $_POST['jscolor'].",".$_POST['rangeMate'].",".$_POST['rangeOpacity'].",".$_POST['rangeGlassOpacity'];

	$sql = "UPDATE `settings` 
			SET `hbg` = '$lol' 
			WHERE `id_settings` = $_SESSION[id_session]";
	
	mysqli_query($link,$sql);

	header("location: ../../");
?>