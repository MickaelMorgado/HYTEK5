<?php 
	include('../../dbConnection.php');
	$linkAddTitle 	= $_POST['link-add-title'];
	$linkAddUrl 	= $_POST['link-add-url'];
    $date 			= date('Y-m-d H:i:s');
echo $linkAddTitle.$linkAddUrl;
echo $date;
	$sql = "INSERT INTO mytabs (id_tabs,title,url,data) VALUES (2,'$linkAddTitle','$linkAddUrl','$date')";
	mysqli_query($link, $sql);
	header("location: ../../");
?>
