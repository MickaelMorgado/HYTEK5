<h1>Armory</h1>
<img src="img/gun.jpg">
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