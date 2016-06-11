<?php $error_reporting=1;
	include('../../dbConnection.php');

	echo "before: ".$_POST['tarea'];

	parse_str( parse_url( $_POST['tarea'], PHP_URL_QUERY ), $my_array_of_vars );
	$videoId = $my_array_of_vars['v'];
	
	echo "<br/>after: ".$my_array_of_vars['v'];    
	

	$sql = "INSERT INTO `playlists` (`id_playlist`, `ID_session`, `youtubeplaylistlink`) VALUES (NULL, $_SESSION[id_session], '$videoId')";
	if($query!=false){ mysqli_query($link,$sql); 	}
	if($debug!=true){ header("location: ../../"); 	}
?>