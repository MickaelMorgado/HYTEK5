<?php 
	include('head.php'); 
	session_start();

	$music = $_GET['music'];
	$ambiance = $_GET['ambiance'];
	$weapons = $_GET['weapons'];
	$birds = $_GET['birds'];

	$music = $music/10;
	$ambiance = $ambiance/10;
	$weapons = $weapons/10;
	$birds = $birds/10;

	//echo "$music,$ambiance,$weapons,$birds";

	switch ($_GET['settings']) {
		case 'low':
			$set = 0;
			break;
		case 'normal':
			$set = 1;
			break;
		case 'ultra':
			$set = 2;
			break;
		default:
			$set = 1;
			break;
	}

	mysqli_query($link,"UPDATE shooters INNER JOIN users ON shooters.id_session=users.id_session SET settings = '$set' , music = '$music' , ambiance = '$ambiance' , weapons = '$weapons' , birds = '$birds' WHERE ID = $_SESSION[id_sess];");

	header("location: index.php");

?>