<div class="col-xs-12">
	<div id="tabs">
		<form id="searchform"
			action="apps/links/add-link.php" 
			method="post">
			<div class="row">
				<div class="col-xs-9">
					<div id="tabs">
						<div id="autocomplete"></div>
						<input 
							type="text" 
							name="link-add-url" 
							placeholder="Search [ ALT key ]" 
							title="press alt key to focus" 
							class="search fuzzy-search" 
							id="searchinput" 
							autocomplete="off"
							data-intro='This field enables you to go to your favorite bookmarks or simply search on Google or YouTube'
							data-step="2">
					</div>
				</div>
				<div class="col-xs-1">
					<div class="toggles-search-buttons">
						<ul class="list-inline">
							<li>
								<a 	id="ggsearch" 
									onclick="google($('#searchinput').val());"
									title="enter">
										<img class="dock-icon" src="dependencies/img/1.png" alt="in google">
								</a>
							</li><li>
								<a 	onclick="youtube($('#searchinput').val());"
									title="shift + enter">
										<img class="dock-icon" src="dependencies/img/3.png" alt="in youtube">
								</a>
							</li><li>
								<input type="submit" value="add" class="fa fa-plus-circle"></input>
							</li>
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