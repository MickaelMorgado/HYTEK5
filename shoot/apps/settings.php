<div class="left-block scrollable">
	<h1>Settings</h1>
	<?php 
		if(isset($_SESSION['id_session'])){
			$result = mysqli_query( $link, "SELECT * FROM shooters_mysettings INNER JOIN users ON shooters_mysettings.id_session=users.id_session INNER JOIN shooters ON shooters.id_session=users.id_session WHERE users.id_session=$_SESSION[id_session]" );
			while($row = mysqli_fetch_assoc($result)) {
				$Name = $row['player_name'];
				$settings = $row['presets'];
				$music = $row['aud_musics'];
				$ambiance = $row['aud_ambiances'];
				$weapons = $row['aud_weapons'];
				$birds = $row['aud_birds'];
				$bscore = $row['best_score'];

				$music = $music*10;
				$ambiance = $ambiance*10;
				$weapons = $weapons*10;
				$birds = $birds*10;
			}
			?>
			<span class="name"><label for="settings">Player:</label><?php echo $Name; ?></span>
			<form action="settings-up.php" method="GET">
				<br>
				<label for="settings">Presets:</label>
				<?php
					$settings = $settings;
					switch ($settings) {
						case 0: echo "
	            			
	            			<select name='settings' id='settings' class='btn-block'>
	                        	<option value='low' selected>low</option>
	                        	<option value='normal'>normal</option>
	                        	<option value='ultra'>ultra</option>
	                        </select>

							"; break;
						case 1: echo "

	            			<select name='settings' id='settings' class='btn-block'>
	            				<option value='low'>low</option>
	            				<option value='normal' selected>normal</option>
	            				<option value='ultra'>ultra</option>
	            			</select>

							"; break;
						case 2: echo "

	            			<select name='settings' id='settings' class='btn-block'>
	            				<option value='low'>low</option>
	            				<option value='normal'>normal</option>
	            				<option value='ultra' selected>ultra</option>
	            			</select>

							"; break;								
					}
				?>
				<br>
	            <br><label for="music">Music:</label> 
	            <input type="range" min="0" max="10" value="<?php echo $music * 10 ; ?>" name="music">
	            <br><label for="ambiance">Ambiance:</label> 
	            <input type="range" min="0" max="10" value="<?php echo $ambiance * 10 ; ?>" name="ambiance">
	            <br><label for="weapons">Weapons:</label> 
	            <input type="range" min="0" max="10" value="<?php echo $weapons * 10 ; ?>" name="weapons">
	            <br><label for="birds">Birds:</label> 
	            <input type="range" min="0" max="10" value="<?php echo $birds * 10 ; ?>" name="birds">
	            <br><br>	
	            <input type="submit" value="apply settings">
			</form>
			<form action="reset-score.php" method="GET">
				<label>BEST SCORE:</label><?php echo get($link,"BEST_SCORE","SCORES INNER JOIN users  ON scores.id_session=users.id_session","players.id_session=$_SESSION[id_session]"); ?>
	            <input type="submit" class="danger" value="reset score">
			</form>
			<?php
		}else{
			?>
			Not logged
			<?php
		}
	?>
</div>
<div class="right-block">
<?php 
	switch ($settings) {
		case 0:
			echo "<link rel='stylesheet' href='stylesheets/low-settings.css'>";
			?><script>$(document).ready(function () {$('.loading-statut').append("<br/>loading: low-settings.css")});</script><?php
			break;
		case 1:
			echo "<link rel='stylesheet' href='stylesheets/normal-settings.css'>";
			?><script>$(document).ready(function () {$('.loading-statut').append("<br/>loading: normal-settings.css")});</script><?php
			break;
		case 2:
			echo "<link rel='stylesheet' href='stylesheets/normal-settings.css'>";
			echo "<link rel='stylesheet' href='stylesheets/ultra-settings.css'>";
			?><script>$(document).ready(function () {$('.loading-statut').append("<br/>loading: ultra-settings.css")});</script>
			<div class="smoke"></div>
			<div class="light"></div><?php
			break;
		
		default:
			echo "<link rel='stylesheet' href='stylesheets/normal-settings.css'>";
			?><script>$(document).ready(function () {$('.loading-statut').append("<br/>loading: normal-settings.css")});</script><?php
			break;
	}
?>
<div class="preview-settings">
	<img src="img/onlyoneminute/moohurun2.gif" style="position:absolute;left: 0px;width: 70px;height: initial;">
</div>