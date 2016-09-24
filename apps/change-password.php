<?php 
	
	require_once '../dbConnection.php';

	$old_password		 = $_POST['old-password'];
	$new_password		 = $_POST['new-password'];
	$confirm_password	 = $_POST['confirm-password'];

	//echo $_SESSION['id_session']."\n".$old_password."\n".$new_password."\n".$confirm_password;

	if ($new_password != $confirm_password) {
		echo "password arent the same try again";
	}else{
		echo "password reset done go ";
		?><a href="../">back</a><?php
		$sql = "UPDATE `users` SET `pass` = '".hash('SHA512', $new_password)."' WHERE `id_session` = ".$_SESSION['id_session']." AND `pass` = '".hash('SHA512', $old_password)."' ";
		//echo $sql;
		mysqli_query($link,$sql);
	}

?>