<?php session_start();
	include('../head.php');
	$name = $_POST['name'];
	$pass = $_POST['pass'];
	$hash = hash('SHA512', $pass);
	$result = mysqli_query($link, "SELECT id_session FROM users WHERE BINARY name = '$name' AND BINARY pass = '$hash'");
	//echo $name."<br>";
	//echo $hash."<br>";
	while($row = mysqli_fetch_assoc($result)){
		$_SESSION['id_sess'] = $row['id_session'];
		header('location: ../index.php');
	}
	echo "something goes wrong ! username:".$row['id_session'];
	if($_SESSION['id_sess'] == ''){
		echo "No user founds <a href='../index.php'>Return</a>";
	}
	if($name == '' || $pass == ''){
		echo "preenche os campos <a href='../index.php'>Return</a>";
	}
?>