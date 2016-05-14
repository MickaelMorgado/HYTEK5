
<div class="container-fluid">
	<div class="row">
		<div class="col-xs-12 col-sm-6 col-md-12">
<iframe id="YT" width="100%" height="250" src="https://www.youtube.com/embed/" frameborder="0" allowfullscreen></iframe>
			<a id="menu-toggle" href="#" class="btn btn-primary btn-lg toggle"><i class="fa fa-cog" aria-hidden="true"></i></a>
			<div id="sidebar-wrapper">
			    <a id="menu-close" href="#" class="btn btn-default btn-lg toggle"><i class="fa fa-times" aria-hidden="true"></i></a>
			    <div class="container-fluid">
			    	<div class="row">
			    		<div class="col-xs-6">
			    			<h5>Youtube ID's (separate by comma ",");</h5>
<textarea name="" id="tarea" >
uQpta4O2E_M ,
ife5G8gdz_w ,</textarea>
			    		</div>
			    		<div class="col-xs-6">
							<h5>shortcuts:</h5>
							shift + n (next video);<br>
							shift + p (prev video);
			    		</div>
			    	</div>
			    </div>
			</div>
		</div>
	</div>
</div>
<script>
	$(document).ready(function(){
		function youtubeSetSrc() {
			var yt = $("#YT");
			yt.attr("src", "https://www.youtube.com/embed/?playlist="+$('#tarea').val());
		}
		
		youtubeSetSrc();
			
		$('#tarea').on("change",function(){youtubeSetSrc();});
	});

</script>
<!--div class="player">
	<!--div class="hidder"><img src="http://placehold.it/250/" id="youtubeThumbnail"></div-->
	<!--div id="player"></div>
</div>
<div class="player-controls">
	<span id="player-previous" title="previous"><i class="fa fa-fast-backward"></i></span>
	<span id="player-pause" title="pause (s)"><i class="fa fa-pause"></i></span>
	<span id="player-play" title="play (p)"><i class="fa fa-play"></i></span>
	<span id="player-next" title="next"><i class="fa fa-fast-forward"></i></span>
	<span id="player-vol" title="volume"><i class="fa fa-volume-down"></i></span>
	<span id="player-playAt" title="go to first"><i class="fa fa-reply"></i></span>
	<span id="player-expand" title="toggle view"><i class="fa fa-expand"></i></span>
	<!--span class="play-pause"></span>
	<span class="yt-time"></span-->
<!--/div>
<?php 
include('../dbConnection.php');
if (isset($_SESSION['id_session'])) { 	// IF SESSION
	$result = mysqli_query($link, "SELECT * FROM playlists WHERE ID_session = $_SESSION[id_session]");
	while( $row = mysqli_fetch_assoc($result) ){
		$ytb = "".$row['youtubeplaylistlink'];
		$spt = "".$row['spotifyplaylistlink'];
	} 
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
				list: '<?php echo $ytb ?>',
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
	/*
	*/
	$("#player-next").click(function(){
		player.nextVideo();
		//var min = player.getDuration()/60;
		//$(".player .yt-time").html("time:"+min+"");
	});
	
	$("#player-vol").click(function(){			
		if (player.isMuted()==true) {
			player.unMute();	
		}else{
			player.mute();	
		};
	});

	function expand() {
		$("#player").parent().parent().toggleClass("expand");
	}

	$("#player-pause").click(function(){		player.pauseVideo();	});
	$("#player-play").click(function(){			player.playVideo();		});
	$("#player-previous").click(function(){		player.previousVideo();	});
	//$("#player-next").click(function(){		player.nextVideo();	});
	$("#player-playAt").click(function(){		player.playVideoAt(0);	});
	$("#player-expand").click(function(){		expand();	});

</script-->

<!--iframe src="https://open.spotify.com/embed/user/1188639242/playlist/2DlMA4R9yNAmF6L3W3LNyM" width="100%" height="380" frameborder="0" allowtransparency="true"></iframe-->