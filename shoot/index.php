<!doctype html>
<?php 
	$error_reporting = 0;
	include('../dbConnection.php');
	include('../shoot/apps/shooters-userdata.php');
?>
<html class="no-js" lang="en">
<?php 
	include('head.php');  
?>
<body class="homemenu">
	<?php include('preloader.html'); ?>
	<div class="smoke"></div>
<!--div class="block friends">
	<h1>
		<input type="text" placeholder="Search" class="search_friends">
	</h1>
</div-->
<div class="container">
	

<head>
	<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/jquery.slick/1.3.15/slick.css"/>
	<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
	<script type="text/javascript" src="//cdn.jsdelivr.net/jquery.slick/1.3.15/slick.min.js"></script>
</head>

<style>
	.slick-prev {
    	left: -10%;
	}
	.slick-next {
    	right: -10%;
	}
	.slick-dots li button::before {
		color: white;
	}
	.slick-dots li.slick-active button::before {
		color: red;
	}
	.slick-prev, .slick-next{
		height: 100%;
		top: 0;
		width: 120px;
	}
</style>

<a href="../" class="notify back-button">< Back</a>
	<div class="row first">
<div class="single-item">
	<div>
		<div class="col-md-3">
			
			<!-- GAMES -->
				<div class="block games">
					<h1>Games</h1>
					<img src="img/thumbnail1.png" alt="">
					<a href="games/game.php" id="oom" class="link">only one minute</a></li>
					<a href="#" class="link">waves</a></li>
				</div>

		</div>
		<div class="col-md-3">

			<!-- LEADERBOARD -->
				<div class="block leaderboard">
					<?php include('apps/your_score.php') ?>
					<h1>Leaderboard</h1>
					<img src="img/trophy.jpg" alt="">
					<div class="leaderboardlist scrollable">
						<?php 
							include('apps/leaderboard_list.php');
						?>
					</div>
				</div>

		</div>
		<div class="col-md-3">

			<!-- OPTION -->
				<div class="block options">
					<h1>Options</h1>
					<img src="img/gtx.jpg">
					<div class="scrollable">

						<?php 
							if (isset($_SESSION['id_session'])) { 
								?>
								<a href="../apps/logout.php" type="button">Logout</a>
								<a type='button' data-toggle='modal' data-target='.boby'>Settings</a>
								<?php
							}else{
								?>
								<!--a type="button" data-toggle="modal" data-target=".loginmodal">Login / Sign up</a-->
								<a href="../">Login / Sign up</a>
								<a href="../">Settings (need login)</a>
								<?php
							}
						?>
						<a href="#" id="HS"><?php echo "settings: ".$settings."<br/>aud_musics: ".$aud_musics."<br/>aud_ambiances: ".$aud_ambiances."<br/>aud_weapons: ".$aud_weapons."<br/>aud_birds: ".$aud_birds."<br/>score: ".$score."<br/>weapon_mag_capacity: ".$weapon_mag_capacity."<br/>weapon_damage: ".$weapon_damage."<br/>weapon_handle: ".$weapon_handle."<br/>weapon_ammo: ".$weapon_ammo."<br/>weapon_src: ".$weapon_src."<br/>weapon_sound_fire: ".$weapon_sound_fire."<br/>weapon_sound_reload: ".$weapon_sound_reload; ?></a>
						


					</div>
				</div>

		</div>
		<div class="col-md-3">

			<!-- WEAPONS -->
				<div class="block armory">
					<?php include("armory.php") ?>
				</div>

		</div>		
	</div>
	<div>
		<div class="col-md-3">

			<!-- NEWS -->
				<div class="block news">
					<h1>News</h1>
					<img src="img/news.jpg" alt="">
					<div class="scrollable">
						<p>Next <b>Updates</b>:</p>
						<ul class="list">
							<li>Beat leaderboard score by clicking on user.</li>
						</ul>
					</div>
				</div>

		</div>
		<div class="col-md-3">
			
			<!-- HELPS -->
				<div class="block hs">
					<h1>Help/Support</h1>
					<img src="img/flag.png" alt="">
					<div class="scrollable">
						<p>If you encontred any problem in game see the list below:</p>
						<ul class="list">
							<li>Close unecessary tabs;</li>
							<li>Videos players like (youtube, vimeo, etc.) can affect game performances close them or use different browser;</li>
							<li>You can change graphics presets in <b data-toggle="modal" data-target=".boby">options -> settings -> presets</b></li>
						</ul>
					</div>
				</div>

		</div>
	</div>
</div>

	</div><!--ROW-->

<div class="tracklist-player">
	Currently playing: <br/>
	<span class="tracklist-player__text"></span>
</div>

<script type="text/javascript">
	$(document).ready(function(){
	  $('.single-item').slick({
	      dots: true,
	  });
	});
</script>


		

		

	
	
	<div class="modal fade loginmodal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-md">
			<div class="modal-content">


			<!--TABS-->
			   	<ul class="nav nav-tabs" role="tablist">
					<li class="active">
						<a href="#home" role="tab" data-toggle="tab">Login</a>
					</li>
					<li>
						<a href="#profile" role="tab" data-toggle="tab">Sign up</a>
					</li>
			   	</ul>
			   
			   <!-- Tab panes -->
			   <div class="tabs-content">
					<div class="tab-pane fade active in" id="home">
						<form action="apps/login.php" method="POST">
							<div class="container-fluid">
								<div class="row">
									<div class="col-xs-12 col-sm-6 col-md-6">
										<input type="text" name="name" placeholder="Username" />
									</div>
									<div class="col-xs-12 col-sm-6 col-md-6">
										<input type="password" name="pass" placeholder="password" />
									</div>
								</div>
							</div>
							<div class="container-fluid">
								<div class="row">
									<div class="col-xs-12 col-sm-12 col-md-12">
										<input type="submit" value="ok">
									</div>
								</div>
							</div>
						</form>
					</div>
					<div class="tab-pane fade" id="profile">
						<form action="apps/signup.php" method="POST">
							<div class="container-fluid">
								<div class="row">
									<div class="col-xs-12 col-sm-4 col-md-4">
							<input type="text" name="name" placeholder="Username" />
									</div>
									<div class="col-xs-12 col-sm-4 col-md-4">
							<input type="password" name="pass" placeholder="password" />
									</div>
									<div class="col-xs-12 col-sm-4 col-md-4">
							<input type="password" name="pass2" placeholder="confirm password" />
									</div>
								</div>
							</div>
							<div class="container-fluid">
								<div class="row">
									<div class="col-xs-12 col-sm-12 col-md-12">
										<input type="submit" value="ok">
									</div>
								</div>
							</div>
						</form>
					</div>
			   </div>
			   

			</div>
		</div>
	</div>

	<div class="modal fade armorypopup" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<?php if(isset($_SESSION['id_session']) != ''): ?> 
					<div class="row">
						<div class="col-xs-12">
							<div class="row">
								<?php include('apps/armory.php'); ?>
							</div>
						</div>
					</div>
				<?php else: ?>
					<a href='../'>Shop (need login)</a>
				<?php endif ?>
			</div>
		</div>
	</div>
	
	<div class="modal fade boby" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
					<div class="settings">
						<div class="block settings">
							<?php include("apps/settings.php"); ?>
						</div>
					</div>
				</div><!--ROW-->
			</div>
		</div>
	</div>
	

	<?php include('scripts/scripts.php'); ?>

</div>
  </body>

</html>
