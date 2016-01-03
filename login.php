<?php
session_set_cookie_params(604800,"/");
include('dbConnection.php');

$auto_redirect = 1;

$name = $_POST['username'];
$pass = hash('SHA512', $_POST["password"]);
//echo "$pass";
$result = mysqli_query($link, "SELECT * FROM users WHERE BINARY name = '$name' AND BINARY pass = '$pass'");

while($row = mysqli_fetch_assoc($result)){
	$_SESSION['id_session'] = $row['id_session'];
}

if(isset($_SESSION['id_session'])){
	//echo "user found";
	if ($_POST["page"]!="") {
		if ($auto_redirect==1) {
			header("location: ".$_POST["page"]."?loginstate=1");
		}
	}else{
		if ($auto_redirect==1) {
			header("location: ../");
		}
	}
}else{
	//echo "no user found";
	if ($auto_redirect==1) {
		header("location: ../?loginstate=0");
	}
}
?>

