<?php
	include('../../head.php');

	if ($_SESSION['id_player']!='') {
		$score = $_GET['score'];
		$gm = $_GET['GM'];
		$best_score = mysqli_query( $link, "SELECT best_score FROM scores INNER JOIN players ON scores.id_player=players.id_player WHERE scores.id_player = $_SESSION[id_player]");
		while($row = mysqli_fetch_assoc($best_score)){
			//echo "best_score is : ".$best_score['score'];
			if($score > $row['best_score']){
				mysqli_query( $link, "UPDATE scores INNER JOIN players ON scores.id_player=players.id_player SET last_score = $score, best_score = $score, game_mode = '$gm' WHERE scores.id_player = $_SESSION[id_player]");
				//echo "You level up ! from $row[best_score] to $score";
				header('location: ../../index.php?achivements=levelup&oldscore='.$row['best_score'].'&newscore='.$score);
			}else{
				mysqli_query( $link, "UPDATE scores INNER JOIN players ON scores.id_player=players.id_player SET last_score = $score, game_mode = '$gm' WHERE scores.id_player = $_SESSION[id_player]");
				if($_GET['phase']=='restart'){header('location: ../../games/game.php');}else{header('location: ../../index.php');}
			}
			//echo "<a href='../../index.php'>Menu</a> or <a href='../../games/game.php'>Restart</a>";
		}
	}else{
		if($_GET['phase']=='restart'){header('location: ../../games/game.php');}else{header('location: ../../index.php');}
	}
?>