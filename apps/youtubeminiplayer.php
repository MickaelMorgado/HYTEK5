<div class="container-fluid">
	<div class="row">
		<div class="col-xs-12 col-sm-6 col-md-12">
		<div id="boby"></div>
			<a id="menu-toggle" href="#" class="btn btn-primary btn-lg toggle"><i class="fa fa-cog" aria-hidden="true"></i></a>
			<div id="sidebar-wrapper">
			    <a id="menu-close" href="#" class="btn btn-primary btn-lg toggle"><i class="fa fa-times" aria-hidden="true"></i></a>
			    <div class="container-fluid">
			    	<div class="row">
			    		<div class="col-xs-12">
			    			<?php if (isset($_SESSION['id_session'])): ?>
			    				<br />
			    				<form action="apps/youtube/add-link.php" method="POST">
			    					<input type="text" name="tarea" placeholder="Add Youtube url">
									<input type="submit" value="+">
								</form>
								<h5>playlist:</h5>
								<div id="YTlist" class="scrollable youtube">
									<?php include('apps/youtube/get-links.php'); ?>
								</div>
							<?php endif ?>
			    		</div>
			    		<div class="col-xs-12">
							<div class="player-controls">
								<div class="progress">
								    <div id="youtubeRangeSlider" class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
								      	<span class="sr-only">70% Complete</span>
								    </div>
									<input id="youtubeRangeSlider-input" type="range" min="0" max="100">
								  </div>
								<span id="player-prev" 		title="previous"><i class="fa fa-fast-backward"></i></span>
								<span id="player-pause" 	title="pause"><i class="fa fa-pause"></i></span>
								<span id="player-play" 		title="play"><i class="fa fa-play"></i></span>
								<span id="player-next" 		title="next"><i class="fa fa-fast-forward"></i></span>
								<span id="player-vol" 		title="mute/unmute"><i class="fa fa-volume-up"></i><i class="fa fa-volume-off"></i></span>
								<span id="player-playAt" 	title="go to first"><i class="fa fa-reply"></i></span>
								<!--span id="player-expand" title="toggle view"><i class="fa fa-expand"></i></span-->
								<span id="player-repeat" 	title="repeat video"><i class="fa fa-repeat" aria-hidden="true"></i></span>
								<span id="player-shuffle" 	title="shuffle video"><i class="fa fa-random" aria-hidden="true"></i></span>
								<span id="player-loopAB" 	title="loop from A to B"><i class="fa fa-repeat" aria-hidden="true"></i></span>
								<span class="seconds-display"></span>
							</div>
			    		</div>
			    	</div>
			    </div>
			</div>
		</div>
	</div>
</div>
<script>
$(window).load(function(){
  var tag = document.createElement('script');
  tag.src = "https://www.youtube.com/iframe_api";
  var firstScriptTag = document.getElementsByTagName('script')[0];
  firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);
});
  var 	player,
  		dataOrder = 0,
  		lastOrder = $('.playlistlink').last().data("order"),
  		shuffleVideo = false;
	function onYouTubeIframeAPIReady() {
	    player = new YT.Player('boby', {
	      	height: '300',
	      	width: '100%',
	     	<?php if (isset($_SESSION['id_session'])): ?>
			videoId: $('#YTlist').find("a").first().data('src'),
			<?php else: ?>
			videoId: "g7TAqv-dx2Y",
			<?php endif ?>
			events: {
				'onStateChange': onPlayerStateChange
			}
	    });
	}
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
			$("#player-repeat").removeClass("repeat-active");
		}
		else{ 
			repeatVideoVar = true; 
			$("#player-repeat").addClass("repeat-active");
		};
	}
	// when video ends
	function onPlayerStateChange(event) { 
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
        	highlightCurrent(dataOrder);
		}
        if (event.data == YT.PlayerState.PLAYING && !done) { /* CODE HERE like open links to target blank // check player.getPlayerState() */
        	$("#player-play").css({"display":"none"});
        	$("#player-pause").css({"display":"inline-block"});
        	$("a:not(.tutorial),.link-list").attr("target","_blank");
        	$("link[rel='icon']").attr("href","dependencies/img/audioplaying.png");
        	$(".player").addClass("active");
        	$("#google-search").attr("onclick","window.open('https://www.google.com/search?q='+$('#searchinput').val());");
        	$("#youtube-search").attr("onclick","window.open('https://www.youtube.com/results?search_query='+$('#searchinput').val());");
        }else{
        	$("link[rel='icon']").attr("href","../hyteklogo.jpg");
        	$("#player-pause").css({"display":"none"});
        	$("#player-play").css({"display":"inline-block"});
        	$(".player").removeClass("active");
        }
	}
	function highlightCurrent(dO) {
		$('.playlistlink').removeClass('active');
		$('.playlistlink[data-order='+dO+']').addClass('active');
	}
	function randomIntFromInterval(min,max){
	    return Math.floor(Math.random()*(max-min+1)+min);
	}
	function randomVideo() {
		dataOrder = randomIntFromInterval(0,lastOrder);
		player.loadVideoById(""+$('#YTlist').find('[data-order='+dataOrder.toString()+']').data('src'));
	}
	function shuffle() {
		if (shuffleVideo) { 
			shuffleVideo = false; 
			dataOrder = dataOrder;
			$("#player-shuffle").removeClass("shuffle-active");
		}else{ 
			shuffleVideo = true; 
			$("#player-shuffle").addClass("shuffle-active");
			randomVideo();
		};
	}
	function nextVideo(){
		if (shuffleVideo && repeatVideoVar) { 	dataOrder = dataOrder; 	 	}
		else if (repeatVideoVar) { 				dataOrder = dataOrder; 	 	}
		else if (shuffleVideo) { 				randomVideo(); 				}
		else { 									dataOrder = dataOrder+1; 	}
		if (dataOrder >= lastOrder) { /* repeat all playlist again on reach last video */
			dataOrder = -1;
			nextVideo();
		}else{
			player.loadVideoById(""+$('#YTlist').find('[data-order='+dataOrder.toString()+']').data('src'));
		}
	}
	function prevVideo(){
		if (shuffleVideo && repeatVideoVar) { 	dataOrder = dataOrder; 	 	}
		else if (repeatVideoVar) { 				dataOrder = dataOrder; 	 	}
		else if (shuffleVideo) { 				randomVideo(); 				}
		else { 									dataOrder = dataOrder-1; 	}
		if (dataOrder >= lastOrder) { /* repeat all playlist again on reach last video */
			dataOrder = -1;
			nextVideo();
		}else{
			player.loadVideoById(""+$('#YTlist').find('[data-order='+dataOrder.toString()+']').data('src'));
		}
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
	var ff = false ;
	function toggle(player){
		if (ff == true) { ff = false;
			player.pauseVideo();
		}else if (ff == false){ ff = true;
			player.playVideo();
		}
	}
	function PlayOrPauseVideo(player) { 		toggle(player);	}
	function expand() {							$("#player").parent().parent().toggleClass("expand");	}
	var isActivate = false;
	function loopAB() {
		if (isActivate == true) {
			isActivate = false;
			$('#player-loopAB i').css({"opacity":"1"});
		}else{
			isActivate = true;
			$('#player-loopAB i').css({"opacity":"0.5"});
			var A = prompt("Start time in Seconds: ", player.getCurrentTime());
			var B = prompt("End time in Seconds: ", "107");
			player.seekTo(A);
			checkTime();
		    function checkTime(){
		        setTimeout(function(){
		        	$('.seconds-display').text(player.getCurrentTime().toFixed(0)+" sec");
		            if ( (player.getCurrentTime()>=B) || (player.getCurrentTime()>= (player.getDuration()-1)) ) { player.seekTo(A); }
		            if (isActivate) { checkTime(); }
		        },100);
		    }
		}
	}
	showUnmuteIcon();
	$("#player-expand").click(function(){		expand();				});

	$("#player-pause").click(function(){		PlayOrPauseVideo(player);	});
	$("#player-play").click(function(){			PlayOrPauseVideo(player);	});

	$("#player-playAt").click(function(){		onYouTubePlayerAPIReady();	});
	$("#player-prev").click(function(){			prevVideo();	});
	$("#player-next").click(function(){			nextVideo();	});
	$("#player-vol").click(function(){			muteUnmute(); 	});
	$("#player-repeat").click(function(){		repeatVideo();	});
	$("#player-shuffle").click(function(){		shuffle();		});
	$("#player-loopAB").click(function(){		loopAB();		});


	/*============================================================
	    keypress plugin (https://dmauro.github.io/Keypress/)
	============================================================*/
		
		/* 
		var listener = new window.keypress.Listener();

		PLAY YOUTUBE 
			listener.simple_combo("shift p", function() { PlayOrPauseVideo(player); });
			listener.simple_combo("shift n", function() { nextVideo(); });
			listener.simple_combo("shift b", function() { prevVideo(); });
			listener.simple_combo("shift m", function() { muteUnmute(); });
			listener.simple_combo("shift r", function() { repeatVideo(); });
		*/

</script>