<?php 
	$sql = "SELECT * FROM settings WHERE id_settings = $_SESSION[id_session]";
	$result = mysqli_query($link,$sql);

	if ($result->num_rows > 0) {
		while ($row = mysqli_fetch_assoc($result)) {
			$bg = $row['bg'];
		} 	
	}
?>
Set custom wallpaper (http://...)
<?php if (isset($_SESSION['id_session'])): ?>
	<form action="apps/settings/setup.php" method="POST">
		<input id="bgcimgsrc" name="bg" type="input" placeholder="background image src" value="<?php echo $bg; ?>">
		<input type="submit" value="+">
	</form>
	<form action="">
		bg cover : <input type="checkbox"><br>
		bg color : <input type="text" value="#2F4F74" placeholder="#2F4F74">
	</form>
	<button type="button" class="btn btn-primary" data-toggle="modal" data-target=".laclass">Wallpapers</button>
	<div class="modal fade laclass" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg">
			<div class="modal-content well">
				<h3>Choose a example wallpaper: </h3>
				<form action="apps/settings/setup.php" method="POST">
					<input class="btn btn-primary" type="submit" name="bg" value="http://s8.favim.com/orig/150705/crystal-growth-ice-gif-space-talking-shape-Favim.com-2904298.gif">
					<input class="btn btn-primary" type="submit" name="bg" value="http://img0.joyreactor.com/pics/post/full/river-hd-gif-nature-1314656.gif">
				</form>
			</div>
		</div>
	</div>
	<style>
		body {	
			background-image: url('<?php echo $bg ?>');
			background-position: center center;
			background-size: cover;
			background-repeat: no-repeat;	
		}
	</style>
<?php endif ?>