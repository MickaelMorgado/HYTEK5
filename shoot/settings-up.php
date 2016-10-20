<?php 
	include('../dbConnection.php'); 

	$music = $_GET['music']/10;
	$ambiance = $_GET['ambiance']/10;
	$weapons = $_GET['weapons']/10;
	$birds = $_GET['birds']/10;

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
	
	$mysql_query_settings = "UPDATE shooters SET settings = '$set' , aud_musics  = '$music' , aud_ambiances  = '$ambiance' , aud_weapons  = '$weapons' , aud_birds  = '$birds' WHERE id_session = $_SESSION[id_session];";
	mysqli_query($link,$mysql_query_settings);

	if (!$debug) {
		//header("location: index.php");
	}else{
		echo $mysql_query_settings;
	}

?>