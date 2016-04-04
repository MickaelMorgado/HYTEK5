<?php
	if (isset($_SESSION['id_session'])) { 	// IF SESSION
		
		$result = mysqli_query($link, "SELECT * FROM playlists WHERE id_session = $_SESSION[id_session]");		
		while( $row = mysqli_fetch_assoc($result) ){
			$optionalAttr = "&color=white&controls=2&iv_load_policy=3&showinfo=1&enablejsapi";
			//$ytb = "".$row['youtubeplaylistlink'].$optionalAttr;
			$ytb = "".$row['youtubeplaylistlink'];
			$spt = "".$row['spotifyplaylistlink'];
		} 
		?>
		
			<a href="
			<?php echo $spt ?>
			" target='_blank' class='sp'>Go to your 
			<img src='http://www.google.com/s2/favicons?domain=play.spotify.com/'> 
			playlist</a>




			<div class="player">
				<!--div class="hidder"><img src="http://placehold.it/250/" id="youtubeThumbnail"></div-->
				<div id="player"></div>
			</div>


		<?php		
	}
?>
<script>

	var tag = document.createElement('script');
	tag.src = "https://www.youtube.com/iframe_api";
	var firstScriptTag = document.getElementsByTagName('script')[0];
	firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

	var player;
	function onYouTubeIframeAPIReady() {
		player = new YT.Player('player', {
			height:  '100%',
			width:   '100%',
			//videoId: 'uLJMQ9vbusE',
			playerVars: {
				listType: 'playlist',
				list: <?php echo "'$ytb'" ; ?>,
			},
			events: {
				'onReady': onPlayerReady,
				'onStateChange': onPlayerStateChange,
			}
		});
	}

	function onPlayerReady(event) {
		//$("#youtubeThumbnail").attr("src","http://img.youtube.com/vi/"+player.getPlaylist()+"/0.jpg");
		$(".player .yt-time").html("time:"+player.getDuration()+"");
	}

	// SHUFFLE VIDEO PLAYER SERIA FIX ALEATORIO XD
	var done = false;
	$("#player-pause").css({"display":"none"});
	
	function onPlayerStateChange(event) {							// WHEN IT PLAY
		if (event.data == YT.PlayerState.PLAYING && !done) {
			// CODE HERE like open links to target blank // check player.getPlayerState()
			$("#player-play").css({"display":"none"});
			$("#player-pause").css({"display":"inline-block"});
			$("a").attr("target","_blank");
			$("link[rel='icon']").attr("href","26	.gif");
			$(".player").addClass("active");
			//$(".soundtracks").append(player.getPlaylist());
			//done = true;
		}else{
			$("link[rel='icon']").attr("href","hyteklogo.jpg");
			$("#player-pause").css({"display":"none"});
			$("#player-play").css({"display":"inline-block"});
			$(".player").removeClass("active");
		}
	}

	$("#player-pause").click(function(){
		player.pauseVideo();
	});

	$("#player-play").click(function(){
		player.playVideo();
	});

	$("#player-next").click(function(){
		player.nextVideo();
		var min = player.getDuration()/60;
		$(".player .yt-time").html("time:"+min+"");
	});

	$("#player-previous").click(function(){
		player.previousVideo();
		$(".player .yt-time").html("time:"+player.getDuration()+"");
	});

	$("#player-playAt").click(function(){
		player.playVideoAt(0);
	});

	$(".hidder").mouseenter(function(){
		$(this).fadeOut();
	});
	$(".player").mouseleave(function(){
		$(".hidder").fadeIn();
	});

	/*
	$(document).keydown(function (e){
	    if(e.keyCode == 80){
			player.playVideo();
	    }if(e.keyCode == 83){
			player.pauseVideo();
	    }
	});
	*/


</script>