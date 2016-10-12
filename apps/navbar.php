<div class="col-xs-12">
	<div id="tabs" class="socialicons">
		<form id="searchform"
			action="apps/links/navbar-submit.php" 
			method="post"
			onsubmit="ajax($(this),event)">
			<div class="row">
				<div class="col-sm-9 col-md-8 col-lg-8">
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
							data-step="2"
						>
					</div>
				</div>
				<div class="col-sm-3 col-md-2 col-lg-2">
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
									class 	= 	"dock-icon sprite s1"
									onclick = 	"$(location).attr('href', 'https://www.google.com/search?q='+$('#searchinput').val())" >
								</input>
							</li><li>
								<input 
									type	= 	"submit" 
									title 	= 	"youtube search" 
									value 	= 	"youtube" 
									class 	= 	"dock-icon sprite s3"
									onclick = 	"$(location).attr('href', 'https://www.youtube.com/results?search_query='+$('#searchinput').val())" >
								</input>
							</li><li>
								<input 
									type 	= 	"submit" 
									title 	= 	"add this link" 
									value 	= 	"add" 
									class 	= 	"dock-icon sprite s6"
									onclick = 	"$('#dynamic-method').val('add');" >
								</input>
							</li>
						</ul>
					</div>
				</div>
				<div class="col-sm-12 col-md-2 col-lg-2">
					<ul class="list-inline">
						<li><a href="http://gmail.com/">
							<img 	
								class 	= 	"dock-icon sprite s7" 
								title 	= 	"gmail"></a>
						</li>
						<li><a href="http://facebook.com">
							<img 	
								class 	= 	"dock-icon sprite s2" 
								title 	= 	"facebook"></a>
						</li>
						<li><a href="http://play.spotifycollection/songs">
							<img 	
								class 	= 	"dock-icon sprite s5" 
								title 	= 	"spotify songs"></a>
						</li>
						<li><a href="http://twitter.com">
							<img 	
								class 	= 	"dock-icon sprite s4" 
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
