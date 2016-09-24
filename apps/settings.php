<?php 
	$sql = "SELECT * FROM settings WHERE id_settings = $_SESSION[id_session]";
	$result = mysqli_query($link,$sql);

	if ($result->num_rows > 0) {
		while ($row = mysqli_fetch_assoc($result)) {
			$bg = $row['bg'];
		} 	
	}
?>
<?php if (isset($_SESSION['id_session'])): ?>
	<div class="panel-group" id="accordion">
		<div class="panel panel-default">
		  <div class="panel-heading">
			<a data-toggle="collapse" data-parent="#accordion" href="#collapse1"class="panel-title">
			 	Change background
			</a>
		  </div>
		  <div id="collapse1" class="panel-collapse collapse">
			<div class="panel-body">
				<label for="bgcimgsrc">Set custom wallpaper (http://...)</label>
				<form action="apps/settings/setup.php" method="POST">
					<input id="bgcimgsrc" name="bg" type="input" placeholder="background image src" value="<?php echo $bg; ?>">
					<input type="submit" value="Apply">
				</form>
				<!-- 
				bg cover : <input type="checkbox"><br>
				-->
			</div>
		  </div>
		</div>
		<div class="panel panel-default">
		  <div class="panel-heading">
			<a data-toggle="collapse" data-parent="#accordion" href="#collapse2"class="panel-title">
				Color of effects
			</a>
		  </div>
		  <div id="collapse2" class="panel-collapse collapse">
			<div class="panel-body">
				bg color top : <input class="jscolor {onFineChange:'update(this)'}" value="2F4F74">
				<p id="rect" style="border:1px solid gray; width:161px; height:100px;">
				bg color bottom : <input type="text" value="#2F4F74" placeholder="#2F4F74">
			</div>
		  </div>
		</div>
		<div class="panel panel-default">
		  <div class="panel-heading">
			<a data-toggle="collapse" data-parent="#accordion" href="#collapse3"class="panel-title">
				More backgrounds
			</a>
		  </div>
		  <div id="collapse3" class="panel-collapse collapse">
			<div class="panel-body">
				<a data-toggle="modal" data-target=".laclass">Wallpapers</a>
			</div>
		  </div>
		</div>
	</div>
		
	
	<div class="modal fade laclass" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg">
			<div class="modal-content well">
				<?php include('chooseWallpapers.php') ?>
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
<?php else: ?>
	You need to log on to customize aspects
<?php endif ?>