<?php
	include('../../head.php');

	if ($_SESSION['id_sess']!='') {
		$score = $_GET['score'];
		$gm = $_GET['GM'];
		$best_score = mysqli_query( $link, "SELECT BEST_SCORE FROM SCORES INNER JOIN PLAYERS ON SCORES.ID_PLAYER=PLAYERS.ID_PLAYER WHERE SCORES.ID_PLAYER = $_SESSION[ID_PLAYER]" );
		while($row = mysqli_fetch_assoc($best_score)){
			//echo "best_score is : ".$best_score['score'];
			if($score > $row['BEST_SCORE']){
				echo "You level up ! from $row[BEST_SCORE] to $score";
				mysqli_query( $link, "UPDATE SCORES INNER JOIN PLAYERS ON SCORES.ID_PLAYER=PLAYERS.ID_PLAYER SET LAST_SCORE = $score, BEST_SCORE = $score, GAME_MODE = '$gm' WHERE SCORES.ID_PLAYER = $_SESSION[ID_PLAYER]" );
			}else{
				mysqli_query( $link, "UPDATE SCORES INNER JOIN PLAYERS ON SCORES.ID_PLAYER=PLAYERS.ID_PLAYER SET LAST_SCORE = $score, GAME_MODE = '$gm' WHERE SCORES.ID_PLAYER = $_SESSION[ID_PLAYER]" );
				if($_GET['phase']=='restart'){header('location: ../../games/game.php');}else{header('location: ../../index.php');}
			}
			echo "<a href='../../index.php'>Menu</a> or <a href='../../games/game.php'>Restart</a>";
		}
	}else{
		if($_GET['phase']=='restart'){header('location: ../../games/game.php');}else{header('location: ../../index.php');}
	}
?>