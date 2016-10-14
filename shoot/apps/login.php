<?php
	include('../head.php');
	$name = $_POST['name'];
	$pass = $_POST['pass'];
	$hash = hash('SHA512', $pass);
	$result = mysqli_query($link, "SELECT id_session FROM players WHERE BINARY player_name  = '$name' AND BINARY pass  = '$hash'");
	//echo $name."<br>";
	//echo $hash."<br>";
	if ($result) {
		while($row = mysqli_fetch_assoc($result)){
			$_SESSION['id_session'] = $row['id_session'];
			header('location: ../index.php?login=done');
		}
	}else{
		//echo "something goes wrong ! username:".$row['id_session'];
		header('location: ../index.php?login=fail');
	}
	if($_SESSION['id_session'] == ''){
		header('location: ../index.php?login=nouserfound');
	}
	if($name == '' || $pass == ''){
		header('location: ../index.php?login=checkfields');
	}
?>