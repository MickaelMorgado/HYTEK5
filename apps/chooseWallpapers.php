<h3>Choose a example wallpaper: </h3>
<form action="apps/settings/setup.php" method="POST" class="wallpapers-form">
	<?php 
		$wallpapers = array("http://s8.favim.com/orig/150705/crystal-growth-ice-gif-space-talking-shape-Favim.com-2904298.gif",
							"http://img0.joyreactor.com/pics/post/full/river-hd-gif-nature-1314656.gif",
							"http://bgfons.com/upload/ornaments_texture1141.jpg",
							"http://www.kemecer.com/i/oceanstormatnight-wallpaper-full-hd.jpg",
							"https://wallpaperscraft.com/image/texture_black_pattern_light_lines_44980_1920x1080.jpg",
							"http://s8.favim.com/orig/150705/crystal-growth-ice-gif-space-talking-shape-Favim.com-2904298.gif",
							"http://img0.joyreactor.com/pics/post/full/river-hd-gif-nature-1314656.gif",
							"http://bgfons.com/upload/ornaments_texture1141.jpg",
							"http://www.kemecer.com/i/oceanstormatnight-wallpaper-full-hd.jpg",
							"https://wallpaperscraft.com/image/texture_black_pattern_light_lines_44980_1920x1080.jpg");
		foreach ($wallpapers as $value) {
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
					value="<?php echo $value; ?>">
			<?php
		}

	?>
</form>