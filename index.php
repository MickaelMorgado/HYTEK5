<!DOCTYPE html>
<?php 
	$error_reporting = 0;
	include('dbConnection.php');
?>
<html>
<head>
	<title>ElementarY</title>
	<meta name="theme-color" content="#224455">
	<link rel="icon" href="hyteklogo.jpg" type="image/jpg">
    <meta charset="UTF-8">
	<meta name="format-detection" content="telephone=no"/>
	<meta name="viewport" content="width=device-width" />

	<?php include('dependencies/styles.php') ?>
	<?php include('dependencies/scripts.php') ?>

	<style></style>
</head>
<body>

	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<div class="dock text-center">
					<div class="container-fluid">
						<div class="row">
							<div class="col-xs-12">
								<div id="tabs">
								<form id="searchform" action="" method="GET">
									<div class="row">
										<div class="col-xs-9">
										<div id="tabs">
											
											<input type="text" placeholder="Search" class="search" id="searchinput" autocomplete="off">
										</div>
										</div>
										<div class="col-xs-1">
											<div class="toggles-search-buttons">
												<!--button onclick="google()" class="btn-search gg"><i class="fa fa-google"></i></button><button onclick="youtube()" class="btn-search yt"><i class="fa fa-youtube-play"></i></button-->
												<button href="#" onclick="google()"><img class="dock-icon" src="dependencies/img/1.png" alt=""></button><button href="#" onclick="youtube()"><img class="dock-icon" src="dependencies/img/3.png" alt=""></button>
											</div>
										</div>
										<div class="col-xs-2">
											<ul class="list-inline">
												<!--<li><a href="http://gmail.com/"><img class="dock-icon" src="dependencies/img/1.png" alt=""></a></li-->
												<li><a href="http://facebook.com"><img class="dock-icon" src="dependencies/img/2.png" alt=""></a></li>
												<!--<li><a href="http://youtube.com"><img class="dock-icon" src="dependencies/img/3.png" alt=""></a></li-->
												<li><a href="http://play.spotify.com/collection/songs"><img class="dock-icon" src="dependencies/img/4.png" alt=""></a></li>
												<li><a href="http://twitter.com"><img class="dock-icon" src="dependencies/img/5.png" alt=""></a></li>
												<li class="dock-aspect"><div class="glass"></div></li>
											</ul>
										</div>
									</div>
								</form>
								<ul class="list-unstyled scrollable list" id="enableRefresh">
									<?php include('apps/link-list.php'); ?>
								</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container-fluid">
		<div class="row masonry-container">
			<div class="col-xs-12 col-sm-6 col-md-2 item">
				<div class="element">
																			<?php include('apps/clock.php'); ?>
					<div class="glass"></div>
				</div>
				<div class="element">
																			<?php include('apps/notes.php'); ?>
					<div class="glass"></div>
				</div>	
			</div>		
			<div class="col-xs-12 col-sm-6 col-md-2 item">
				<div class="element">
					<div class="container-full">
						<div class="row">
							<div class="col-xs-6 col-sm-6 col-md-6">
								<select name="order" id="link-order-select">
									<option value="" selected hidden>--</option>
									<option value="`title`ASC">title ASC</option>
									<option value="`title`DESC">title DESC</option>
									<option value="`data`ASC">Date ASC</option>
									<option value="`data`DESC">Date DESC</option>
									<option value="`url`ASC">Url ASC</option>
									<option value="`url`DESC">Url DESC</option>
									<option value="`view`ASC">View ASC</option>
									<option value="`view`DESC">View DESC</option>
								</select>
							</div>
							<div class="col-xs-6">
								<div class="dropdown pull-right">
									<button href="#" type="button" id="dropdownMenuAdd" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" class="btn-search">+<span class="caret"></span></button>
									<ul class="dropdown-menu" aria-labelledby="dropdownMenuAdd">
										<form action="apps/links/add-link.php" method="post">
											<li>
												<input type="text" name="link-add-title" placeholder="title (opcional)">
												<input type="text" name="link-add-url" 	 placeholder="url">
											</li>
											<input type="submit" value="add">
										</form>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<div class="glass"></div>
				</div>
			</div>		
			<div class="col-xs-12 col-sm-6 col-md-2 item">
				<div class="element">
																			<?php include('apps/files.php'); ?>
					<div class="glass"></div>
				</div>
			</div>
			<div class="col-xs-12 col-sm-6 col-md-4 item">
				<div class="element"  style="height:300px;">
																			<?php include('apps/youtubeminiplayer.php'); ?>
					<div class="glass"></div>
				</div>
			</div>
			<div class="col-xs-12 col-sm-6 col-md-2 item">
				<div class="element">
																			<?php include('apps/cookie-login.php'); ?>
					<div class="glass"></div>
				</div>	
			</div>		
			<div class="col-xs-12 col-sm-6 col-md-2 item">
				<div class="element" style="height:150px;">
																			<?php include('apps/meteo.php'); ?>
					<div class="glass"></div>
				</div>	
			</div>		
			<div class="col-xs-12 col-sm-6 col-md-2 item">
				<div class="element">
																			<?php include('apps/shooters.php'); ?>
					<div class="glass"></div>
				</div>	
			</div>		
			<div class="col-xs-12 col-sm-6 col-md-2 item">
				<div class="element">
																			<?php include('apps/settings.php'); ?>
					<div class="glass"></div>
				</div>	
			</div>		
		</div>
	</div>

	
	<!--script src="http://listjs.com/no-cdn/list.js"></script-->
	<script src="dependencies/js/jscolor.js"></script>
	<script><?php include('dependencies/js/main.js'); ?></script>
	<script>

	
		<?php if (!isset($_SESSION['name'])) : ?>

			$loginInput = $('#user_email');
			$loginInput.focus();
		
		<?php endif ?>
	</script>
</body>
</html> 