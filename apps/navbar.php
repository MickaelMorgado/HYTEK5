<div class="col-xs-12">
	<div id="tabs">
		<form id="searchform"
			action="apps/links/navbar-submit.php" 
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
								<input 
									type	=	"submit" 
									title 	= 	"google search (enter)" 
									name 	= 	"method"
									value 	= 	"google" 
									class 	= 	"dock-icon"
									style 	= 	"background-image:url('dependencies/img/1.png')">
								</input>
							</li><li>
								<input 
									type	= 	"submit" 
									title 	= 	"youtube search" 
									name 	= 	"method"
									value 	= 	"youtube" 
									class 	= 	"dock-icon"
									style 	= 	"background-image:url('dependencies/img/3.png')">
								</input>
							</li><li>
								<input 
									type 	= 	"submit" 
									title 	= 	"add this link" 
									name 	= 	"method"
									value 	= 	"add" 
									class 	= 	"dock-icon"
									style 	= 	"background-image:url('dependencies/img/6.png')">
								</input>
							</li>
						</ul>
					</div>
				</div>
				<div class="col-xs-2">
					<ul class="list-inline">
						<li><a href="http://gmail.com/">
							<img 	class="dock-icon" 
									src="dependencies/img/1.png" 
									alt="gmail"
									title="gmail"></a>
						</li>
						<li><a href="http://facebook.com">
							<img 	class="dock-icon" 
									src="dependencies/img/2.png" 
									alt="facebook"
									title="facebook"></a>
						</li>
						<li><a href="http://play.spotifycollection/songs">
							<img 	class="dock-icon" 
									src="dependencies/img/4.png" 
									alt="spotify songs"
									title="spotify songs"></a>
						</li>
						<li><a href="http://twitter.com">
							<img 	class="dock-icon" 
									src="dependencies/img/5.png" 
									alt="twitter"
									title="twitter"></a>
						</li>
					</ul>
				</div>
			</div>
		</form>
		<ul class="list-unstyled scrollable list" id="enableRefresh">
			<?php include('apps/link-list.php'); ?>
		</ul>
	</div>
</div>