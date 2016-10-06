
<div class="container-fluid">
	<div class="row">
		<div class="col-xs-12 col-sm-6 col-md-12">
			
		<div id="boby"></div>

   

			<a id="menu-toggle" href="#" class="btn btn-primary btn-lg toggle"><i class="fa fa-cog" aria-hidden="true"></i></a>
			<div id="sidebar-wrapper">
			    <a id="menu-close" href="#" class="btn btn-primary btn-lg toggle"><i class="fa fa-times" aria-hidden="true"></i></a>
			    <div class="container-fluid">
			    	<div class="row">
			    		<div class="col-xs-6">
			    			<h5>add Youtube url:</h5>
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
								<div class="progress">
								    <div id="youtubeRangeSlider" class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
								      	<span class="sr-only">70% Complete</span>
								    </div>
									<input id="youtubeRangeSlider-input" type="range" min="0" max="100">
								  </div>
								<span id="player-prev" title="previous"><i class="fa fa-fast-backward"></i></span>
								<span id="player-pause" title="pause (s)"><i class="fa fa-pause"></i></span>
								<span id="player-play" title="play (p)"><i class="fa fa-play"></i></span>
								<span id="player-next" title="next"><i class="fa fa-fast-forward"></i></span>
								<span id="player-vol" title="mute/unmute"><i class="fa fa-volume-up"></i><i class="fa fa-volume-off"></i></span>
								<span id="player-playAt" title="go to first"><i class="fa fa-reply"></i></span>
								<!--span id="player-expand" title="toggle view"><i class="fa fa-expand"></i></span-->
								<span id="player-repeat" title="repeat video"><i class="fa fa-repeat" aria-hidden="true"></i></span>
							</div>
			    		</div>
			    	</div>
			    </div>
			</div>
		</div>
	</div>
</div>

<!-- youtube dependencies -->
<!--script src="http://www.youtube.com/player_api"></script-->
<script>

  var tag = document.createElement('script');
  tag.src = "https://www.youtube.com/iframe_api";
  var firstScriptTag = document.getElementsByTagName('script')[0];
  firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);
  var 	player,
  		dataOrder = 0,
  		lastOrder = $('.playlistlink').last().data("order");

  function onYouTubeIframeAPIReady() {
    player = new YT.Player('boby', {
      	height: '250',
      	width: '100%',
     	<?php if (isset($_SESSION['id_session'])): ?>
		videoId: $('#YTlist').find("a")[0].text,
		<?php else: ?>
		videoId: "g7TAqv-dx2Y",
		<?php endif ?>
		events: {
			'onStateChange': onPlayerStateChange
		}
    });
  }

  // 4. The API will call this function when the video player is ready.
  function onPlayerReady(event) {
    event.target.playVideo();
  }

	var done = false,
		gate = true,
		repeatVideoVar = false;

	$("#player-pause").css({"display":"none"});
	
	function repeatVideo() {
		if (repeatVideoVar) { 
			repeatVideoVar = false; 
			$("#player-repeat").css({"tex<t-shadow":"0 0 0 white"});
		}
		else{ 
			repeatVideoVar = true; 
			$("#player-repeat").css({"text-shadow":"0 0 5px white"});
		};
	}
	// when video ends
	function onPlayerStateChange(event) { 
		console.log("isplaying");
		if (event.data === 0 ){nextVideo();}
		else{
        	$("#youtubeRangeSlider").attr("aria-valuemax",player.getDuration());
        	$("#youtubeRangeSlider-input").attr("max",player.getDuration());
        	$("#youtubeRangeSlider-input").change(function(){
        		player.seekTo($(this).val()); 
        	});
        	function getCurrentTimeYT() {
        		setTimeout(function(){
        			var w = player.getCurrentTime()*100/player.getDuration();
	        		$("#youtubeRangeSlider")
	        			.attr("aria-valuenow",player.getCurrentTime())
	        			.css({"width":w+"%"});
	        		getCurrentTimeYT();
	        	}, 500);
        	}
        	getCurrentTimeYT();
		}
        if (event.data == YT.PlayerState.PLAYING && !done) { /* CODE HERE like open links to target blank // check player.getPlayerState() */
        	$("#player-play").css({"display":"none"});
        	$("#player-pause").css({"display":"inline-block"});
        	$("a").attr("target","_blank");
        	$("link[rel='icon']").attr("href","dependencies/img/audioplaying.png");
        	$(".player").addClass("active");
        }else{
        	$("link[rel='icon']").attr("href","../hyteklogo.jpg");
        	$("#player-pause").css({"display":"none"});
        	$("#player-play").css({"display":"inline-block"});
        	$(".player").removeClass("active");
        }
	}
	function nextVideo(){
		if (dataOrder >= lastOrder) { /* repeat all playlist again on reach last video */
			dataOrder = 0;
			nextVideo();
		}else{
			player.loadVideoById(""+$('#YTlist').find('[data-order='+dataOrder.toString()+']').text());
			if (repeatVideoVar == true) {
				dataOrder = dataOrder;
			}else{
				dataOrder = dataOrder+1; 
			};
		}
	}
	function prevVideo(){
		if (repeatVideoVar == true) {
			dataOrder = dataOrder;
		}else{
			dataOrder = dataOrder-1; 
		};
		player.loadVideoById(""+$('#YTlist').find('[data-order='+dataOrder.toString()+']').text());
	}
	function showUnmuteIcon() {
		$("#player-vol .fa-volume-off").css({"display":"none"});	
		$("#player-vol .fa-volume-up").css({"display":"inline-block"});	
	}
	function showMuteIcon() {
		$("#player-vol .fa-volume-up").css({"display":"none"});	
		$("#player-vol .fa-volume-off").css({"display":"inline-block"});			
	}
	function muteUnmute() {
		if (player.isMuted()==true) {			
			player.unMute();
			showUnmuteIcon();
		}else{									
			player.mute();
			showMuteIcon();
		};
	}

	function expand() {							$("#player").parent().parent().toggleClass("expand");	}
	showUnmuteIcon();
	$("#player-expand").click(function(){		expand();				});

	$("#player-pause").click(function(){		player.pauseVideo();	});
	$("#player-play").click(function(){			player.playVideo();		});

	$("#player-playAt").click(function(){		onYouTubePlayerAPIReady();	});
	$("#player-prev").click(function(){			prevVideo();	});
	$("#player-next").click(function(){			nextVideo();	});
	$("#player-vol").click(function(){			muteUnmute(); 	});
	$("#player-repeat").click(function(){		repeatVideo();	});
</script>