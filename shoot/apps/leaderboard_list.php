<?php 
	$result = mysqli_query( $link, "SELECT * FROM scores INNER JOIN players ON scores.id_player=players.id_player ORDER BY best_score DESC");
	while($row = mysqli_fetch_assoc($result)){
		?>
			<span class="leaderboardlistLeft" title="<?php echo $row['player_name'] ?>"><?php echo $row['player_name'] ?></span><span class="leaderboardlistRight"><?php echo $row['best_score'] ?></span>
		<?php
	}
?>