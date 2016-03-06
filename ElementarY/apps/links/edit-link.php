<?php 
	include('../../dbConnection.php');
	echo '<div>'.$_POST['link-title'].' edit!</div>'; 
	$id = $_POST['link-id'];
	$title = $_POST['link-title'];
	$url = $_POST['link-url'];
	$url = str_replace(array("http://", "https://"), "", $url);
	$sql = "UPDATE mytabs SET title = '$title', url = '$url' WHERE id_tab = $id AND id_tabs = 2";
	mysqli_query($link, $sql); 
	header("location: ../../");
?>