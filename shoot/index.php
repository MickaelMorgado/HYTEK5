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

	<div class="row first">
		
		<div class="small-12 medium-3 large-3 columns">
			<div class="block games">
				<h1>Games</h1>
				<img src="img/thumbnail1.png" alt="">
				<a href="#" id="oom" class="link">only one minute</a></li>
				<a href="#" class="link">waves</a></li>
			</div>
		</div>
		<div class="small-12 medium-3 large-3 columns">
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
		<div class="small-12 medium-3 large-3 columns">
			<div class="block options">
				<h1>Options</h1>
				<img src="img/gtx.jpg" alt="">
				<div class="scrollable">
					<a href="#popup">Login / Sign up</a>
					<?php 
						if(isset($_SESSION['id_sess']) != '') {
							echo "<a href='settings.php'>Settings</a>";
						}else {
							echo "<a href='#popup'>Settings (need login)</a>";
						}

					?>
					<a href="#" id="HS">Help / Support</a>
				</div>
			</div>
		</div>
		<div class="small-12 medium-3 large-3 columns">
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

    <div class="row second">
    	<div class="small-12 medium-12 large-12 columns">
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
		include('apps/modal.php'); 
		include('scripts/scripts.php'); 
	?>
	
  </body>


</html>