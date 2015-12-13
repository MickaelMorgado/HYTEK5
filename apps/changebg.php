<?php 
	@include('../dbConnection.php');
	$bgurl = $_POST['bgurl'];
	$result = mysqli_query($link, "UPDATE settings SET `bg` = '$bgurl' WHERE id_settings = $_SESSION[id_session]");
?>