<!DOCTYPE html>
<html manifest="index3.php">
<?php include('dbConnection.php'); ?>
<head>
	<title>Title</title>
    <meta charset="UTF-8">
	<meta name="format-detection" content="telephone=no"/>
	<link href="stylesheets/bootstrap.min.css" rel="stylesheet" />
	<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/jquery.slick/1.3.15/slick.css"/>
	<link rel="stylesheet" type="text/css" href="stylesheets/styles3.css"/>
	<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
	<script type="text/javascript" src="//cdn.jsdelivr.net/jquery.slick/1.3.15/slick.min.js"></script>

	<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	<link href='https://fonts.googleapis.com/css?family=Poiret+One' rel='stylesheet' type='text/css'>
</head>
<body>


<div class="container-fluid padded">
			<form id="searchform" action="" method="GET">
				<div class="GYForm">
					<button onclick="google()" class="btn-search gg"><i class="fa fa-google"></i></button>
					<button onclick="youtube()" class="btn-search yt"><i class="fa fa-youtube-play"></i></button>
					<input id="searchinput" type="text" name="" placeholder="search">
				</div>
			</form>

	<?php if(isset($_SESSION['id_session'])){ ?>
	
	
		<div class="tabs">
			<div id="tabs-results">
				<?php 
					db_fetch($link,'*','mytabs',"id_tabs = '2' ORDER BY data DESC",'apps/tabs.php'); 
				?>
			</div>
		</div>

		<!--h1>most important tabs :</h1>
		<ul class="list-unstyled">
			<?php include('apps/mostimportanttabs.php'); ?>
		</ul-->

		<?php include('apps/youtube.php'); ?>
		<!--?php include('apps/files.php'); ?-->

		<!--?php include('settings.php'); ?-->

	<?php }else{ ?>

		<form action="login.php" method="post" id="login-form" class="login-form">
			<input type="hidden" name="page" value="index.php" /><!-- page redirect after login -->
			<input type="text" placeholder="username" name="username" id="login-username">
			<input type="password" placeholder="password" name="password" id="login-password">
			<input type="submit" class="btn fa fa-sign-in" value="" id="submit-login">
		</form>
		<a href="../login-signup-modal.php" class="aside-buttons button">
		  <i class="fa fa-server"></i>
		  <span>signup</span>
		</a>

	<?php } ?>

</div>


<div class='context-menu'>
	<i class='fa add fa-plus' data-cm-action='add'></i>
	<i class='fa edit fa-pencil' data-cm-action='edit'></i>
	<i class='fa rm fa-times' data-cm-action='rm'></i>
	<i class='fa imp fa-exclamation' data-cm-action='imp'></i>
	<div class='context-menu-input'></div>
</div>


<script src="javascripts/main.js"></script>

</body>
</html> 
