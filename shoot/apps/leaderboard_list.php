<?php 
	$result = mysqli_query( $link, "SELECT * FROM SCORES INNER JOIN PLAYERS ON SCORES.ID_PLAYER=PLAYERS.ID_PLAYER ORDER BY BEST_SCORE DESC");
	while($row = mysqli_fetch_assoc($result)){
		?>
			<span class="leaderboardlistLeft" title="<?php echo $row['PLAYER_NAME'] ?>"><?php echo $row['PLAYER_NAME'] ?></span><span class="leaderboardlistRight"><?php echo $row['BEST_SCORE'] ?></span>
		<?php
	}
?>