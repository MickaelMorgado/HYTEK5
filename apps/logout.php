<head>
	<script src="../dependencies/js/jquery-2.1.3.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.js" type="text/javascript"></script>
</head>
<script>
	console.log($.cookie("name")+" - "+$.cookie("pass"));
	$.removeCookie('name',{path: '/'});
	$.removeCookie('pass',{path: '/'});
	console.log($.cookie("name")+" - "+$.cookie("pass"));
</script>
<?php 
	session_start();
	session_destroy();
?>
<?php 
header("location: ../index.php"); 
?>