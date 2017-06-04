<?php 
	
	include('../../dbConnection.php');

	$rm_id = $_POST['arrayofrmid-cat'];
	$rm_id = substr_replace($rm_id, "", -1);

	print($rm_id);

	$DELETE = "DELETE FROM `despesa_categorias` WHERE `ID` IN ($rm_id) AND `User_ID` = '".$_SESSION['id_session']."'";	
	mysqli_query($link,$DELETE);

	header("location: ../../index2.php");

?>