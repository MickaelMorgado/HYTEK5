<div class="col-xs-12">
	<div id="tabs">
		<form id="searchform"
			action="apps/links/navbar-submit.php" 
			method="post"
			onsubmit="ajax($(this),event)">
			<div class="row">
				<div class="col-sm-9 col-md-8 col-lg-9">
					<div id="tabs">
						<ul id="autocomplete"></ul>
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
				<div class="col-sm-3 col-md-2 col-lg-1">
					<div class="toggles-search-buttons">
						<ul class="list-inline">
							<input 
								id="dynamic-method"
								type="hidden" 
								name="method" 
								value="google">
							<li>
								<input 
									type	=	"submit" 
									title 	= 	"google search (enter)" 
									value 	= 	"google" 
									class 	= 	"dock-icon"
									onclick = 	"$(location).attr('href', 'https://www.google.com/search?q='+$('#searchinput').val())" 
									style 	= 	"background-image:url('dependencies/img/1.png')">
								</input>
							</li><li>
								<input 
									type	= 	"submit" 
									title 	= 	"youtube search" 
									value 	= 	"youtube" 
									class 	= 	"dock-icon"
									onclick = 	"$(location).attr('href', 'https://www.youtube.com/results?search_query='+$('#searchinput').val())" 
									style 	= 	"background-image:url('dependencies/img/3.png')">
								</input>
							</li><li>
								<input 
									type 	= 	"submit" 
									title 	= 	"add this link" 
									value 	= 	"add" 
									class 	= 	"dock-icon"
									onclick = 	"$('#dynamic-method').val('add');" 
									style 	= 	"background-image:url('dependencies/img/6.png')">
								</input>
							</li>
						</ul>
					</div>
				</div>
				<div class="col-sm-12 col-md-2 col-lg-2">
					<ul class="list-inline">
						<li><a href="http://gmail.com/">
							<img 	
								class 	= 	"dock-icon" 
								src 	= 	"dependencies/img/7.png" 
								alt 	= 	"gmail"
								title 	= 	"gmail"></a>
						</li>
						<li><a href="http://facebook.com">
							<img 	
								class 	= 	"dock-icon" 
								src 	= 	"dependencies/img/2.png" 
								alt 	= 	"facebook"
								title 	= 	"facebook"></a>
						</li>
						<li><a href="http://play.spotifycollection/songs">
							<img 	
								class 	= 	"dock-icon" 
								src 	= 	"dependencies/img/4.png" 
								alt 	= 	"spotify songs"
								title 	= 	"spotify songs"></a>
						</li>
						<li><a href="http://twitter.com">
							<img 	
								class 	= 	"dock-icon" 
								src 	= 	"dependencies/img/5.png" 
								alt 	= 	"twitter"
								title 	= 	"twitter"></a>
						</li>
					</ul>
				</div>
			</div>
		</form>
		<div class="ajax-response"></div>
		<ul class="list-unstyled scrollable list" id="enableRefresh">
			<?php include('apps/link-list.php'); ?>
		</ul>
	</div>
</div>
