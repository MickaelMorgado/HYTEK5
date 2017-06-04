<?php 
	
	include('../../dbConnection.php');

	$insert = "INSERT INTO `despesa_categorias` (`ID`, `User_ID`, `Categoria`) VALUES (NULL, '".$_SESSION['id_session']."', '".$_POST['add-categoria']."')";
	mysqli_query($link,$insert);

	header("location: ../../index2.php");

?>