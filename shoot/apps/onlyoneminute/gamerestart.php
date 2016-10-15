<?php
	include('../../../dbConnection.php');
	if ($_SESSION['id_session']!='') {

		$lvlscore 	= $_GET['score'];
		$gm 		= $_GET['GM'];
		$coins 		= $_GET['coins'];
		
		$query 			= "SELECT score FROM shooters WHERE id_session = $_SESSION[id_session]";
		$getCoinsQuery 	= "SELECT coins FROM shooters WHERE id_session = $_SESSION[id_session]";
		
		$score = mysqli_query($link, $query);
		if ($score->num_rows > 0) {
			while ($row = mysqli_fetch_assoc($score)) {

				//echo "score is : ".$score['score'];

				$lvlup = null;

				/* GET COINS FROM DB ;) */
				$getCoins = mysqli_query($link, $getCoinsQuery);
				$obtainedCoins = mysqli_fetch_assoc($getCoins);
				$obtainedCoins = $obtainedCoins['coins'];

				/* CALCULATED COINS FOR UPLOAD TO DB */
				$calculatedCoins = $obtainedCoins + $coins;

				$lvlupQuery = "UPDATE shooters SET coins = $calculatedCoins, last_score = $lvlscore, score = $lvlscore, gamemode = '$gm' WHERE id_session = $_SESSION[id_session]";
				$update 	= "UPDATE shooters SET coins = $calculatedCoins, last_score = $lvlscore, gamemode = '$gm' WHERE id_session = $_SESSION[id_session]";

				if($lvlscore > $row['score']){
					mysqli_query( $link, $lvlupQuery);		echo "You level up ! from $row[score] to $lvlscore";
					$lvlup = "?achivements=levelup&oldscore=".$row['score']."&newscore=".$lvlscore;
					header('location: ../../index.php'.$lvlup."&coins=".$coins);
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
				echo "<a href='../../index.php'>Menu</a> or <a href='../../games/game.php'>Restart</a>";
			} 	
		}else{
			echo "can't get score field of player from DB";
		}
	}else{
		if($_GET['phase']=='restart'){
			header('location: ../../games/game.php');
		}else{
			header('location: ../../index.php');
		}
	}
?>