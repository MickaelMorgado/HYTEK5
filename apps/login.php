<head>
<?php 
	$backfolder = 1; 
	require_once '../dbConnection.php';
	include('../dependencies/styles.php');
	include('../dependencies/scripts.php'); 
?>
</head>
<?php

	if ($_COOKIE['username']) {
		$user_email = trim($_COOKIE['username']);
		$user_password = trim($_COOKIE['password']);
	}else{
		$user_email = trim($_POST['user_email']);
		$user_password = trim($_POST['password']);
	}

	$password = hash('SHA512', $user_password);

	$result = mysqli_query($link, "SELECT * FROM users WHERE BINARY name = '$user_email' AND BINARY pass = '$password'");

	echo $user_email." - ".$password;

	while($row = mysqli_fetch_assoc($result)){
		if($row['pass']==$password){ // log in
	        setcookie('username', $user_email, time()+(30 * 24 * 60 * 60), '/'); // this sets cookie for 30 days.
	        setcookie('password', $user_password, time()+(30 * 24 * 60 * 60), '/'); // this sets cookie for 30 days.
	        //echo $_COOKIE['username'];
	        //echo $_COOKIE['password'];
	    	$_SESSION['id_session'] = $row['id_session'];
		}else{
	    	echo "email or password does not exist."; // wrong details 
		}
	}

	if ($debug != true) { header("location: ../"); }

?>