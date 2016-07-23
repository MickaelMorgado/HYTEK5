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

	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<div class="dock text-center">
					<div class="container-fluid">
						<div class="row">
							<?php include("apps/navbar.php"); ?>
						</div>
					</div>
				</div>
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
				<div class="element" style="height:150px;">
					<div class="container-full">
						<div class="row">
							<div class="col-xs-6 col-sm-6 col-md-6">
								<select name="order" id="link-order-select">
									<option value="`view`DESC" selected>--</option>
									<option value="`title`DESC">title ASC</option>
									<option value="`data`DESC">Date DESC</option>
									<option value="`url`DESC">Url ASC</option>
									<option value="`view`DESC">View DESC</option>
								</select>
							</div>
							<div class="col-xs-6">
								<div class="dropdown pull-right">

									<button type="button" class="btn btn-primary" data-toggle="modal" data-target=".addlinkreveal">add link</button>
									<div class="modal fade addlinkreveal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
										<div class="modal-dialog modal-lg">
											<div class="modal-content">
												<div class="modal-header">        
													<button type="button" class="close" data-dismiss="modal" aria-label="Close">
														<span aria-hidden="true">&times;</span>
													</button>
												</div>
												<div class="modal-body">
													<form action="apps/links/add-link.php" method="post">
														<ul class="list-inline">
															<li><input type="text" name="link-add-title" placeholder="title (opcional)"></li>
															<li><input type="text" name="link-add-url" 	 placeholder="url"></li>
															<li><input type="submit" value="add"></li>
														</ul>
													</form>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
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
				<div class="element">
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

	
	<!--script src="http://listjs.com/no-cdn/list.js"></script-->
	<script src="http://listjs.com/no-cdn/list.fuzzysearch.js"></script>
	<script src="dependencies/js/jscolor.js"></script>
	<script><?php include('dependencies/js/main.js'); ?></script>
	<script>

	
		<?php if (!isset($_SESSION['name'])) : ?>

			$loginInput = $('#user_email');
			$loginInput.focus();
		
		<?php endif ?>
	</script>
</body>
</html> 