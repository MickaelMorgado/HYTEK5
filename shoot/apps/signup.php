<?php
	include('../head.php');
	$name = $_POST['name'];
	if($name!='' && $_POST['pass']!='' && $_POST['pass2']!=''){
		if($_POST['pass']==$_POST['pass2']){
			$password = $_POST['pass2'];
			$hash = hash('SHA512', $password);
			echo "Name: ".$name."<br>";
			echo "Pass:".$hash."<br>";
			mysqli_query($link, "INSERT INTO players (player_name , pass) VALUES ('$name', '$hash')");
			$result = mysqli_query($link,"SELECT id_session FROM players WHERE BINARY player_name ='$name'");
			if($result){
				$row = $result->fetch_array(MYSQLI_NUM);
				$id = $row[0];
				echo "SELECT id_session FROM players WHERE BINARY player_name ='$name'";
				mysqli_query($link, "INSERT INTO settings (id_session) VALUES ('$id')");
				mysqli_query($link, "INSERT INTO scores (id_session) VALUES ('$id')");
				header("location: ../index.php?signup=created");
			}else{
				header("location: ../index.php?signup=fail");
			};
		}else{
			header("location: ../index.php?signup=wrongpass");
		}
	}else{
		header("location: ../index.php?signup=emptyfields");
	}
?>