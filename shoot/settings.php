<!doctype html>
<html class="no-js" lang="en">
<?php 
	include('head.php'); 
	session_start();
?>
<body class="homemenu">

	<?php include('preloader.html'); ?>

	<?php 
	if(isset($_SESSION['ID_PLAYER']) != '') {
	?>
	<div class="smoke"></div>

<!--div class="block friends">
	<h1>
		<input type="text" placeholder="Search" class="search_friends">
	</h1>
</div-->

	<div class="row settings">
		
		<div class="small-12 columns">
			<div class="block settings">
				<div class="left-block scrollable">
					<h1>Settings</h1>
					<?php 
						if(isset($_SESSION['ID_PLAYER']) != ''){
							$result = mysqli_query( $link, "SELECT * FROM SETTINGS INNER JOIN PLAYERS ON SETTINGS.ID_PLAYER=PLAYERS.ID_PLAYER WHERE ID = $_SESSION[ID_PLAYER]" );
							while($row = mysqli_fetch_assoc($result)) {
								$Name = $row['name'];
								$settings = $row['settings'];
								$music = $row['music'];
								$ambiance = $row['ambiance'];
								$weapons = $row['weapons'];
								$birds = $row['birds'];
								$bscore = $row['score'];

								$music = $music*10;
								$ambiance = $ambiance*10;
								$weapons = $weapons*10;
								$birds = $birds*10;
							}
							?>
							<span class="name"><label for="settings">Player:</label><?php echo "$Name"; ?></span>
							<form action="settings-up.php" method="GET">
								<br>
								<label for="settings">Presets:</label>
								<?php
									switch ($settings) {
										case 0: echo "
                                			
                                			<select name='settings' id='settings'>
			                                	<option value='low' selected>low</option>
			                                	<option value='normal'>normal</option>
			                                	<option value='ultra'>ultra</option>
			                                </select>

											"; break;
										case 1: echo "

                                			<select name='settings' id='settings'>
                                				<option value='low'>low</option>
                                				<option value='normal' selected>normal</option>
                                				<option value='ultra'>ultra</option>
                                			</select>

											"; break;
										case 2: echo "

                                			<select name='settings' id='settings'>
                                				<option value='low'>low</option>
                                				<option value='normal'>normal</option>
                                				<option value='ultra' selected>ultra</option>
                                			</select>

											"; break;								
									}
								?>
								<br>
                                <br><label for="music">Music:</label> 
                                <input type="range" name="music" min="0" max="10" value="<?php echo $music; ?>">
                                <br><label for="ambiance">Ambiance:</label> 
                                <input type="range" name="ambiance" min="0" max="10" value="<?php echo $ambiance; ?>">
                                <br><label for="weapons">Weapons:</label> 
                                <input type="range" name="weapons" min="0" max="10" value="<?php echo $weapons; ?>">
                                <br><label for="birds">Birds:</label> 
                                <input type="range" name="birds" min="0" max="10" value="<?php echo $birds; ?>">
                                <br><br>	
                                <input type="submit" value="apply settings">
							</form>
							<form action="reset-score.php" method="GET">
								<label>BEST SCORE:</label><?php echo $bscore ?>
                                <input type="submit" value="reset score">
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
					<img src="img/gtx.jpg">
				</div>
			</div>
		</div>
	</div><!--ROW-->

    </div>

	<?php 
	}else{
		header("location: index.php");
	}
	?>

	<?php
		include('apps/modal.php'); 
		include('scripts/scripts.php'); 
	?>
	
  </body>


</html>