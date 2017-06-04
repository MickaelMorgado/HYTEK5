<!DOCTYPE html>
<?php 
	$error_reporting = 0;
	include('dbConnection.php');
?>
<html>
<head>
	<title>HYTEK5 - Start Page</title>
	<meta name="theme-color" content="#111"><!--meta name="theme-color" content="#224455"-->
	<link rel="icon" href="hyteklogo.jpg" type="image/jpg">
    <meta charset="UTF-8">
	<meta name="format-detection" content="telephone=no"/>
	<meta name="viewport" content="width=device-width" />
	<?php include('dependencies/styles.php') ?>
	<?php include('dependencies/scripts.php') ?>
</head>
<body>
<?php 
if(!isset($_SESSION['id_session'])){
	// if not logged in try with cookies
	if (isset($_COOKIE['username'])) {
		echo "try w/:".$_COOKIE['username'].$_COOKIE['password'];
		header("location: apps/login.php?username=$_COOKIE[username]&password=$_COOKIE[password]");
	}else{
		echo "no try";
	}
}
?>
	<div class="preloader"></div>
	<div class="dock text-center">
		<div class="container-fluid">
			<div class="row">
				<?php include("apps/navbar.php"); ?>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row masonry-container">
			<div class="col-xs-12 col-sm-6 col-md-2 item">
				<div class="element"><?php include('apps/clock.php'); ?><div class="glass"></div></div>
				<div class="element"><?php include('apps/notes.php'); ?><div class="glass"></div></div>	
			</div>		
			<div class="col-xs-12 col-sm-6 col-md-2 item">
				<div class="element"><?php include('apps/ordering.php') ?><div class="glass"></div></div>
				<div class="element"><?php include('apps/settings.php'); ?><div class="glass"></div></div>
			</div>		
			<div class="col-xs-12 col-sm-6 col-md-2 item">
				<div class="element"><?php include('apps/files.php'); ?><div class="glass"></div></div>
				<div class="element"><?php include('apps/shooters.php'); ?><div class="glass"></div></div>	
			</div>
			<div class="col-xs-12 col-sm-6 col-md-4 item">
				<div class="element ytb"><?php include('apps/youtubeminiplayer.php'); ?></div>
			</div>
			<div class="col-xs-12 col-sm-6 col-md-2 item">
				<div class="element" 
					data-intro='Hello new visitor, Sign Up to HYTEK5 (WIP start page) and get your new environment for better & faster browsing experience!'
					data-step="1"><!--div class="element"--><?php include('apps/cookie-login.php'); ?><div class="glass"></div>
				</div>	
				<div class="element"><?php include('apps/todolist.php'); ?><div class="glass"></div></div>	
			</div><!--div class="col-xs-12 col-sm-6 col-md-2 item"><div class="element" style="height:150px;"><!--?php include('apps/meteo.php'); ?><div class="glass"></div></div></div-->		
		</div>
	</div>
	<!-- SIGNUP MODAL -->
		<div class="modal fade signup-modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-lg">
				<div class="modal-content">
					<div class="modal-header"><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>
					<div class="modal-body"><?php include("apps/signup.php"); ?></div>
					<div class="modal-footer"></div>
				</div>
			</div>
		</div>
	<!-- RESET PASSWORD -->
		<div class="modal fade reset-password-modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-lg">
				<div class="modal-content">
					<div class="modal-header">        
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<form 
							action="apps/send-email-reset-password.php"
							method="post">
							<label for="reset-password-email">Email:</label>
							<input 
								type="email" 
								id="reset-password-email" 
								name="reset-password-email"
								placeholder="email">
							<input 
								type="submit" 
								value="reset password">
						</form>
					</div>
					<div class="modal-footer"></div>
				</div>
			</div>
		</div>
		<!--?php phpdebugger() ?-->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jscolor/2.0.4/jscolor.min.js"></script>
	<script><?php include('dependencies/js/main.js'); ?></script>
	<script>
		<?php if (!isset($_SESSION['name'])) : ?>
			$loginInput = $('#user_email');
			$loginInput.focus();
		<?php endif ?>
		<?php include('dependencies/introjs.js') ?>
		<?php include('dependencies/keylogic.js') ?>
	</script>
	<style id="global"></style>
	<style id="hoverColor"></style>
	<style id="MateEffect"></style>
	<style id="elementsOpacity"></style>
	<style id="elementsGlassOpacity"></style>
</body>
</html>