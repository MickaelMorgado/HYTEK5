<head>
	<script src="../dependencies/js/jquery-2.1.3.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.js" type="text/javascript"></script>
</head>
<?php session_start();
$_SESSION["name"] = $_POST["CKName"];
$_SESSION["pass"] = $_POST["CKPass"];
echo "creating session : ".$_POST["CKName"]." - ".$_POST["CKPass"];
?>
<input type="text" id="login-name" value="<?php echo $_POST['CKName']; ?>">
<input type="text" id="login-pass" value="<?php echo $_POST['CKPass']; ?>">
<script>
	ln = $('#login-name').val();
	pass = $('#login-pass').val();
	$.cookie("name", ln, { path: '/' , expires: 10 });
	$.cookie("pass", pass, { path: '/' , expires: 10 });
	$('body').append("cookies set: "+$.cookie("name")+" - "+$.cookie("pass"));
</script>
<?php 
	header("location: ../index.php");
?>