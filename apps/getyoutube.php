<?php
	if (isset($_SESSION['id_session'])) {
		$result = mysqli_query($link, "SELECT * FROM playlists WHERE id_session = $_SESSION[id_session]");
		while($row=mysqli_fetch_assoc($result)){
			$ytb = "".$row['youtubeplaylistlink']."&color=white&controls=2&iv_load_policy=3&showinfo=1&enablejsapi";
			$spt = "".$row['spotifyplaylistlink'];
			echo "<br/>";
			?>
				<div class='over2'>DISPLAY - PLAYLIST
				  	<span id='off2'>off</span>
				  	<span id='on2'>on</span>
				  	<?php echo "<iframe id='youtube' width='100%' height='30px' src='$ytb' frameborder='0' allowfullscreen></iframe>"; ?>
				</div>
			<?php
			echo "<br/><a href=".$spt." target='_blank' class='sp'>Go to your <img src='http://www.google.com/s2/favicons?domain=play.spotify.com/'> playlist</a><hr/>";
		}
	}
	?>