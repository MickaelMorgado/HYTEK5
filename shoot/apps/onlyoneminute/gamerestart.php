<?php session_start();
	include('../../head.php');

	if ($_SESSION['id_sess']!='') {
		$score = $_GET['score'];
		$gm = $_GET['GM'];
		$best_score = mysqli_query( $link, "SELECT score FROM shooters INNER JOIN users ON shooters.id_session=users.id_session WHERE ID = $_SESSION[id_sess]" );
		while($row = mysqli_fetch_assoc($best_score)){
			//echo "best_score is : ".$best_score['score'];
			if($score > $row['score']){
				echo "You level up ! from $row[score] to $score";
				mysqli_query( $link, "UPDATE shooters INNER JOIN users ON shooters.id_session=users.id_session SET last_score = $score, score = $score, gamemode = '$gm' WHERE ID = $_SESSION[id_sess]" );
			}else{
				mysqli_query( $link, "UPDATE shooters INNER JOIN users ON shooters.id_session=users.id_session SET last_score = $score, gamemode = '$gm' WHERE ID = $_SESSION[id_sess]" );
				if($_GET['phase']=='restart'){header('location: ../../games/game.php');}else{header('location: ../../index.php');}
			}
			echo "<a href='../../index.php'>Menu</a> or <a href='../../games/game.php'>Restart</a>";
		}
	}else{
		if($_GET['phase']=='restart'){header('location: ../../games/game.php');}else{header('location: ../../index.php');}
	}
?>