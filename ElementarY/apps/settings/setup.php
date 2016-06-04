<?php 
	require_once '../../dbConnection.php';

	$bg = $_POST['bg'];

	$sql = "UPDATE `settings` SET `bg` = '$bg' WHERE `id_settings` = $_SESSION[id_session]";
	mysqli_query($link,$sql);

	header("location: ../../");

?>
	https://images3.alphacoders.com/163/163745.jpg