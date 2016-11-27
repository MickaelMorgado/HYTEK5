<head>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.js" type="text/javascript"></script>
</head>
<?php 
	session_start();
	session_destroy();
	setcookie("username", "", time() - 3600, '/');
	setcookie("password", "", time() - 3600, '/');
	header("location: ../index.php"); 
?>