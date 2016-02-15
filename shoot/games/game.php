<!DOCTYPE html>
<html dir="ltr" lang="pt"> 
<?php 
	include('../head.php'); 
	session_start();
?>
<head>
	<link rel="stylesheet" href="../css/game.css">
	<?php 
	if (isset($_SESSION['id_sess'])!='') {
		$result = mysqli_query( $link, "SELECT * FROM shooters WHERE ID = $_SESSION[id_sess]" );
		while($row = mysqli_fetch_assoc($result)) {
			$settings = $row['settings'];
			$music = $row['music'];
			$ambiance = $row['ambiance'];
			$weapons = $row['weapons'];
			$birds = $row['birds'];
			$score = $row['score'];
		}
		switch ($settings) {
			case 0:
				echo "<link rel='stylesheet' href='../css/low-settings.css'>";
				?><script>$(document).ready(function () {$('.loading-statut').append("<br/>loading: low-settings.css")});;</script><?php
				break;
			case 1:
				echo "<link rel='stylesheet' href='../css/normal-settings.css'>";
				?><script>$(document).ready(function () {$('.loading-statut').append("<br/>loading: normal-settings.css")});;</script><?php
				break;
			case 2:
				echo "<link rel='stylesheet' href='../css/normal-settings.css'>";
				echo "<link rel='stylesheet' href='../css/ultra-settings.css'>";
				?><script>$(document).ready(function () {$('.loading-statut').append("<br/>loading: ultra-settings.css")});;</script><?php
				break;
			
			default:
				echo "<link rel='stylesheet' href='../css/normal-settings.css'>";
				?><script>$(document).ready(function () {$('.loading-statut').append("<br/>loading: normal-settings.css")});;</script><?php
				break;
		}
	}else{
		$settings = 0;
		$music = 1;
		$ambiance = 1;
		$weapons = 1;
		$birds = 1;
		echo "<link rel='stylesheet' href='../css/normal-settings.css'>";
	}
	?>
	<script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
	<script type="text/javascript" src="../js/TweenMax.min.js"></script>
	<link href='http://fonts.googleapis.com/css?family=Satisfy' rel='stylesheet' type='text/css'>
</head>
<body oncontextmenu="return false" onselectstart="return false" ondragstart="return false">
	
	<?php include('../preloader.html'); ?>
	
	<input type="hidden" value="<?php echo $settings ?>" id="settings">
	<input type="hidden" value="<?php echo $music ?>" id="music-vol">
	<input type="hidden" value="<?php echo $ambiance ?>" id="ambiance-vol">
	<input type="hidden" value="<?php echo $weapons ?>" id="weapons-vol">
	<input type="hidden" value="<?php echo $birds ?>" id="birds-vol">
	<input type="hidden" value="1" id="rain-effect">

	<?php 
	for ($i=0; $i < 8; $i++) { 
		?><audio class="fire<?php echo $i; ?>" ><source src="../audios/onlyoneminute/barret2.mp3" type="audio/mpeg"></audio> <?php
	} 
	?>

	<div class="smoke"></div>
	<div class="light"></div>

	<div class="container">
		<span class="cursor-scope"></span>
		<span class="cursor-scope"></span>
		<span class="cursor-scope"></span>
		<span class="cursor-scope"></span>
		<span class="cursor-scope"></span>
		<span class="cursor-scope"></span>
		<span class="cursor-scope"></span>
		<span class="cursor-scope"></span>
		<span class="cursor-scope"></span>
		<span class="cursor-scope"></span>
		
		<div class="best-score">Last score: <span><?php echo $score ; ?></span></div>
		<input type="hidden" id="best-score" value="<?php echo $score ; ?>">
		<div id="score" class="score">Your score: 0</div>
		<div id="timerText"></div>
		<div class="achivement">level up !</div>

		<!--span id="span" health="10" class="run-animation"></span>
		<span id="span" health="10" class="run-animation"></span>
		<span id="span" health="10" class="run-animation"></span>
		<span id="span" health="10" class="run-animation"></span>
		<span id="span" health="10" class="run-animation"></span>
		<span id="span" health="10" class="run-animation"></span>
		<span id="span" health="10" class="run-animation"></span>
		<span id="span" health="10" class="run-animation"></span>

		<span id="span" health="10" class="run-animationinv"></span>
		<span id="span" health="10" class="run-animationinv"></span>
		<span id="span" health="10" class="run-animationinv"></span>
		<span id="span" health="10" class="run-animationinv"></span>
		<span id="span" health="10" class="run-animationinv"></span>
		<span id="span" health="10" class="run-animationinv"></span>
		<span id="span" health="10" class="run-animationinv"></span>
		<span id="span" health="10" class="run-animationinv"></span-->

		<a class="menubutton" onclick="preloader()">MENU</a>
		<a class="fullscreenbutton" onclick="toggleFullScreen()">FullScreen (F)</a>
		<div class="startbutton"><span onclick="countDown()">Start</span></div>
		<span id="feed"></span>
		<div class="ammo"></div>

		<span class="reload"><span class="reload_small"></span></span>
	</div>
	<section class="rain"></section>
</body>	

<script class="game">

//PRELOADER 
	function preloader() {
		$("#preloader,#status").fadeIn();
		setTimeout(function() {
		  window.location.href = "../index.php";
		}, 1000);

	}

//FULLSCREEN toggle
	$(document).keypress(function(e){
		if(e.which == 102){ toggleFullScreen(); }
	});
	function toggleFullScreen() {
	  if ((document.fullScreenElement && document.fullScreenElement !== null) ||    
	   (!document.mozFullScreen && !document.webkitIsFullScreen)) {
	    if (document.documentElement.requestFullScreen) {  
	      document.documentElement.requestFullScreen();  
	    } else if (document.documentElement.mozRequestFullScreen) {  
	      document.documentElement.mozRequestFullScreen();  
	    } else if (document.documentElement.webkitRequestFullScreen) {  
	      document.documentElement.webkitRequestFullScreen(Element.ALLOW_KEYBOARD_INPUT);  
	    }  
	  } else {  
	    if (document.cancelFullScreen) {  
	      document.cancelFullScreen();  
	    } else if (document.mozCancelFullScreen) {  
	      document.mozCancelFullScreen();  
	    } else if (document.webkitCancelFullScreen) {  
	      document.webkitCancelFullScreen();  
	    }  
	  }  
	}

//TIMER
	var sec = 60;   				// set the seconds

	function countDown() {
		var min = 0;   				// set the minutes
		$('.startbutton').css({"display":"none"});
		sec--;
		if (sec == -01) {
			sec = 59;
			min = min - 1;
		} else {
			min = min;
		}

		if (sec<=9) { sec = "0" + sec; }
	  	time = (min<=9 ? "0" + min : min) + ":" + sec + "";

		if (document.getElementById) { 
		    var theTime = document.getElementById('timerText');
		    theTime.innerHTML = time; 
		}

		SD=window.setTimeout("countDown();", 1000);

		if (min == "00" && sec == '10') { countdown.play(); }
		if (min == '00' && sec == '00') { sec = "00"; window.clearTimeout(SD); 
			var r = confirm("End of the Game!\nYour Score is:"+score+"\nRestart?"); 
			if(r){
				$("#status,#preloader").fadeIn();
				document.location.href = "../apps/onlyoneminute/gamerestart.php?score="+score+"&GM=only one minute&phase=restart";
			}else{
				$("#status,#preloader").fadeIn();
				document.location.href = "../apps/onlyoneminute/gamerestart.php?score="+score+"&GM=only one minute";
			}
		}
	}

	function addLoadEvent(func) {
	  var oldonload = window.onload;
	  if (typeof window.onload != 'function') {
	    window.onload = func;
	  } else {
	    window.onload = function() {
	      if (oldonload) {
	        oldonload();
	      }
	      func();
	    }
	  }
	}

//GAME src

	var weapon = {			//dictionary
	    1: "src",			//css classe or img
	    2: "sound",			//sound
	    3: 33.333334,		//damage
	    4: 8,				//ammo
	};

	var chickenElm = {
		1: 100, 			//max health
		2: 5, 				//how many chickenElm side by side
	};

	var score = 0;
	var blt = weapon[4];
	var ambience = new Audio();ambience.loop=true;ambience.volume=document.getElementById('ambiance-vol').value;
	var countdown = new Audio();
	$('.loading-statut').append("<br/>ambiance-volume: "+document.getElementById('ambiance-vol').value);
	$('.loading-statut').append("<br/>weapons-volume: "+document.getElementById('weapons-vol').value);

	/*
		fire7.src='gun2.mp3';	
		fire6.src='gun2.mp3';	
		fire5.src='gun2.mp3';	
		fire4.src='gun2.mp3';	
		fire3.src='gun2.mp3';	
		fire2.src='gun2.mp3';	
		fire1.src='gun2.mp3';	
		fire0.src='gun2.mp3';	
	*/

	var empty    = new Audio(); 
	var reload   = new Audio(); 
	var notify   = new Audio();
	var chicken  = new Audio();chicken.volume=document.getElementById('birds-vol').value; 
	var chicken2 = new Audio();chicken2.volume=document.getElementById('birds-vol').value; 
	var chicken3 = new Audio();chicken3.volume=document.getElementById('birds-vol').value; 
	$('.loading-statut').append("<br/>birds-volume: "+document.getElementById('birds-vol').value);

	reload.src='../audios/onlyoneminute/reload.mp3'; 
	empty.src='../audios/onlyoneminute/emptyn.mp3'; 
	notify.src='../audios/onlyoneminute/notify.mp3'; 
	chicken.src='../audios/onlyoneminute/chicken2.mp3'; 
	chicken2.src='../audios/onlyoneminute/chicken3.mp3'; 
	chicken3.src='../audios/onlyoneminute/chicken4.mp3'; 
	ambience.src='../audios/onlyoneminute/ambiance.mp3'; 
	countdown.src='../audios/onlyoneminute/countdown.mp3';

//SPAWN ELEMENTS
	for (var a = blt-1; a >= 0; a--) {
		$(".ammo").append("<span id='"+a+"' class='bullets'></span><span class='effect'></span>");
	};
	for (var b = 1; b <= chickenElm[2]; b++) {
		$('.container').append("<span id='span' health='100' class='run-animation'><div class='hp-hud'><span class='hp-bar'></span></div></span>");
	};
	for (var c = 1; c <= chickenElm[2]; c++) {
		$('.container').append("<span id='span' health='100' class='run-animationinv'><div class='hp-hud'><span class='hp-bar'></span></div></span>");
	};

//DOCUMENT READY
	$(document).ready(function(){
		ambience.play();
		$('body').disableSelection;
	});

//STYLES
	random_background = function (list) {
	  return list[Math.floor((Math.random()*list.length))];
	} 

	$('body').css("background-image","url("+random_background(["../img/onlyoneminute/landscape1.jpg","../img/onlyoneminute/landscape2.jpg","../img/onlyoneminute/landscape3.jpg"])+")");
	//console.log("oi: "+random_background(["../img/onlyoneminute/landscape1.jpg","../img/onlyoneminute/landscape1.jpg"]));

//CURSOR - BLUR

	var $box = $('.cursor-scope'),
	  inter = 10,
	  speed = 0;

	var sets = document.getElementById("settings").value;
	$('.loading-statut').append("<br/>settings: "+document.getElementById('settings').value);

	function moveBox(e) {
		handling = 0.1; //0.05 - default
		if (sets==0) {
			blur_amount = 0; //750 - default
		}else{
			blur_amount = 250; //750 - default
		}
	  	$box.each(function(index, val) {
	   		TweenLite.to($(this), handling, { css: { left: e.pageX, top: e.pageY},delay:0+(index/blur_amount)});
	  	});
	}


	$(window).on('mousemove', moveBox);
	var mX = $(window).width()/2;
	$(window).mousemove(function(e) {
	   
	    if (e.pageX < mX) {//console.log('Left: ' + mX);
	        mX = e.pageX;//$('.cursor-scope').css({'transform':'rotate('+-5+'deg)'});
	        
	    } else {//console.log('Right: ' + mX);
	        mX = e.pageX;//$('.cursor-scope').css({'transform':'rotate('+5+'deg)'});
	    }

	});

//BLUR - settings
	if (sets==0) {
		//$('.cursor-scope').css({"opacity":"0.7"});
		$box.each(function(index, val) {
		    index = index + 1;
		    TweenMax.set(
		      $(this),{
		        autoAlpha: 1 - (0.0333 * index), //scope opacity
		        delay:1
		      }
		    );
		});
		TweenMax.set(
		    $('.text:nth-child(30)'), {
		      autoAlpha: 0,
		      delay: 0
		    }
		);
	}else{
	
		$box.each(function(index, val) {
		    index = index + 1;
		    TweenMax.set(
		      $(this),{
		        autoAlpha: 0.3 - (0.0333 * index), //scope opacity
		        delay:1
		      }
		    );
		});
		TweenMax.set(
		    $('.text:nth-child(30)'), {
		      autoAlpha: 1.5,
		      delay: 0
		    }
		);
		
	}

//BIRDS ANIMATION RESTARTED ON CLICK
	var ra  = $(".run-animation"),
		rai = $(".run-animationinv");
		
		/* for feed */
		var feed = [],
			b = 0,

		/* random properties (spawn safe-zone) */
			max = 90,        				//body max-height
			min = 8,		 				//body min-height
			maxsize = 100;

	for(EI = 0; EI < ra.length; EI++){
		function birds_random_start(ei) {
			var startDelay = Math.floor((   Math.random()*10                  ) +30   ),
			    randPosY = Math.floor( (    Math.random()*(max-min+1)+min     )       ),
			    randSize = Math.floor( (    Math.random()*maxsize             ) +30   );
			ra[EI].style.left = -startDelay*5+"px";ra[EI].style.top = randPosY+"%";ra[EI].style.width = randSize+"px";ra[EI].style.height = randSize+"px";
		}
		var ei = ra[EI];
		birds_random_start(ei);
		ra[EI].addEventListener("click", function(e,health){			e.preventDefault;
			$(this).attr("health",$(this).attr("health")-weapon[3]);							//dicrease HP
			$(this).children().children().css("width",$(this).attr("health")+"%");				//update HP bar
			if ($(this).attr("health") <= 0) {
				var ths = $(this).width();
				kill_to_score(ths);
				$(this).attr("health",chickenElm[1]);
				var randPosY = Math.floor( (    Math.random()*(max-min+1)+min     )       );
				var randSize = Math.floor( (    Math.random()*maxsize             ) +20   );
				e.target.classList.add("die");e.target.style.zIndex = -100;
				setTimeout(function(){e.target.classList.remove("die");e.target.classList.remove("run-animation");e.target.offsetWidth = e.target.offsetWidth;e.target.classList.add("run-animation");e.target.style.top = randPosY+"%";e.target.style.width = randSize+"px";e.target.style.height = randSize+"px";e.target.style.zIndex = -1;},50); 
			};
			chickensound();
		}, false);
	}

	for(EI = 0; EI < rai.length; EI++){
		function birds_random_start(ei) {
			var startDelay = Math.floor((   Math.random()*10                  ) +30   ),
			    randPosY = Math.floor( (    Math.random()*(max-min+1)+min     )       ),
			    randSize = Math.floor( (    Math.random()*maxsize             ) +20   );
			rai[EI].style.right = -startDelay*5+"px";rai[EI].style.top = randPosY+"%";rai[EI].style.width = randSize+"px";rai[EI].style.height = randSize+"px";
		}
		var ei = rai[EI];
		birds_random_start(ei);
		rai[EI].addEventListener("click", function(e,health){			e.preventDefault;
			$(this).attr("health",$(this).attr("health")-weapon[3]);							//dicrease HP
			$(this).children().children().css("width",$(this).attr("health")+"%");				//update HP bar
			if ($(this).attr("health") <= 0) {
				var ths = $(this).width();
				kill_to_score(ths);
				$(this).attr("health",chickenElm[1]);
				var randPosY = Math.floor( (    Math.random()*(max-min+1)+min     )      );
				var randSize = Math.floor( (    Math.random()*maxsize             ) +20  );
				e.target.classList.add("die");e.target.style.zIndex = -100;
				setTimeout(function(){e.target.classList.remove("die");e.target.classList.remove("run-animationinv");e.target.offsetWidth = e.target.offsetWidth;e.target.classList.add("run-animationinv");e.target.style.top = randPosY+"%";e.target.style.width = randSize+"px";e.target.style.height = randSize+"px";e.target.style.zIndex = -1;},50); 
			};
			chickensound();
		}, false);
	}

//KILL TO SCORE
	var showOneTime = false;
	
	function kill_to_score(ths) {
		if(ths < 30){
			score = score + 300;
			bird = "AMAZING_SHOT";
			$("#score").html(" Your score: "+score);	
			$('#score').addClass("winscore300").delay(500).queue(function(){
			    $(this).removeClass("winscore300").dequeue();
			});
		}else{
			if(ths < 50){
				score = score + 200;
				bird = "Long_Shot";
				$("#score").html(" Your score: "+score);	
				$('#score').addClass("winscore200").delay(500).queue(function(){
				    $(this).removeClass("winscore200").dequeue();
				});
			}else{
				if(ths < 80){
					score = score + 100;
					bird = "Nice_shot";
					$("#score").html(" Your score: "+score);	
					$('#score').addClass("winscore100").delay(500).queue(function(){
					    $(this).removeClass("winscore100").dequeue();
					});
				}else{
					score = score + 50 ;
					bird = "simple_shot";
					$("#score").html(" Your score: "+score);	
					$('#score').addClass("winscore50").delay(500).queue(function(){
					    $(this).removeClass("winscore50").dequeue();
					});	
				}
			}
		}
	// NOTIFY
		//console.log(score+"->"+$('#best-score').val());
		if (score >= $('#best-score').val() && showOneTime == false) {
			$('.achivement').addClass("show");
			notify.play();
			showOneTime = true;
		};

//FEED
		feed.push(bird);
		for (var i = 0; i < feed.length; i++) {
			fi = feed[i];
		}
		//console.log("feed: "+feed);
	    b = feed.length;
	    //console.log(b+" --> "+fi);
		$("#feed").append("<p data-feedid='"+b+"' class='feeded'>"+fi+"</p>");
		$(".feeded").delay(3000).fadeOut("slow");
	};

//CHICKEN SOUNDS
	function chickensound() {
		var chicken_min = 1;
		var chicken_max = 3;
		var chicken_random = Math.floor(Math.random() * (chicken_max - chicken_min + 1)) + chicken_min;
		switch (chicken_random) {
			case 1: 
					chicken.play();
					break;
			case 2: 
					chicken2.play();
					break;
			case 3: 
					chicken3.play();
					break;
			default: chicken.play();break;					
		}
	}

//CURSOR

	$('body').mouseover(function(){
		$(this).css({cursor: 'none',height: '100%'});
	});
	//$(document).on('mousemove', function(e){
	//	$('.cursor-scope').css({left: e.pageX,top: e.pageY});
	//});
	
	function animcursor(){
		$('.cursor-scope').addClass("shooted").delay(100).queue(function(){
	    	$(this).removeClass("shooted").dequeue();
		});
	}

//SHOOT

	$(document).click(function () {			
		shoot();
	});
	/*
	NEED TO CHANGE KILL TO SCORE INPUT METHOD (big job)
	$(document).contextmenu(function () {	
		shoot();
	});*/


	function shoot(){
		animcursor();
		if(blt>0){
			blt=blt-1;		//console.log(blt);
			/*switch(blt) {
				case 7: $('fire7').trigger("play");break; 
				case 6: $('fire6').trigger("play");break; 
				case 5: $('fire5').trigger("play");break; 
				case 4: $('fire4').trigger("play");break; 
				case 3: $('fire3').trigger("play");break; 
				case 2: $('fire2').trigger("play");break; 
				case 1: $('fire1').trigger("play");break; 
				case 0: $('fire0').trigger("play");break; 
				default: break;
			};			//fire.play(); */
			$('.fire'+blt.toString()).trigger('play');
			$('#'+blt).addClass("shooted");
		}		
		if(blt==0){
			empty.play();		//console.log("reload");
			blt=0;
			$('.run-animation,.run-animationinv').css('z-index','-100');
			$('.reload').css({display: "block"});

//RELOAD ON CLICK 
	//(need check screen mobile or tablet)
			/*$('.reload').on("click", function(){
				blt=8;
				reload.play();			//console.log(blt);
				$('.run-animation').css('z-index','1');
				$('.reload').css({display: "none"});
				$('.bullets').css({width: '25px','margin-top': '0','position':'relative',height: '100%'});
				return false;
			});*/

		}
	}

//RELOAD WEAPON
$(document).keydown(function(e) {
	if (e.keyCode == 82) {
		blt=weapon[4];
		$('.run-animation').css('z-index','1');
		$('.run-animationinv').css('z-index','1');
		$('.reload').css({display: "none"});
		$('.bullets').removeClass("shooted");
		reload.play();			//console.log(blt);
		//return false;
	}
});

//RAIN
var re = document.getElementById('rain-effect').value;
if (re == 1) {
	var nbDrop = 200;//858; 			// number of drops created.

	function randRange( minNum, maxNum) {
	  return (Math.floor(Math.random() * (maxNum - minNum + 1)) + minNum);
	}

	function createRain() {
		for( i=1;i<nbDrop;i++) {
			var dropLeft = randRange(0,1600);
			var dropTop = randRange(-1000,1400);
			$('.rain').append('<div class="drop" id="drop'+i+'"></div>');
			$('#drop'+i).css('left',dropLeft);
			$('#drop'+i).css('top',dropTop);
		}
	}

	createRain();
};
</script>
