<?php 
	$sql = "SELECT * FROM shooters_myweapon";
	$result = mysqli_query($link,$sql);

	if ($result->num_rows > 0) {
		while ($row = mysqli_fetch_assoc($result)) {
			$cursor = $row['src'];
			$sound_fire = $row['sound_fire'];
			$sound_reload = $row['sound_reload'];
		} 	
	}
?>
<h1>Armory</h1>
<img src="img/gun.jpg" alt="">
<div class="scrollable">
	<?php 
		if (isset($_SESSION['id_session'])) { 
			?>
			<a class="link" data-toggle="modal" data-target=".armorypopup">Weapons Shop</a>
			<?php
		}else{
			?>
			<a type="button" data-toggle="modal" data-target=".loginmodal">Weapons Shop (need login)</a>
			<?php
		}
	?>
	
</div>