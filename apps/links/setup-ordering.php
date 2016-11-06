<?php 
	include('../../dbConnection.php');
	$sql = "UPDATE `settings` SET `tabs_order` = '".$_POST['order']."' WHERE `id_settings` = ".$_SESSION['id_session'];				
	mysqli_query($link,$sql);
	echo "UPDATED";
?>