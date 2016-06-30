<div class="container-fluid">
	<div class="row">
		<div class="col-xs-12 col-sm-4 col-md-4">

			<!--div class="preview-weapon">
				<img width="150px" src="Weapons/cursors/<?php echo $cursor; ?>" alt="">
			</div-->
			<?php 
				$dir = "Weapons/cursors/";
				$dh = opendir($dir);
				while (false !== ($filename = readdir($dh))) {
					if ($filename != "." && $filename != "..") {
						?><img width="100px" src="Weapons/cursors/<?php echo $filename; ?>" alt=""><span><?php echo $filename; ?></span><br>	<?php
				    }
				}
			?>	



		</div>
		<div class="col-xs-12 col-sm-4 col-md-4">

			<?php 
				$dir = "Weapons/fireaudio/";
				$dh = opendir($dir);
				while (false !== ($filename = readdir($dh))) {
					if ($filename != "." && $filename != "..") {
						?><span class="btn-block"><?php echo $filename; ?></span><audio controls><source src="Weapons/fireaudio/<?php echo $filename; ?>" type="audio/mp3"></audio><?php
				    }
				}
			?>	


		</div>
		<div class="col-xs-12 col-sm-4 col-md-4">

		<?php 
			$dir = "Weapons/reloadaudio/";
			$dh = opendir($dir);
			while (false !== ($filename = readdir($dh))) {
				if ($filename != "." && $filename != "..") {
					?><span class="btn-block"><?php echo $filename; ?></span><audio controls><source src="Weapons/reloadaudio/<?php echo $filename; ?>" type="audio/mp3"></audio><?php
			    }
			}
		?>	


		</div>
	</div>
</div>
