<?php $error_reporting=1;
	include('../../dbConnection.php');

	$videoId = $_POST['tarea'];

	echo $videoId;
	$sql = "INSERT INTO `playlists` (`id_playlist`, `ID_session`, `youtubeplaylistlink`) VALUES (NULL, $_SESSION[id_session], '$videoId')";
	mysqli_query($link,$sql);
	if($debug!=true){ header("location: ../../"); }
?>