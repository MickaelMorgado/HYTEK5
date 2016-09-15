<div class="col-xs-12">
	<div id="tabs">
		<form id="searchform" action="" method="GET">
			<div class="row">
				<div class="col-xs-9">
					<div id="tabs">
						<div id="autocomplete"></div>
						<input type="text" placeholder="Search [ ALT key ]" title="press alt key to focus" class="search fuzzy-search" id="searchinput" autocomplete="off">
					</div>
				</div>
				<div class="col-xs-1">
					<div class="toggles-search-buttons">
						<ul class="list-inline">
							<li><button href="#" id="ggsearch" onclick="google()"><img class="dock-icon" src="dependencies/img/1.png" alt="in google"></button></li>
							<li><button href="#" onclick="youtube()"><img class="dock-icon" src="dependencies/img/3.png" alt="in youtube"></button></li>
						</ul>
					</div>
				</div>
				<div class="col-xs-2">
					<ul class="list-inline">
						<li><a href="http://gmail.com/"><img class="dock-icon" src="dependencies/img/1.png" alt=""></a></li>
						<li><a href="http://facebook.com"><img class="dock-icon" src="dependencies/img/2.png" alt=""></a></li>
						<li><a href="http://play.spotify.com/collection/songs"><img class="dock-icon" src="dependencies/img/4.png" alt=""></a></li>
						<li><a href="http://twitter.com"><img class="dock-icon" src="dependencies/img/5.png" alt=""></a></li>
						<!--li class="dock-aspect"><div class="glass"></div></li-->
					</ul>
				</div>
			</div>
		</form>
		<ul class="list-unstyled scrollable list" id="enableRefresh">
			<?php include('apps/link-list.php'); ?>
		</ul>
	</div>
</div>