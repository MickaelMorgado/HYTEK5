<?php 
	include('../../dbConnection.php');
	$linkAddTitle 	= $_POST['link-add-title'];
	$linkAddUrl 	= $_POST['link-add-url'];

	$sql = "INSERT INTO mytabs (id_tabs,title,url) VALUES (2,'$linkAddTitle','$linkAddUrl')";
	mysqli_query($link, $sql);
	//header("location: ../../");
?>
