<!DOCTYPE html>
<html>
<head>
	<title>ElementarY</title>
    <meta charset="UTF-8">
	<meta name="format-detection" content="telephone=no"/>
	<link href="dependencies/css/bootstrap.min.css" rel="stylesheet" />
	<link rel="stylesheet" type="text/css" href="elementary/stylesheets/styles.css"/>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	<script src="dependencies/js/jquery-2.1.3.min.js"></script>
	<script src="dependencies/js/bootstrap.min.js"></script>
	<script src="dependencies/js/list.min.js"></script>
	<script src="dependencies/js/moment.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.js" type="text/javascript"></script>
</head>
<body>

	<?php include('dbConnection.php') ?>
	<!--?php include('dependencies/phpfunctions.php') ?-->


	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-6 col-md-3">
				<div class="element"><?php echo $_SESSION["name"]; ?>
																			<?php include('apps/link-list.php'); ?>
					<div class="glass"></div>
				</div>
			</div>		
			<div class="col-xs-12 col-sm-6 col-md-3">
				<div class="element">
																			<?php include('apps/youtubeminiplayer.php'); ?>
					<div class="glass"></div>
				</div>
			</div>
			<div class="col-xs-12 col-sm-6 col-md-3">
				<div class="element">
																			<?php include('apps/clock.php'); ?>
					<div class="glass"></div>
				</div>
				<div class="element">
																			<?php include('apps/socio.php'); ?>
					<div class="glass"></div>
				</div>
			</div>
			<div class="col-xs-12 col-sm-3 col-md-3">
				<div class="element">
																			<?php include('apps/cookie-login.php'); ?>
					<div class="glass"></div>
				</div>	
			</div>			
			<div class="col-xs-12 col-sm-3 col-md-3">
				<div class="element">
																			<?php include('apps/shooters.php'); ?>
					<div class="glass"></div>
				</div>	
			</div>		
			<!-- 
			<div class="col-xs-12 col-sm-6 col-md-6">
				<div class="element">
																			<!--?php include('apps/contact-form.php'); ?>
					<div class="glass"></div>
				</div>	
			</div>
			-->
		</div>
	</div>
	



</body>
</html> 