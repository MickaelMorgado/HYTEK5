<?php
	include('../head.php');
	$name = $_POST['name'];
	//$hash = hash('SHA512', $password);
	if($name!='' && $_POST['pass']!='' && $_POST['pass2']!=''){
		if($_POST['pass']==$_POST['pass2']){
			$password = $_POST['pass2'];
			mysqli_query($link, "INSERT INTO users (ID, user, password, score, gamemode, timeplayed) VALUES (NULL, '$name', '$password', NULL, NULL, NULL)");
			header("location: ../index.php");
		}else{
			echo "Passwords nao coincidem <a href='../index.php'>Return</a>";
		}
	}else{
		echo "Campos nao preenchidos <a href='../index.php'>Return</a>";
	}
?>