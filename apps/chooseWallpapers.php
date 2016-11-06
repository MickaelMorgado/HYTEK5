<?php 
	include('../dbConnection.php');

	$sql = "SELECT bg FROM settings";
	$array = "http://s8.favim.com/orig/150705/crystal-growth-ice-gif-space-talking-shape-Favim.com-2904298.gif,http://img0.joyreactor.com/pics/post/full/river-hd-gif-nature-1314656.gif,http://bgfons.com/upload/ornaments_texture1141.jpg,http://wallpapercave.com/wp/5wjpNuT.jpg,https://wallpaperscraft.com/image/texture_black_pattern_light_lines_44980_1920x1080.jpg";

	$result = mysqli_query($link,$sql);
	if ($result->num_rows > 0) {
		while ($row = mysqli_fetch_assoc($result)) {
			$array = $array.",".$row['bg'];
		} 	
	}else{
			$array = "http://s8.favim.com/orig/150705/crystal-growth-ice-gif-space-talking-shape-Favim.com-2904298.gif,http://img0.joyreactor.com/pics/post/full/river-hd-gif-nature-1314656.gif,http://bgfons.com/upload/ornaments_texture1141.jpg,http://wallpapercave.com/wp/5wjpNuT.jpg,https://wallpaperscraft.com/image/texture_black_pattern_light_lines_44980_1920x1080.jpg";
	}	
?>
<h3>Choose a example wallpaper: </h3>
<form action="apps/settings/setup.php" method="POST" class="wallpapers-form">
	<?php 
		$myArray = explode(',', $array);
		foreach ($myArray as $value) {
			?>
				<label 
					class="thumbnail-preview"
					for="<?php echo $value; ?>">
					<img data-original="<?php echo $value; ?>" class="lazy2">
				</label>
				<input 
					name="bg"
					type="submit" 
					class="btn btn-primary" 
					id="<?php echo $value; ?>" 
					value="<?php echo $value; ?>" />
			<?php
		}
	?>
</form>