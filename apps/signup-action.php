<head>
<?php 
	require_once '../dbConnection.php';
?>
</head>
<div class="well">
<?php 

	$email = $_POST['mail'];
	$pass1 = $_POST['pass1'];
	$pass2 = $_POST['pass2'];

	$sucess = true;

	$sql = "SELECT * FROM users";
	$result = mysqli_query($link,$sql);

	while ($row = mysqli_fetch_assoc($result)) {
		if ($email == $row['name']) {
			echo "Email already exist ! please choose an other one !";
			$sucess = false;
			break;
		}
	} 	

	if ($sucess != false) {
		if ($pass1 != $pass2) {
			echo "passwords are not the same !";
		}else{
			echo "Account successfuly created !";

			/* encrypt pass */
			$hash = hash('SHA512', $pass2);
			$sql = "INSERT INTO users (`name`, `pass`, `mail`) VALUES ('$email', '$hash', '$email')";
			mysqli_query($link,$sql);

			$sql = "SELECT * FROM users WHERE `name` LIKE '$email'";
			$result = mysqli_query($link,$sql);

			while ($row = mysqli_fetch_assoc($result)) {
				$getid = $row['id_session'];
			} 	

			mysqli_query($link,"INSERT INTO `mytabs` (`id_tabs`) VALUES ('$getid')");
			mysqli_query($link,"INSERT INTO `playlists` (`ID_session`,`youtubeplaylistlink`) VALUES ('$getid','5wiK2_1JWLo')");
			mysqli_query($link,"INSERT INTO `shooters` (`id_session`) VALUES ('$getid')");
			mysqli_query($link,"INSERT INTO `shooters_mysettings` (`id_session`) VALUES ('$getid')");
			mysqli_query($link,"INSERT INTO `shooters_myweapon` (`id_session`) VALUES ('$getid')");
			mysqli_query($link,"INSERT INTO `notes` (`id_session`) VALUES ('$getid')");
			mysqli_query($link,"INSERT INTO `settings` (`id_settings`) VALUES ('$getid')");
		}
	}

?>
</div>