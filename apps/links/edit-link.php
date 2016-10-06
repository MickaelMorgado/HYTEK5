<?php 
	include('../../dbConnection.php');
	echo '<div>'.$_POST['link-title'].' edit!</div>'; 
	$id = $_POST['link-id'];
	$title = $_POST['link-title'];
	$url = $_POST['link-url'];
	$view = $_POST['link-view'];
	$url = str_replace(array("http://", "https://"), "", $url);
	$sql = "UPDATE mytabs SET title = '$title', url = '$url', view = $view WHERE id_tab = $id AND id_tabs = $_SESSION[id_session]";
	mysqli_query($link, $sql); 
	header("location: ../../");
?>