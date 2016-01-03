<!DOCTYPE html>
<html manifest="index.php">
<?php include("head.php"); ?>
<head>
	<title>HYTEK4</title>
    <meta charset="UTF-8">
	<meta name="format-detection" content="telephone=no"/>
	<link rel="icon" href="hyteklogo.jpg" type="image/jpg">
	<link rel="stylesheet" href="stylesheets/font-awesome.min.css">
	<script type="text/javascript" src="javascripts/jquery-2.1.3.min.js"></script>
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
	<link href="stylesheets/bootstrap.min.css" rel="stylesheet" />
	<link rel="stylesheet" type="text/css" href="stylesheets/slick.css"/>
	<link rel="stylesheet" type="text/css" href="stylesheets/styles2.css"/>
	<script type="text/javascript" src="javascripts/slick.min.js"></script>
</head>

<!--?php include('apps/custom-head.php'); ?-->

<body>
  
<div class="container full-height">
	<div class="row full-height">
		<div class="col-xs-12 col-sm-12 col-md-12 full-height">
			<div class="Hcontainer">

				<div class="menu">
					<div class="col-xs-12 col-sm-4 col-md-4 col-sm-offset-4">
						<form id="searchform" action="" method="GET">
							<div class="col-xs-12 text-center GYForm">
								<button onclick="youtube()" class="btn-search yt"><i class="fa fa-youtube-play"></i></button>
								<input id="searchinput" type="text" name="" placeholder="search">
								<button onclick="google()" class="btn-search gg"><i class="fa fa-google"></i></button>
							</div>
						</form>
					</div>
					<div class="col-xs-12 col-sm-4 col-md-4">
						<div class="player-controls">
							<span id="player-previous" title="previous"><i class="fa fa-fast-backward"></i></span>
							<span id="player-pause" title="pause (s)"><i class="fa fa-pause"></i></span>
							<span id="player-play" title="play (p)"><i class="fa fa-play"></i></span>
							<span id="player-next" title="next"><i class="fa fa-fast-forward"></i></span>
							<span id="player-playAt" title="go to first"><i class="fa fa-reply"></i></span>
							<span class="play-pause"></span>
							<span class="yt-time"></span>
						</div>
					</div>
				</div>

	<?php if(isset($_SESSION['id_session'])){ ?>

				<div class="row top-menu-offset">
					<div class="col-xs-12">
						<div class="col-xs-12 col-sm-8 col-md-8">
							<div class="tabs">
								<div id="tabs-results">
									<?php include('apps/tabs.php'); ?>
								</div>
							</div>
						</div>
						<div class="col-xs-12 col-sm-4 col-md-4">
							<h4>most important tabs :</h4>
							<ul class="list-unstyled">
								<?php include('apps/mostimportanttabs.php'); ?>
							</ul>
						</div>
					</div>
				</div>


	<?php }else{ ?>
		
				<div class="col-xs-12 top-menu-offset text-center">
					<form action="login.php" method="post" id="login-form" class="login-form">
						<input type="hidden" name="page" value="index2" />
						<input type="text" placeholder="username" name="username" id="login-username">
						<input type="password" placeholder="password" name="password" id="login-password">
						<input type="submit" class="btn fa fa-sign-in" value="" id="submit-login">
					</form>
					<a href="../login-signup-modal.php" class="aside-buttons button">
					  <i class="fa fa-server"></i>
					  <span>signup</span>
					</a>
				</div>

	<?php } ?>






		<div class="row top-menu-offset">
			<div class="col-xs-12">
				<div class="col-xs-12 col-sm-12 col-md-12">
					<h3>stuffs:</h3>
				</div>
				
				<?php include('apps/youtube.php'); ?>
				
				<div class="col-xs-12 col-sm-4 col-md-4">
					<?php include('apps/files.php'); ?>
				</div>
			</div>
		</div>





	
		  	<div class="top-menu-offset">
		  		<div class="col-xs-12 columns">

					<?php if(isset($_SESSION['id_session'])){ ?>
						
						<div class="row">
							<div class="col-xs-12 col-sm-12 col-md-12">
								<h3>settings:</h3>
							</div>
						</div>

						<?php include('settings.php'); ?>


					<?php } ?>

		  		</div>
		    </div>
</div>

<div class='context-menu'>
	<i class='fa add fa-plus' data-cm-action='add'></i>
	<i class='fa edit fa-pencil' data-cm-action='edit'></i>
	<i class='fa rm fa-times' data-cm-action='rm'></i>
	<i class='fa imp fa-exclamation' data-cm-action='imp'></i>
	<div class='context-menu-input'></div>
</div>


			</div>
		</div>
	</div>
</div>

<script src="javascripts/main.js"></script>
</body>
</html>
