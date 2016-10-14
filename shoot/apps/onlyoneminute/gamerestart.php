<?php
	include('../../head.php');
	if ($_SESSION['id_session']!='') {

		$score 		= $_GET['score'];
		$gm 		= $_GET['GM'];
		$coins 		= $_GET['coins'];
		
		$query 			= "SELECT best_score FROM scores INNER JOIN users ON scores.id_session=users.id_session WHERE scores.id_session = $_SESSION[id_session]";
		$getCoinsQuery 	= "SELECT coins FROM players WHERE id_session = $_SESSION[id_session]";
		
		$best_score = mysqli_query($link, $query);
		while($row = mysqli_fetch_assoc($best_score)){	//echo "best_score is : ".$best_score['score'];

			$lvlup = null;

			/* GET COINS FROM DB ;) */
			$getCoins = mysqli_query($link, $getCoinsQuery);
			$obtainedCoins = mysqli_fetch_assoc($getCoins);
			$obtainedCoins = $obtainedCoins['coins'];

			/* CALCULATED COINS FOR UPLOAD TO DB */
			$calculatedCoins = $obtainedCoins + $coins;

			$lvlupQuery = "UPDATE scores INNER JOIN users ON scores.id_session=users.id_session SET coins = $calculatedCoins, last_score = $score, best_score = $score, game_mode = '$gm' WHERE scores.id_session = $_SESSION[id_session]";
			$update 	= "UPDATE scores INNER JOIN users ON scores.id_session=users.id_session SET coins = $calculatedCoins, last_score = $score, game_mode = '$gm' WHERE scores.id_session = $_SESSION[id_session]";



			if($score > $row['best_score']){
				mysqli_query( $link, $lvlupQuery);		//echo "You level up ! from $row[best_score] to $score";
				$lvlup = "?achivements=levelup&oldscore=".$row['best_score']."&newscore=".$score;
			}else{
				mysqli_query( $link, $update);
				if (isset($_GET['phase'])) {
					if($_GET['phase']=='restart'){
						header('location: ../../games/game.php');
					}else{
						header('location: ../../index.php');
					}
				}else{
					header('location: ../../index.php');
				}
			}
			//header('location: ../../index.php'.$lvlup."&coins=".$coins);
			//echo "<a href='../../index.php'>Menu</a> or <a href='../../games/game.php'>Restart</a>";
		}
	}else{
		if($_GET['phase']=='restart'){header('location: ../../games/game.php');}else{header('location: ../../index.php');}
	}
?>