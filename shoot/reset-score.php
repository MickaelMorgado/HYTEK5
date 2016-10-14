<?php 
	include('../dbConnection.php');  
	session_start();

	mysqli_query($link,"UPDATE scores INNER JOIN users ON scores.id_session=users.id_session SET best_score = 0 WHERE scores.id_session = $_SESSION[id_session];");

	header("location: index.php");
?>