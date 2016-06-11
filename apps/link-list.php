<div id="UI-result"></div>

<div id="tabs">
	<div class="container-full">
		<div class="row">
			<div class="col-xs-6 col-sm-6 col-md-6">
				<select name="order" id="link-order-select">
					<option value="" selected hidden>--</option>
					<option value="`title`ASC">title ASC</option>
					<option value="`title`DESC">title DESC</option>
					<option value="`data`ASC">Date ASC</option>
					<option value="`data`DESC">Date DESC</option>
					<option value="`url`ASC">Url ASC</option>
					<option value="`url`DESC">Url DESC</option>
					<option value="`view`ASC">View ASC</option>
					<option value="`view`DESC">View DESC</option>
				</select>
			</div>
			<div class="col-xs-6">
				<div class="dropdown pull-right">
					<button href="#" type="button" id="dropdownMenuAdd" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" class="btn-search">+<span class="caret"></span></button>
					<ul class="dropdown-menu" aria-labelledby="dropdownMenuAdd">
						<form action="apps/links/add-link.php" method="post">
							<li>
								<input type="text" name="link-add-title" placeholder="title (opcional)">
								<input type="text" name="link-add-url" 	 placeholder="url">
							</li>
							<input type="submit" value="add">
						</form>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<form id="searchform" action="" method="GET">
		<div class="container-full">
			<div class="row">
				<div class="col-xs-6">
					<input type="text" placeholder="Search" class="search" id="searchinput" autocomplete="off">
				</div>
				<div class="col-xs-6">
					<div class="toggles-search-buttons">
						<button onclick="google()" class="btn-search gg"><i class="fa fa-google"></i></button><button onclick="youtube()" class="btn-search yt"><i class="fa fa-youtube-play"></i></button>
					</div>
				</div>
			</div>
		</div>
	</form>
	<ul class="list-unstyled scrollable list" id="enableRefresh">
		<?php 
			include('links/get-links.php'); 
		?>
	</ul>
</div>

<?php 

	if (isset($_SESSION['id_session'])) {
		?>

			<!--script>

		<script>
		var singletab = 0;
		$(document).on('keydown', function(e) {					/* on tab focus */
			if (e.keyCode === 9 && singletab == 0) {
				$('.search[@type="text"]').focus();
				singletab = 1;
			}
		});
		</script>

				var nextFocus = 0;

				function goNextFocus(nf) {
					$('#enableRefresh li:nth-child('+nf+') a').focus();
				}

				$('#searchinput').on('keyup', function(){ nextFocus = 0; }); /* reset next focus on writing in input */

				//var a = false ;
				//function toggle(){
				//	if (a == true) { a = false;
				//		$('a.link-list').prop('target','_blank');
				//	}else if (a == false){ a = true;
				//		$('a.link-list').prop('target','');
				//	}
				//}
				$(document).on('keydown', function(e) {					/* on tab got to next link to focus him */
				    if (e.keyCode === 9) {
						if (e.shiftKey) {	shiftKeyDown = true; 	nextFocus= nextFocus - 1; } else {
								 			shiftKeyDown = false; 	nextFocus= nextFocus + 1; }
			       		goNextFocus(nextFocus);
				        e.preventDefault();
				    }
				    //if (e.which === 17) {
				    //	toggle();
				    //};
				});
			</script-->

		<?php
	}else{
		?>
			<script>
			$(document).ready(function(){
				$('#login-name').focus();
			});
			</script>
		<?php
	}

?>