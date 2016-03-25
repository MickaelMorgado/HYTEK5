<?php session_start();
	include('../head.php');
	$name = $_POST['name'];
	$pass = $_POST['pass'];
	$hash = hash('SHA512', $pass);
	$result = mysqli_query($link, "SELECT ID_PLAYER FROM PLAYERS WHERE BINARY PLAYER_NAME = '$name' AND BINARY PASS = '$hash'");
	//echo $name."<br>";
	//echo $hash."<br>";
	while($row = mysqli_fetch_assoc($result)){
		$_SESSION['ID_PLAYER'] = $row['ID_PLAYER'];
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