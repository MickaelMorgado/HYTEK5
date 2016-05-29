
<div class="container-fluid">
	<div class="row">
		<div class="col-xs-12 col-sm-6 col-md-12">
			
			<div id="boby"></div>	

			<a id="menu-toggle" href="#" class="btn btn-primary btn-lg toggle"><i class="fa fa-cog" aria-hidden="true"></i></a>
			<div id="sidebar-wrapper">
			    <a id="menu-close" href="#" class="btn btn-default btn-lg toggle"><i class="fa fa-times" aria-hidden="true"></i></a>
			    <div class="container-fluid">
			    	<div class="row">
			    		<div class="col-xs-6">
			    			<h5>add Youtube ID's videos</h5>
							<?php if (isset($_SESSION['id_session'])): ?>
								<form action="apps/youtube/add-link.php" method="POST">
									<input type="text" name="tarea" palceholder="id video">
									<input type="submit" value="+">
								</form>
								<h5>playlist:</h5>
								<div id="YTlist" class="scrollable youtube">
									<?php include('apps/youtube/get-links.php'); ?>
								</div>
							<?php endif ?>
			    		</div>
			    		<div class="col-xs-6">
							<h5>shortcuts:</h5>
							shift + n (next video);<br>
							shift + p (prev video);
							<br>
							<br>
							<div class="player-controls">
								<span id="player-prev" title="previous"><i class="fa fa-fast-backward"></i></span>
								<span id="player-pause" title="pause (s)"><i class="fa fa-pause"></i></span>
								<span id="player-play" title="play (p)"><i class="fa fa-play"></i></span>
								<span id="player-next" title="next"><i class="fa fa-fast-forward"></i></span>
								<span id="player-vol" title="volume"><i class="fa fa-volume-down"></i></span>
								<span id="player-playAt" title="go to first"><i class="fa fa-reply"></i></span>
								<span id="player-expand" title="toggle view"><i class="fa fa-expand"></i></span>
								<!--span class="play-pause"></span>
								<span class="yt-time"></span-->
							</div>
			    		</div>
			    	</div>
			    </div>
			</div>
		</div>
	</div>
</div>

<!-- youtube dependencies -->
<script src="http://www.youtube.com/player_api"></script>
<script>
	var player;
	var a = 0;
	function onYouTubePlayerAPIReady() {
		player = new YT.Player('boby', {
			height: '250',
			width: '100%',
			videoId: $('#YTlist').find("a")[0].text,
			events: {
				'onStateChange': onPlayerStateChange
			}
		});
	}
	var done = false;
	$("#player-pause").css({"display":"none"});
	
	// when video ends
	function onPlayerStateChange(event) { 
		if (event.data === 0) { nextVideo(); }
        if (event.data == YT.PlayerState.PLAYING && !done) {
        	// CODE HERE like open links to target blank // check player.getPlayerState()
        	$("#player-play").css({"display":"none"});
        	$("#player-pause").css({"display":"inline-block"});
        	$("a").attr("target","_blank");
        	$("link[rel='icon']").attr("href","dependencies/img/audioplaying.png");
        	$(".player").addClass("active");
        }else{
        	$("link[rel='icon']").attr("href","hyteklogo.jpg");
        	$("#player-pause").css({"display":"none"});
        	$("#player-play").css({"display":"inline-block"});
        	$(".player").removeClass("active");
        }
	}
	function nextVideo(){
		a = a+1; 
		player.loadVideoById(""+$('#YTlist').find('[data-order='+a.toString()+']').text());
	}
	function prevVideo(){
		a = a-1; 
		console.log(":");
		player.loadVideoById(""+$('#YTlist').find('[data-order='+a.toString()+']').text());
	}

	$("#player-vol").click(function(){			
		if (player.isMuted()==true) {			player.unMute();	}
		else{									player.mute();		};
	});

	function expand() {							$("#player").parent().parent().toggleClass("expand");	}

	$("#player-expand").click(function(){		expand();				});

	$("#player-pause").click(function(){		player.pauseVideo();	});
	$("#player-play").click(function(){			player.playVideo();		});

	$("#player-playAt").click(function(){		onYouTubePlayerAPIReady();	});
	$("#player-prev").click(function(){			prevVideo();	});
	$("#player-next").click(function(){			nextVideo();	});

</script>