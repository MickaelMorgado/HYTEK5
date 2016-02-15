<?php 
	include('head.php'); 
	session_start();

	mysqli_query($link,"UPDATE shooters INNER JOIN users ON shooters.id_session=users.id_session SET score = '0' WHERE `ID` = $_SESSION[id_sess];");

	header("location: index.php");

?>