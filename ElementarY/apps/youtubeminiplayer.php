<div class="player">
	<!--div class="hidder"><img src="http://placehold.it/250/" id="youtubeThumbnail"></div-->
	<div id="player"></div>
</div>
<div class="player-controls">
	<span id="player-previous" title="previous"><i class="fa fa-fast-backward"></i></span>
	<span id="player-pause" title="pause (s)"><i class="fa fa-pause"></i></span>
	<span id="player-play" title="play (p)"><i class="fa fa-play"></i></span>
	<span id="player-next" title="next"><i class="fa fa-fast-forward"></i></span>
	<span id="player-playAt" title="go to first"><i class="fa fa-reply"></i></span>
	<!--span class="play-pause"></span>
	<span class="yt-time"></span-->
</div>
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
				list: 'PLOj6XJW_fcjxs6OHAKoYSKN8zGECJtu9_',
			},
			events: {
				//'onReady': onPlayerReady,
				'onStateChange': onPlayerStateChange,
			}
		});
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

	$("#player-next").click(function(){
		player.nextVideo();
		var min = player.getDuration()/60;
		$(".player .yt-time").html("time:"+min+"");
	});

	$("#player-pause").click(function(){		player.pauseVideo();	});
	$("#player-play").click(function(){			player.playVideo();		});
	$("#player-previous").click(function(){		player.previousVideo();	});
	$("#player-playAt").click(function(){		player.playVideoAt(0);	});

</script>