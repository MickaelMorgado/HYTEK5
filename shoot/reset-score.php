<?php 
	include('head.php'); 
	session_start();

	mysqli_query($link,"UPDATE scores INNER JOIN players ON scores.id_player=players.id_player SET best_score = 0 WHERE scores.id_player = $_SESSION[id_player];");

	header("location: index.php");
?>