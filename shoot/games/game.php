<!DOCTYPE html>
<html dir="ltr" lang="pt"> 
<head>
	<script src="../js/jquery-2.1.3.min.js"></script>
	<?php 
		include('../../dbConnection.php');
		include('../../shoot/apps/shooters-userdata.php');
		/* SETTING UP PRESETS */
			switch ($settings) {
				case 0:
					echo "<link rel='stylesheet' href='../stylesheets/low-settings.css'>";
					?><script>$(document).ready(function () {$('.loading-statut').append("<br/>loading: low-settings.css")});</script><?php
					break;
				case 1:
					echo "<link rel='stylesheet' href='../stylesheets/normal-settings.css'>";
					?><script>$(document).ready(function () {$('.loading-statut').append("<br/>loading: normal-settings.css")});</script><?php
					break;
				case 2:
					echo "<link rel='stylesheet' href='../stylesheets/normal-settings.css'>";
					echo "<link rel='stylesheet' href='../stylesheets/ultra-settings.css'>";
					?><script>$(document).ready(function () {$('.loading-statut').append("<br/>loading: ultra-settings.css")});</script><?php
					break;
				default:
					echo "<link rel='stylesheet' href='../stylesheets/normal-settings.css'>";
					?><script>$(document).ready(function () {$('.loading-statut').append("<br/>loading: normal-settings.css")});</script><?php
					break;
			}

		//include('../head.php'); 
	?>
	<link rel="stylesheet" href="https://rawgit.com/peachananr/wheel-menu/master/wheelmenu.css">
	<link rel="stylesheet" href="../stylesheets/onlyoneminute.css">

	<script type="text/javascript" src="../js/TweenMax.min.js"></script>
	<link href='http://fonts.googleapis.com/css?family=Satisfy' rel='stylesheet' type='text/css'>
</head>
<body oncontextmenu="return false" onselectstart="return false" ondragstart="return false">
	
	<?php include('../preloader.php'); ?>
	
	<input type="hidden" value="<?php echo $settings ?>" id="settings">
	<input type="hidden" value="<?php echo $aud_musics ?>" id="music-vol">
	<input type="hidden" value="<?php echo $aud_ambiances ?>" id="ambiance-vol">
	<input type="hidden" value="<?php echo $aud_weapons ?>" id="weapons-vol">
	<input type="hidden" value="<?php echo $aud_birds ?>" id="birds-vol">
	<input type="hidden" value="1" id="rain-effect">
	<input type="hidden" value="<?php echo $weapon_ammo ?>" id="weapon_ammo">
	<input type="hidden" value="<?php echo $weapon_handle ?>" id="weapon_handle">
	<input type="hidden" value="<?php echo $weapon_damage ?>" id="weapon_damage">
	<input type="hidden" value="<?php echo $weapon_mag_capacity ?>" id="weapon_mag_capacity">
	<input type="hidden" value="../Weapons/cursors/<?php echo $weapon_src ?>" id="weapon_src">
	<input type="hidden" value="../Weapons/fireaudio/<?php echo $weapon_sound_fire ?>" id="weapon_sound_fire">
	<input type="hidden" value="../Weapons/reloadaudio/<?php echo $weapon_sound_reload ?>" id="weapon_sound_reload">
	<input type="hidden" value="../Weapons/emptyaudio/<?php echo $weapon_sound_empty ?>" id="weapon_sound_empty">

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
		<span class="cursor-scope"></span>
		<span class="cursor-scope"></span>
		<span class="cursor-scope"></span>
		<span class="cursor-scope"></span>
		<span class="cursor-scope"></span>

		<div class="best-score">Best score: <span><?php echo $score ; ?></span></div>
		<input type="hidden" id="best-score" value="<?php echo $score ; ?>">
		<div id="score" class="score">Your score: 0</div>
		<div id="timerText"></div>
		<div class="achivement">level up !</div>

		<a class="menubutton" onclick="preloader()">MENU</a>
		<a class="fullscreenbutton" onclick="toggleFullScreen()">FullScreen (F)</a>
		<div class="startbutton"><span onclick="countDown()">Start</span></div>
		<span id="feed"></span>
		<div class="ammo"></div>

		<script src="https://rawgit.com/peachananr/wheel-menu/master/jquery.wheelmenu.min.js"></script>
			<a href="#wheel2" class="wheel-button ne"><span>Weapons</span></a>
			<ul id="wheel2" class="wheel">
				<li class="item"><a href="#home">1</a></li>
				<li class="item"><a href="#home">2</a></li>
				<li class="item"><a href="#home">3</a></li>
				<li class="item"><a href="#home">4</a></li>
				<li class="item"><a href="#home">5</a></li>
				<li class="item"><a href="#home">6</a></li>
			</ul>
			</ul>

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

//KEYPRESS
	$(document).keypress(function(e){
		if(e.which == 102){ toggleFullScreen(); } // F
	});
	$(".wheel-button").wheelmenu({
	  trigger: "hover", // Can be "click" or "hover". Default: "click"
	  animation: "fly", // Entrance animation. Can be "fade" or "fly". Default: "fade"
	  animationSpeed: 1000, // Entrance animation speed. Can be "instant", "fast", "medium", or "slow". Default: "medium"
	  angle: "N", // Angle which the menu will appear. Can be "all", "N", "NE", "E", "SE", "S", "SW", "W", "NW", or even array [0, 360]. Default: "all" or [0, 360]
	});
	function switchWeapon(a) {
		$weaponsSlot = $('.weaponsSlot');
		if (a=="hold") {
      		console.log("hold");	
			$weaponsSlot.addClass("active");
		}else{
    		console.log("release");
			$weaponsSlot.removeClass("active");
		};
	}

	var keyPressed = false;
	$(document).on('keydown', function(e) {
	  var key;
	  if (keyPressed === false) {
	    keyPressed = true;
	    key = String.fromCharCode(e.keyCode);

	    //this is where you map your key
	    if (key === 'E') {
	      switchWeapon("hold");
	    }
	  }
	  $(this).on('keyup', function() {
	    if (keyPressed === true) {
	      keyPressed = false;
	      switchWeapon("release");
	    }
	  });
	});



//FULLSCREEN toggle
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
	var sec = 60;   				// set the seconds (60)

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
			var r = confirm("End of the Game!\nYour Score is:"+score+"\nRestart?");  /* PROMPT */
			if(r){
				$("#status,#preloader").fadeIn();
				document.location.href = "../apps/onlyoneminute/gamerestart.php?score="+score+"&coins="+score+"&GM=only one minute&phase=restart";
			}else{
				$("#status,#preloader").fadeIn();
				document.location.href = "../apps/onlyoneminute/gamerestart.php?score="+score+"&coins="+score+"&GM=only one minute";
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

//GAME src SETTINGS OR VARIABLES ============================================================================================================================

	var weapon = {			//dictionary
	    1: $('#weapon_handle').val(),				//handling
	    2: $('#weapon_sound_fire').val(),			//sound
	    3: $('#weapon_damage').val(),				//qty shot to kill (damage)
	    4: $('#weapon_mag_capacity').val(),			//magazine capacity
	    5: $('#weapon_src').val(),
	    6: $('#weapon_sound_reload').val(),
	    7: $('#weapon_sound_empty').val(),
	    //7: $('#weapon_ammo').val(),
	};

	var chickenElm = {
		1: 100, 			//max health
		2: 10, 				//how many chickenElm
	};

	var WeaponDamage = 100/weapon[3];

	var score = 0;
	var showFirstTime = 1;
	var blt = weapon[4];
	var ambience = new Audio();ambience.loop=true;ambience.volume=$('#ambiance-vol').val();
	var countdown = new Audio();
	var empty    = new Audio(); 
	var reload   = new Audio();reload.volume=$('#weapons-vol').val();
	var notify   = new Audio();
	var chicken  = new Audio();chicken.volume=$('#birds-vol').val(); 
	var chicken2 = new Audio();chicken2.volume=$('#birds-vol').val(); 
	var chicken3 = new Audio();chicken3.volume=$('#birds-vol').val(); 

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

	var a = false ;
	for (var c = 1; c <= chickenElm[2]; c++) {
		
		//FLIP FLOP CLASS
		function toggle(){
			if ( a == true ) 		{	a = false;	$class = "run-animationinv"; 	}
			else if ( a == false ) 	{ 	a = true;	$class = "run-animation";		}
		}
		toggle();
		$('.container').append("<span identification='"+c+"' health='100' class='chicken "+$class+"'><div class='hp-hud'><span class='hp-bar'></span></div></span>");
		
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

	$('body').css("background-image","url("+random_background([	"../img/onlyoneminute/landscape1.jpg",
																"../img/onlyoneminute/landscape2.jpg",
																"../img/onlyoneminute/landscape3.jpg",
																"../img/onlyoneminute/landscape4.jpg",
																"../img/onlyoneminute/landscape5.jpg"])+")");
	//console.log("oi: "+random_background(["../img/onlyoneminute/landscape1.jpg","../img/onlyoneminute/landscape1.jpg"]));

//CURSOR - BLUR

	var $box = $('.cursor-scope'),
	  	inter = $('.cursor-scope').length,
	  	opac = 1/inter;

	var sets = $("#settings").val();

	function moveBox(e) {
		handling = weapon[1]; //0.05 - default
		if (sets==0) {
			blur_amount = 0;
		}else{
			blur_amount = 350; //350 - default
		}
	  	$box.each(function(index, val) {
	   		TweenLite.to($(this), handling, { css: { left: e.pageX, top: e.pageY },delay:0+(index/blur_amount)});
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
		        autoAlpha: 0.5 - (opac * index), //scope opacity
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
		        autoAlpha: 0.5 - (opac * index), //scope opacity
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
	/*
		function anim(e) {
			console.log("lol"+e);
			e.animate({top:'20px',right:'20px'},2000);
		}
	*/
		var ra  = $(".chicken");
			
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
				if (randSize < 30) { 				ra[EI].style['-webkit-animation-duration'] = "30s";ra[EI].style['animation-duration'] = "30s";			 }else{
					if (randSize < 50) { 			ra[EI].style['-webkit-animation-duration'] = "20s";ra[EI].style['animation-duration'] = "20s";			 }else{
						if (randSize < 80) { 		ra[EI].style['-webkit-animation-duration'] = "15s";ra[EI].style['animation-duration'] = "15s";			 }else{
							if (randSize >= 80) {	ra[EI].style['-webkit-animation-duration'] = "7s";ra[EI].style['animation-duration'] = "7s";			 };
						};
					};
				};
			}

			var ei = ra[EI];
			birds_random_start(ei);
			
			ra[EI].addEventListener("click", function(e,health,identification) {			e.preventDefault;
				
				$(this).attr("health",$(this).attr("health")-WeaponDamage);							//dicrease HP
				$(this).children().children().css("width",$(this).attr("health")+"%");				//update HP bar
				
				if ($(this).attr("health") <= 0) {
					var ths = $(this).width();
					
					kill_to_score(ths);
					
					$(this).attr("health",chickenElm[1]);
					
					var randPosY = Math.floor( (    Math.random()*(max-min+1)+min     )       );
					var randSize = Math.floor( (    Math.random()*maxsize             ) +20   );
					e.target.classList.add("die");
					e.target.style.zIndex = -100;
					
					setTimeout(function(){
						e.target.classList.remove("die");
						if (e.target.classList == "chicken run-animation") {
							e.target.classList.remove("run-animation");
							e.target.offsetWidth = e.target.offsetWidth;
							e.target.classList.add("run-animation");
						}else{
							e.target.classList.remove("run-animationinv");
							e.target.offsetWidth = e.target.offsetWidth;
							e.target.classList.add("run-animationinv");
						};
						e.target.style.top = randPosY+"%";e.target.style.width = randSize+"px";e.target.style.height = randSize+"px";e.target.style.zIndex = -1;
						if (randSize < 30) { 				e.target.style['-webkit-animation-duration'] = "30s";e.target.style['animation-duration'] = "30s";			 }else{
							if (randSize < 50) { 			e.target.style['-webkit-animation-duration'] = "20s";e.target.style['animation-duration'] = "20s";			 }else{
								if (randSize < 80) { 		e.target.style['-webkit-animation-duration'] = "15s";e.target.style['animation-duration'] = "15s";			 }else{
									if (randSize >= 80) {	e.target.style['-webkit-animation-duration'] = "7s";e.target.style['animation-duration'] = "7s";			 };
								};
							};
						};
					},50); 
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

//NOTIFY
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

		var chicken_min = 1,
			chicken_max = 3;

		var chicken_random = Math.floor(Math.random() * (chicken_max - chicken_min + 1)) + chicken_min;

		switch (chicken_random) {

			case 1:  chicken.play();	break;
			case 2:  chicken2.play();	break;
			case 3:  chicken3.play();	break;

			default: chicken.play();	break;		

		}

	}

//CURSOR (STYLES AND ANIMATION)

	$('body').mouseover(function(){
		$(this).css({cursor: 'none',height: '100%'});
		$('.cursor-scope').css("background-image","url("+weapon[5]+"");
	});
	//$(document).on('mousemove', function(e){
	//	$('.cursor-scope').css({left: e.pageX,top: e.pageY});
	//});
	
	function animcursor(){
		$('.cursor-scope').addClass("shooted").delay(100).queue(function(){
	    	$(this).removeClass("shooted").dequeue();
		});
	}

//FIRE SHOT(sound)

	function fireshot() {

		var fire = new Audio();
		fire.src = weapon[2];
		fire.volume=$('#weapons-vol').val();
		fire.play(); 

	}

//SHOOT

	$(document).click(function() { shoot(); });

	/*	NEED TO CHANGE KILL TO SCORE INPUT METHOD (big job)	$(document).contextmenu(function () {	shoot(); });*/


	function shoot() {

		animcursor();
		
		if ( blt > 0 ) {
			blt = blt - 1;
			$('#'+blt).addClass("shooted");
			fireshot();
		}		

		if ( blt == 0 ) {
			var empty = new Audio();
			empty.src = weapon[7];
			empty.volume=$('#weapons-vol').val();
			empty.play(); 
			blt = 0;
			$('.run-animation,.run-animationinv').css('pointer-events','none');
			if (showFirstTime==1) {
				$('.reload').css({display: "block"});
				showFirstTime=0;
			};

//RELOAD ON CLICK 
	//(need check screen mobile or tablet)
			/*if ($(window).width()<=768) {
				$('.reload').on("click", function(){
					blt=8;
					reload.play();			//console.log(blt);
					$('.run-animation').css('z-index','1');
					$('.reload').css({display: "none"});
					$('.bullets').css({width: '25px','margin-top': '0','position':'relative',height: '100%'});
					return false;
				});
			};*/

		}
	}

//RELOAD WEAPON

	$(document).keydown(function(e) {
		
		if (e.keyCode == 82) {
			
			blt = weapon[4] ;

			$('.run-animation').css('pointer-events','initial');
			$('.run-animationinv').css('pointer-events','initial');
			$('.reload').css({display: "none"});
			$('.bullets').removeClass("shooted");

			var reload = new Audio();
			reload.src = weapon[6];
			reload.volume=$('#weapons-vol').val();
			reload.play(); 

		}

	});

//RAIN FUNCTION

	var re = document.getElementById('rain-effect').value;
	if ( re == 1 ) {
		var nbDrop = 200;//858; 			// number of drops created.

		function randRange( minNum, maxNum) {
		  return (Math.floor(Math.random() * (maxNum - minNum + 1)) + minNum);
		}

		function createRain() {
			for( i=1;i<nbDrop;i++) {
				var dropLeft = randRange(0,1920);
				var dropTop = randRange(-1000,1400);
				$('.rain').append('<div class="drop" id="drop'+i+'"></div>');
				$('#drop'+i).css('left',dropLeft);
				$('#drop'+i).css('top',dropTop);
			}
		}

		createRain();
	};

</script>
