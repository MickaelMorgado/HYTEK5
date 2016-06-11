<head>
<?php 
	$backfolder = 1; 
	require_once '../dbConnection.php';
	include('../dependencies/styles.php');
	include('../dependencies/scripts.php'); 
?>
</head>
<?php
	$keep_session =  $_POST['keepSession'];
	$user_email = trim($_POST['user_email']);
	$user_password = trim($_POST['password']);

	$password = hash('SHA512', $user_password);

	$result = mysqli_query($link, "SELECT * FROM users WHERE BINARY name = '$user_email' AND BINARY pass = '$password'");

	echo $user_email." - ".$password;

	while($row = mysqli_fetch_assoc($result)){
		if($row['pass']==$password){
	    	echo "ok"; // log in
	    	$_SESSION['id_session'] = $row['id_session'];
		}else{
	    	echo "email or password does not exist."; // wrong details 
		}
	}
?>
<input type="hidden" value="<?php echo $user_email; ?>" id="hidden_name">
<input type="hidden" value="<?php echo $user_password; ?>" id="hidden_pass">
<a href="../" class="button">back</a>

<?php 

	if ($keep_session == true) {
		echo "on";
		?>
			<script>$.cookie("name", $('#hidden_name').val(), {expires:10,path:'/'}); alert("name: "+$.cookie("name"));</script>
			<script>$.cookie("pass", $('#hidden_pass').val(), {expires:10,path:'/'}); alert("pass: "+$.cookie("pass"));</script>
		<?php
	}else{
		echo "off";
	}

	if ($debug != true) { header("location: ../"); }

?>