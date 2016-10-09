<?php
	if (isset($_SESSION['id_session'])) {
		$result = mysqli_query( $link, "SELECT * FROM shooters INNER JOIN users ON shooters.id_session=users.id_session WHERE shooters.id_session = $_SESSION[id_session]" );
		while($row = mysqli_fetch_assoc($result)) {
			$Name = $row['name'];
			if($row['last_score']==''){		$last_Score = "No Score"; 		}else{ $last_Score = $row['last_score'];		}
			if($row['best_score']==''){		$Score = "No Score"; 			}else{ $Score = $row['best_score'];				}
			if($row['game_mode']==''){		$GameMode = "No GM Played"; 	}else{ $GameMode = $row['game_mode'];			}
			if($row['time_played']==''){	$TimePlayed = "No Time Played"; }else{ $TimePlayed = $row['time_played'];		}
			if($row['coins']==''){			$coins = "No Coins"; 			}else{ $coins = $row['coins'];					}
		}
	}else{
		$Name 			= "not logged";
		$last_Score 	= "not logged";
		$Score 			= "not logged";
		$GameMode 		= "not logged";
		$TimePlayed 	= "not logged";
		$coins 			= "not logged";
	}
?>
<div class="yourscore">
	<div>
		<div class="ys_list"><span class="name"><?php echo "$Name"; ?></span></div>
		<div class="ys_list">
			<span class="ys_left">Your best Score:</span>
			<span class="ys_right"><?php echo "$Score"; ?></span>
		</div>
		<div class="ys_list">
			<span class="ys_left">Your last Score:</span>
			<span class="ys_right"><?php echo "$last_Score"; ?></span>
		</div>
		<div class="ys_list">
			<span class="ys_left">Game Type:</span>
			<span class="ys_right"><?php echo "$GameMode"; ?></span>
		</div>
		<div class="ys_list">
			<span class="ys_left">Time Played:</span>
			<span class="ys_right"><?php echo "$TimePlayed"; ?></span>
		</div>
		<div class="ys_list">
			<span class="ys_left">Coins:</span>
			<span class="ys_right"><?php echo "$coins €"; ?></span>
		</div>
	</div>
</div>