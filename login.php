<?php
session_set_cookie_params(604800,"/");
include('../dbConnection.php');
$name = $_POST['username'];
$pass = hash('SHA512', $_POST["password"]);
//echo "$pass";
$result = mysqli_query($link, "SELECT * FROM users WHERE BINARY name = '$name' AND BINARY pass = '$pass'");
while($row = mysqli_fetch_assoc($result)){
	$_SESSION['id_session'] = $row['id_session'];
}
if(isset($_SESSION['id_session'])){
	//echo "user found";
	if ($_POST["page"]=="index2") {
		header("location: index2.php");
	}else{
		header("location: index.php");
	}
}else{
	//echo "no user found";
	header("location: index.php");
}
?>

