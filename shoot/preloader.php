<?php 
	include('../../dbConnection.php');
?>
<style>
	/*PRELOADER*/
	#preloader  {
	     position: absolute;
	     top: 0;
	     left: 0;
	     right: 0;
	     bottom: 0;
	     //background-image: url('../img/smoke.png');
	     //background-size: 100% 100%;
	     background-color: #000;
	     z-index: 99;
	    height: 100%;
	 }

	.preloader {
	  display: inline-block;
	  position: absolute;
	  top: 0;
	  left: 0;
	  bottom: 0;
	  right: 0;
	  margin: auto;
	  width: 70px;
	  height: 70px;
	  background: inherit;
	  -webkit-animation: spin 2s linear infinite;
	  animation: spin 2s linear infinite;
	}

	.preloader-inner {
	  position: absolute;
	  height: 68px;
	  width: 68px;
	  top: 0;
	  bottom: 0;
	  left: 0;
	  right: 0;
	  margin: auto;
	  border: 4px solid #FFFFFF;
	  border-radius: 50%;
	  box-sizing: border-box;
	  animation: opas 1s ease-in-out infinite;
	  -webkit-animation: opas 1s ease-in-out infinite;
	}

	.preloader:before {
	  content: '';
	  position: absolute;
	  width: 4px;
	  height: 100%;
	  margin: auto;
	  left: 0;
	  right: 0;
	  background: inherit;
	  /*background: inherit;*/
	  
	  z-index: 2;
	  transform: rotate(-45deg);
	}

	.line {
	  position: absolute;
	  width: 4px;
	  height: 100%;
	  margin: auto;
	  left: 0;
	  right: 0;
	  /*background: #cccccc;*/
	  
	  background: inherit;
	  z-index: 1;
	}

	.line:before {
	  content: '';
	  position: absolute;
	  width: 100%;
	  height: 100%;
	  margin: auto;
	  left: 0;
	  right: 0;
	  background: inherit;
	  /*background: inherit;*/
	  
	  z-index: 1;
	  transform: rotate(45deg);
	}

	.line:after {
	  content: '';
	  position: absolute;
	  width: 100%;
	  height: 100%;
	  margin: auto;
	  left: 0;
	  right: 0;
	  background: inherit;
	  /*background: inherit;*/
	  
	  z-index: 1;
	  transform: rotate(90deg);
	}

	#pulse-loader .pulse-loader-1,
	#pulse-loader .pulse-loader-2 {
	  -webkit-border-radius: 1000px;
	  -moz-border-radius: 1000px;
	  -o-border-radius: 1000px;
	  border-radius: 1000px
	}

	#pulse-loader {
	  position: fixed;
	  z-index: -9999;
	  left: 50%;
	  top: 50%;
	  width: 300px;
	  height: 300px;
	  margin-left: -150px;
	  margin-top: -150px
	}

	#pulse-loader {
	  top: 45%
	}

	#pulse-loader>div {
	  position: absolute;
	  top: 0;
	  left: 0;
	  right: 0;
	  bottom: 0;
	  border-width: 20px;
	  border-style: solid;
	  border-color: #fff
	}

	#pulse-loader .pulse-loader-1 {
	  -webkit-animation: pulse1 1s .5s ease infinite;
	  -moz-animation: pulse1 1s .5s ease infinite;
	  -ms-animation: pulse1 1s .5s ease infinite;
	  -o-animation: pulse1 1s .5s ease infinite;
	  animation: pulse1 1s .5s ease infinite
	}

	#pulse-loader .pulse-loader-2 {
	  -webkit-animation: pulse1 1s ease infinite;
	  -moz-animation: pulse1 1s ease infinite;
	  -ms-animation: pulse1 1s ease infinite;
	  -o-animation: pulse1 1s ease infinite;
	  animation: pulse1 1s ease infinite
	}

	.loading-statut {
		color: #fff;
	}

	@-webkit-keyframes pulse1 {
	  0% {
	    -webkit-transform: scale(0)
	  }
	  40% {
	    -webkit-transform: scale(0.3);
	    opacity: 1
	  }
	  100% {
	    -webkit-transform: scale(1);
	    opacity: 0
	  }
	}

	@-moz-keyframes pulse1 {
	  0% {
	    -moz-transform: scale(0)
	  }
	  40% {
	    -moz-transform: scale(0.3);
	    opacity: 1
	  }
	  100% {
	    -moz-transform: scale(1);
	    opacity: 0
	  }
	}

	@-o-keyframes pulse1 {
	  0% {
	    -o-transform: scale(0)
	  }
	  40% {
	    -o-transform: scale(0.3);
	    opacity: 1
	  }
	  100% {
	    -o-transform: scale(1);
	    opacity: 0
	  }
	}

	@-ms-keyframes pulse1 {
	  0% {
	    -ms-transform: scale(0)
	  }
	  40% {
	    -ms-transform: scale(0.3);
	    opacity: 1
	  }
	  100% {
	    -ms-transform: scale(1);
	    opacity: 0
	  }
	}

	@keyframes pulse1 {
	  0% {
	    transform: scale(0)
	  }
	  40% {
	    transform: scale(0.3);
	    opacity: 1
	  }
	  100% {
	    transform: scale(1);
	    opacity: 0
	  }
	}
	@-webkit-keyframes opas {
	  0% {
	    opacity: 1;
	  }
	  50% {
	    opacity: 0.05;
	  }
	  100% {
	    opacity: 1;
	  }
	}

	@keyframes opas {
	  0% {
	    opacity: 1;
	  }
	  50% {
	    opacity: 0.05;
	  }
	  100% {
	    opacity: 1;
	  }
	}

	@-webkit-keyframes spin {
	  0% {
	    -webkit-transform: rotate(0deg);
	    -ms-transform: rotate(0deg);
	    transform: rotate(0deg);
	  100% {
	    -webkit-transform: rotate(360deg);
	    -ms-transform: rotate(360deg);
	    transform: rotate(360deg);
	}

	@keyframes spin {
	  0% {
	    -webkit-transform: rotate(0deg);
	    -ms-transform: rotate(0deg);
	    transform: rotate(0deg);
	  100% {
	    -webkit-transform: rotate(360deg);
	    -ms-transform: rotate(360deg);
	    transform: rotate(360deg);
	}
	/*END OF PRELOADER*/

</style>

<div id="preloader">
	<div id="status">
		<span class="loading-statut">
			SETTINGS:<br/>
			Setup ambiances volume : <?php echo $aud_ambiances; ?> <br/>
			Setup weapons volume : <?php echo $aud_weapons; ?> <br/>
			Setup birds volume : <?php echo $aud_birds; ?> <br/>
			Loading graphics preset nº : <?php echo $settings; ?> <br/><br/>
			PREFERENCES:<br/>
			Scope : <?php echo $weapon_src; ?> <br/>
			Fire sound : <?php echo $weapon_sound_fire; ?> <br/>
			Reload sound : <?php echo $weapon_sound_reload; ?> <br/>
			Empty sound : <?php echo $weapon_sound_empty; ?> <br/>
			Coins : <?php echo $coins; ?> € <br/>
			Mag capacity : <?php echo $weapon_mag_capacity; ?> <br/>
			Damage : <?php echo $weapon_damage; ?> <br/>
			Handle : <?php echo $weapon_handle; ?> <br/>
			Ammo : <?php echo $weapon_ammo; ?> <br/>
		</span>
		<div id="pulse-loader">
		  <div class="pulse-loader-1"></div>
		  <div class="pulse-loader-2"></div>
		</div>
	</div>
</div>

<script>
$(window).load(function(){
	$("#status").fadeOut();
	$("#preloader").delay(1000).fadeOut("slow");
});
$(document).ready(function(){
	var menu = new Audio();
	menu.src = 'audios/robot.mp3';
	menu.play();
});
</script>