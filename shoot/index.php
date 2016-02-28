<!doctype html>
<html class="no-js" lang="en">
<?php 
	include('head.php'); 
	session_start();
?>
<body class="homemenu">

	<?php include('preloader.html'); ?>

	<div class="smoke"></div>

<!--div class="block friends">
	<h1>
		<input type="text" placeholder="Search" class="search_friends">
	</h1>
</div-->
<div class="container-fluid">
	

	<div class="row first">
		
		<div class="col-md-3">
			<div class="block games">
				<h1>Games</h1>
				<img src="img/thumbnail1.png" alt="">
				<a href="#" id="oom" class="link">only one minute</a></li>
				<a href="#" class="link">waves</a></li>
			</div>
		</div>
		<div class="col-md-3">
			<div class="block leaderboard">
			<?php 
				if(isset($_SESSION['id_sess']) != ''){ include('apps/your_score.php')
					?>
					<div class="yourscore">
						<div>
							<div class="ys_list">
								<span class="name"><?php echo "$Name"; ?></span>
							</div>
							<div class="ys_list">
								<span class="ys_left">Your best Score:</span>
								<span class="ys_right"><?php echo "$Score"; ?></span>
							</div>
							<div class="ys_list">
								<span class="ys_left">Your last Score:</span>
								<span class="ys_right"><?php echo "$last_Score"; ?></span>
							</div>
							<div class="ys_list">
								<span class="ys_left">Game Type:</span>
								<span class="ys_right"><?php echo "$GameMode"; ?></span>
							</div>
							<div class="ys_list">
								<span class="ys_left">Time Played:</span>
								<span class="ys_right"><?php echo "$TimePlayed"; ?></span>
							</div>
						</div>
					</div>
					<?php
				}else{
					?>
					<div class="yourscore scrollable">
						<div>
							<div class="ys_list">
								<span class="name">Not logged</span>
							</div>
							<div class="ys_list">
								<span class="ys_left">Your best Score:</span>
								<span class="ys_right">None</span>
							</div>
							<div class="ys_list">
								<span class="ys_left">Game Type:</span>
								<span class="ys_right">None</span>
							</div>
							<div class="ys_list">
								<span class="ys_left">Time Played:</span>
								<span class="ys_right">None</span>
							</div>
						</div>
					</div>
					<?php
				}
			?>
				<h1>Leaderboard</h1>
				<img src="img/trophy.jpg" alt="">
				<div class="leaderboardlist scrollable">
					<?php 
						include('apps/leaderboard_list.php');
					?>
				</div>
			</div>
		</div>
		<div class="col-md-3">
			<div class="block options">
				<h1>Options</h1>
				<img src="img/gtx.jpg" alt="">
				<div class="scrollable">
					<a type="button" data-toggle="modal" data-target=".loginmodal">Login / Sign up</a>
					
					<div class="modal fade loginmodal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
						<div class="modal-dialog modal-sm">
							<div class="modal-content">


							<!--TABS-->
							   	<ul class="nav nav-tabs" role="tablist">
									<li class="active">
										<a href="#home" role="tab" data-toggle="tab">Login</a>
									</li>
									<li>
										<a href="#profile" role="tab" data-toggle="tab">Sign up</a>
									</li>
							   	</ul>
							   
							   <!-- Tab panes -->
							   <div class="tabs-content">
									<div class="tab-pane fade active in" id="home">
										<form action="apps/login.php" method="POST">
											<input type="text" name="name" placeholder="Username" />
											<input type="password" name="pass" placeholder="password" />
											<input type="submit" value="ok">
										</form>
									</div>
									<div class="tab-pane fade" id="profile">
										<form action="apps/signup.php" method="POST">
											<input type="text" name="name" placeholder="Username" />
											<input type="password" name="pass" placeholder="password" />
											<input type="password" name="pass2" placeholder="confirma" />
											<input type="submit" value="ok">
										</form>
									</div>
							   </div>
							   

							</div>
						</div>
					</div>
					<?php 
						if(isset($_SESSION['id_sess']) != '') {
							echo "<a type='button' data-toggle='modal' data-target='.boby'>Settings</a>";
						}else {
							echo "<a href='#popup'>Settings (need login)</a>";
						}

					?>
					<a href="#" id="HS">Help / Support</a>
					


				</div>
			</div>
		</div>
		<div class="col-md-3">
			<div class="block news">
				<h1>News</h1>
				<img src="img/news.jpg" alt="">
				<div class="scrollable">
					<p>Proximos <b>Updates</b>:</p>
					<ul class="list">
						<li>Beat leaderboard score by clicking on user.</li>
					</ul>
				</div>
			</div>
		</div>
	</div><!--ROW-->

	
	

	
	
	<div class="modal fade boby" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
					<div class="settings">
						<div class="block settings">
							<div class="left-block scrollable">
								<h1>Settings</h1>
								<?php 
									if(isset($_SESSION['id_sess']) != ''){
										$result = mysqli_query( $link, "SELECT * FROM shooters INNER JOIN users ON shooters.id_session=users.id_session WHERE ID = $_SESSION[id_sess]" );
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
					</div><!--ROW-->
			</div>
		</div>
	</div>
	



    <div class="row second">
    	<div class="col-xs-12">
    		<div class="block hs">
    			<h1>
    				Help and Support
    			</h1>
    			<p>If you encontred any problem in game see the list below:</p>
    			<ul class="list">
    			<li>Close unecessary tabs;</li>
    			<li>Videos players like (youtube, vimeo, etc.) can affect game performances close them or use different browser;</li>
    			</ul>
    		</div>
    	</div>
    </div>

	<?php
		include('scripts/scripts.php'); 
	?>

</div>
  </body>

</html>