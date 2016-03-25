<?php
	$Name = "no user ".$_SESSION['ID_PLAYER'];
	$result = mysqli_query( $link, "SELECT * FROM SCORES INNER JOIN PLAYERS ON SCORES.ID_PLAYER=PLAYERS.ID_PLAYER WHERE PLAYERS.ID_PLAYER = $_SESSION[ID_PLAYER]" );
	while($row = mysqli_fetch_assoc($result)) {
		$Name = $row['PLAYER_NAME'];
		if($row['LAST_SCORE']==''){$last_Score = "No Score";}else{$last_Score = $row['LAST_SCORE'];}
		if($row['BEST_SCORE']==''){$Score = "No Score";}else{$Score = $row['BEST_SCORE'];}
		if($row['GAME_MODE']==''){$GameMode = "No GM Played";}else{$GameMode = $row['GAME_MODE'];}
		if($row['TIME_PLAYED']==''){$TimePlayed = "No Time Played";}else{$TimePlayed = $row['TIME_PLAYED'];}
	}
?>