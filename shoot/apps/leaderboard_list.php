<?php 
	$result = mysqli_query( $link, "SELECT * FROM shooters INNER JOIN users ON shooters.id_session=users.id_session ORDER BY score DESC");
	while($row = mysqli_fetch_assoc($result)){
		?>
			<span class="leaderboardlistLeft" title="<?php echo $row['name'] ?>"><?php echo $row['name'] ?></span><span class="leaderboardlistRight"><?php if ($row['score']!=''){echo $row['score']; }else{echo "No score"; }?></span>
		<?php
	}
?>