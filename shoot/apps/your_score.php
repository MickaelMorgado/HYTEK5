<?php
	$Name = "no user ".$_SESSION['id_player'];
	$result = mysqli_query( $link, "SELECT * FROM scores INNER JOIN players ON scores.id_player=players.id_player WHERE players.id_player = $_SESSION[id_player]" );
	while($row = mysqli_fetch_assoc($result)) {
		$Name = $row['player_name'];
		if($row['last_score']==''){$last_Score = "No Score";}else{$last_Score = $row['last_score'];}
		if($row['best_score']==''){$Score = "No Score";}else{$Score = $row['best_score'];}
		if($row['game_mode']==''){$GameMode = "No GM Played";}else{$GameMode = $row['game_mode'];}
		if($row['time_played']==''){$TimePlayed = "No Time Played";}else{$TimePlayed = $row['time_played'];}
	}
?>