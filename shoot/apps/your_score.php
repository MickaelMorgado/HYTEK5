<?php 
	$result = mysqli_query( $link, "SELECT * FROM shooters INNER JOIN users ON shooters.id_session=users.id_session WHERE ID = $_SESSION[id_sess]" );
	while($row = mysqli_fetch_assoc($result)) {
		$Name = $row['name'];
		if($row['last_score']==''){$last_Score = "No Score";}else{$last_Score = $row['last_score'];}
		if($row['score']==''){$Score = "No Score";}else{$Score = $row['score'];}
		if($row['gamemode']==''){$GameMode = "No GM Played";}else{$GameMode = $row['gamemode'];}
		if($row['timeplayed']==''){$TimePlayed = "No Time Played";}else{$TimePlayed = $row['timeplayed'];}
	}
?>