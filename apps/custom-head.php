<?php @include('../../dbConnection.php'); ?>
<style>

<?php
	if(isset($_SESSION['id_session'])){
		$result = mysqli_query($link, "SELECT * FROM settings WHERE id_settings = $_SESSION[id_session]");
		while($row=mysqli_fetch_assoc($result)){
			echo "body { background-image: url('".$row['bg']."'); }";
		}
	}
?>


</style>