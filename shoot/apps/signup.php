<?php
	include('../head.php');
	$name = $_POST['name'];
	if($name!='' && $_POST['pass']!='' && $_POST['pass2']!=''){
		if($_POST['pass']==$_POST['pass2']){
			$password = $_POST['pass2'];
			$hash = hash('SHA512', $password);
			//echo "Name: ".$name."<br>";
			//echo "Pass:".$hash;
			mysqli_query($link, "INSERT INTO users (id_session, name, pass, mail) VALUES (NULL, '$name', '$hash', NULL)");
			$result = mysqli_query($link,"SELECT id_session FROM users WHERE BINARY name='$name'");
			if($result){
				$row = $result->fetch_array(MYSQLI_NUM);
				$id = $row[0];
			};
			//echo "SELECT id_session FROM users WHERE BINARY name='$name'";
			mysqli_query($link, "INSERT INTO shooters (ID, id_session, score, gamemode, timeplayed) VALUES (NULL , '$id', 0, NULL, NULL)");

			header("location: ../index.php");
		}else{
			echo "Passwords nao coincidem <a href='../index.php'>Return</a>";
		}
	}else{
		echo "Campos nao preenchidos <a href='../index.php'>Return</a>";
	}
?>