<?php 
	include('../../dbConnection.php');
	$lid = $_POST['link-id'];
	mysqli_query($link,"DELETE FROM mytabs WHERE id_tab = $lid");
	header("location: ../../");
?>