<?php 
	include('head.php'); 

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

	mysqli_query($link,"UPDATE SETTINGS INNER JOIN PLAYERS ON SETTINGS.ID_PLAYER=PLAYERS.ID_PLAYER SET PRESETS = '$set' , AUD_MUSICS = '$music' , AUD_AMBIANCES = '$ambiance' , AUD_WEAPONS = '$weapons' , AUD_BIRDS = '$birds' WHERE PLAYERS.ID_PLAYER = $_SESSION[ID_PLAYER];");

	header("location: index.php");

?>