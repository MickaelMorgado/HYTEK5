<!DOCTYPE html>
<?php 
	$error_reporting = 0;
	include('dbConnection.php');
?>
<html>
<head>
	<title>ElementarY</title>
	<meta name="theme-color" content="#224455">
	<link rel="icon" href="hyteklogo.jpg" type="image/jpg">
    <meta charset="UTF-8">
	<meta name="format-detection" content="telephone=no"/>
	<meta name="viewport" content="width=device-width" />

	<?php include('dependencies/styles.php') ?>
	<?php include('dependencies/scripts.php') ?>

	<style></style>
</head>
<body>

	<div class="dock text-center">
		<div class="container-fluid">
			<div class="row">
				<?php include("apps/navbar.php"); ?>
			</div>
		</div>
	</div>

	<div class="container-fluid">
		<div class="row masonry-container">
			<div class="col-xs-12 col-sm-6 col-md-2 item">
				<div class="element">
																			<?php include('apps/clock.php'); ?>
					<div class="glass"></div>
				</div>
				<div class="element">
																			<?php include('apps/notes.php'); ?>
					<div class="glass"></div>
				</div>	
			</div>		
			<div class="col-xs-12 col-sm-6 col-md-2 item">
				<div class="element">
																			<?php include('apps/ordering.php') ?>
					<div class="glass"></div>
				</div>
			</div>		
			<div class="col-xs-12 col-sm-6 col-md-2 item">
				<div class="element">
																			<?php include('apps/files.php'); ?>
					<div class="glass"></div>
				</div>
			</div>
			<div class="col-xs-12 col-sm-6 col-md-4 item">
				<div class="element"  style="height:300px;">
																			<?php include('apps/youtubeminiplayer.php'); ?>
					<div class="glass"></div>
				</div>
			</div>
			<div class="col-xs-12 col-sm-6 col-md-2 item">
				<div class="element" 
					data-intro='Hello new visitor, Sign Up to HYTEK5 (WIP start page) and get your new environment for better & faster browsing experience!'
					data-step="1">
																			<?php include('apps/cookie-login.php'); ?>
					<div class="glass"></div>
				</div>	
			</div>		
			<div class="col-xs-12 col-sm-6 col-md-2 item">
				<div class="element" style="height:150px;">
																			<?php include('apps/meteo.php'); ?>
					<div class="glass"></div>
				</div>	
			</div>		
			<div class="col-xs-12 col-sm-6 col-md-2 item">
				<div class="element">
																			<?php include('apps/shooters.php'); ?>
					<div class="glass"></div>
				</div>	
			</div>		
			<div class="col-xs-12 col-sm-6 col-md-2 item">
				<div class="element">
																			<?php include('apps/settings.php'); ?>
					<div class="glass"></div>
				</div>	
			</div>		
		</div>
	</div>

	<!-- SIGNUP MODAL -->
		<div class="modal fade signup-modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-lg">
				<div class="modal-content">
					<div class="modal-header">        
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<?php include("apps/signup.php"); ?>
					</div>
					<div class="modal-footer"></div>
				</div>
			</div>
		</div>
	
	<!--script src="http://listjs.com/no-cdn/list.js"></script-->
	<script src="dependencies/js/list.fuzzysearch.js"></script>
	<script src="dependencies/js/jscolor.js"></script>
	<script><?php include('dependencies/js/main.js'); ?></script>
	<script>
		<?php if (!isset($_SESSION['name'])) : ?>

			$loginInput = $('#user_email');
			$loginInput.focus();
		
		<?php endif ?>

	/* START INTRO JS ============================ */
		<?php if ($_SESSION['id_session']==''): ?>
			$(document).ready(function(){
				introJs().start();
			});
		<?php else: ?>

	/* KEY DOWNS EVENTS ============================ */
			$(document).on('keydown', function(e) {					

			    var autocompleteListWords = ["YOUTUBE","GOOGLE","FACEBOOK"];

			    var enterKey 	= 13,
			    	altKey 		= 64,
			    	downKey 	= 40,
			    	upKey 		= 38,
			    	escKey 		= 27,
			    	tabKey 		= 9;


			    if ( e.keyCode === escKey ) {								/* on esc disable next focus */
			    	$('#searchinput').focus();
			    	enable = false;
			    }
			    else {

			    	if ( e.keyCode != enterKey || e.charCode != altKey ){ 	 /* not pressing enter or alt */

			    		if ( 												 /* down */ 
			    			e.keyCode === downKey && 
			    			enable === true && 
			    			$("#enableRefresh").hasClass("active")
			    		){ 
			    			nextFocus = nextFocus + 1; 
			    			goNextFocus(nextFocus); 
			    			e.preventDefault(); 
			    		}

			    		else if (											/* up */
			    			e.keyCode === upKey && 
			    			enable === true && 
			    			$("#enableRefresh").hasClass("active")
			    		){ 
			    			nextFocus = nextFocus - 1; 
			    			goNextFocus(nextFocus); 
			    			e.preventDefault(); 
			    		}

			    		else { 
			    			//$('#searchinput').focus(); 
			    			//var SIVal = $('#searchinput').val();
			    			//var thisString = new RegExp('\\b' + SIVal + '\\b', 'i');
			    			//var thisString = new RegExp('\b'+SIVal,'i'); /* i = insensitive */
			    			//var FoundIt = thisString.test(autocompleteListWords);  
							/* new RegExp('\\b' + "YOUTUBE" + '\\b', 'i').test(["YOUTUBE","GOOGLE","FACEBOOK"]); */
			    			//$('#autocomplete').text(""+thisString); 
			    			//if (FoundIt) { 
			    			//	console.log("found:"+thisString);
				    		//	$('#autocomplete').text("true"); 
			    			//}
			    			if (e.keyCode === escKey){ /* tab */
			    				//console.log("autocomplete : "+$('#searchinput').val()+renderAutocompleteWord); return false; 
			    			} 
			    		}

			    	}
			    	else {

			    		if ( e.keyCode === enterKey ) {
			    			alert("pressing enter key");
			    			if ($("#searchinput").is(":focus")) {
			    				google($("#searchinput").val());
			    			}
			    			if ($('#enableRefresh li a:focus').length() > 0) {
			    				$('#enableRefresh li a:focus').trigger("click"); 	/* "enter" to click on tab */
			    			}
			    		}
			    		
			    		return false;
			    	};
			    }
			});
		<?php endif ?>
	</script>
</body>
</html> 