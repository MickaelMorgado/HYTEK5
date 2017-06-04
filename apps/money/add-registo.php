<?php 
	
	include('../../dbConnection.php');

	$Titulo = $_POST['Titulo'];
	$Valor = $_POST['Valor'];
	$Categoria = $_POST['Categoria'];

	print($Titulo.$Valor.$Categoria.$_SESSION['id_session']);

	$insert = "INSERT INTO `despesa_listagem` (`User_ID`, `Data`, `Titulo`, `Valor`, `Categoria`) VALUES ('".$_SESSION['id_session']."', '2017-06-07', '$Titulo', '$Valor', '$Categoria')";	
	mysqli_query($link,$insert);

	header("location: ../../index2.php");

?>