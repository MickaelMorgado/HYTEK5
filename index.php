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
	<script src="jquery.uploadify.min.js" type="text/javascript"></script>
	<link rel="stylesheet" type="text/css" href="uploadify.css">

	<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	<link href='https://fonts.googleapis.com/css?family=Poiret+One' rel='stylesheet' type='text/css'>
</head>
<body>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.js" type="text/javascript"></script>
<script>

    function nop(){

        if ($.cookie('ck') != "active") {
            console.log("nop");
        }else{
        	yes()
        }

    }
    
    function yes(){

        var date = new Date();  // Current date

        // Minutes * 60 * 1000
        date.setTime(date.getTime() + (1440 * 60 * 1000)); 

        $.cookie('ck', 'active', { expires: date, path: '/' });
        console.log("yes");
    };

</script>

<div class="container-fluid padded">
	<form id="searchform" action="" method="GET">
		<div class="GYForm">
			<input id="searchinput" type="text" name="" placeholder=" search"><div class="toggles-search-buttons">
				<button onclick="google()" class="btn-search gg"><i class="fa fa-google"></i></button>
				<button onclick="youtube()" class="btn-search yt"><i class="fa fa-youtube-play"></i></button>
			</div>
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

		<div class="player-controls">
			<span id="player-previous" title="previous"><i class="fa fa-fast-backward"></i></span>
			<span id="player-pause" title="pause (s)"><i class="fa fa-pause"></i></span>
			<span id="player-play" title="play (p)"><i class="fa fa-play"></i></span>
			<span id="player-next" title="next"><i class="fa fa-fast-forward"></i></span>
			<span id="player-playAt" title="go to first"><i class="fa fa-reply"></i></span>
			<span class="play-pause"></span>
			<span class="yt-time"></span>
		</div>

		<!--h1>most important tabs :</h1>
		<ul class="list-unstyled">
			<?php include('apps/mostimportanttabs.php'); ?>
		</ul-->

		<!--?php include('apps/files.php'); ?-->

		<!--?php include('settings.php'); ?-->

		<div class="sidebar">
			
			<?php include('apps/youtube.php'); ?>

			<h1>files</h1>
			<form>
				<div id="queue"></div>
				<input id="file_upload" name="file_upload" type="file" multiple="true">
			</form>
			<script type="text/javascript">
				<?php $timestamp = time();?>
				$(function() {
					$('#file_upload').uploadify({
						'formData'     : {
							'timestamp' : '<?php echo $timestamp;?>',
							'token'     : '<?php echo md5('unique_salt' . $timestamp);?>'
						},
						'swf'      : 'uploadify.swf',
						'uploader' : 'uploadify.php'
					});
				});
			</script>

		</div>
		<script>
			yes()
		</script>
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
		<script>
			nop()
		</script>
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
