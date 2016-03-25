<?php
	include('../head.php');
	$name = $_POST['name'];
	if($name!='' && $_POST['pass']!='' && $_POST['pass2']!=''){
		if($_POST['pass']==$_POST['pass2']){
			$password = $_POST['pass2'];
			$hash = hash('SHA512', $password);
			echo "Name: ".$name."<br>";
			echo "Pass:".$hash."<br>";
			mysqli_query($link, "INSERT INTO players (PLAYER_NAME, PASS, TIME_PLAYED, COINS) VALUES ('$name', '$hash', 0, 0)");
			$result = mysqli_query($link,"SELECT ID_PLAYER FROM PLAYERS WHERE BINARY PLAYER_NAME='$name'");
			if($result){
				$row = $result->fetch_array(MYSQLI_NUM);
				$id = $row[0];
			};
			echo "SELECT ID_PLAYER FROM PLAYERS WHERE BINARY PLAYER_NAME='$name'";
			mysqli_query($link, "INSERT INTO settings (ID_PLAYER) VALUES ('$id')");
			mysqli_query($link, "INSERT INTO scores (ID_PLAYER) VALUES ('$id')");
			//mysqli_query($link, "INSERT INTO shooters (ID, id_session, score, gamemode, timeplayed) VALUES (NULL , '$id', 0, NULL, NULL)");

			//header("location: ../index.php");
		}else{
			echo "Passwords nao coincidem <a href='../index.php'>Return</a>";
		}
	}else{
		echo "Campos nao preenchidos <a href='../index.php'>Return</a>";
	}
?>