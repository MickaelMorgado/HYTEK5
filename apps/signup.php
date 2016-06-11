<head>
<?php 
	$backfolder = 1; 
	require_once '../dbConnection.php';
	include('../dependencies/styles.php');
	include('../dependencies/scripts.php'); 
?>
</head>
<form action="signup-action.php" method="POST">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12">
				<div class="well">
					<div class="container-fluid">
						<div class="row">
							<div class="col-xs-12 col-sm-3 col-md-3">
								<label for="mail">e-mail</label>			
							</div>
							<div class="col-xs-12 col-sm-9 col-md-9">
								<input type="email" name="mail" placeholder="e-mail">
							</div>
						</div>
						<div class="row">
							<div class="col-xs-12 col-sm-3 col-md-3">
								<label for="password">password</label>			
							</div>
							<div class="col-xs-12 col-sm-9 col-md-9">
								<input type="password" name="pass1" placeholder="password">
							</div>
						</div>
						<div class="row">
							<div class="col-xs-12 col-sm-3 col-md-3">
								<label for="password-c">confirm password</label>			
							</div>
							<div class="col-xs-12 col-sm-9 col-md-9">
								<input type="password" name="pass2" placeholder="confirma password">
							</div>
						</div>
						<div class="row">
							<div class="col-xs-12 col-sm-12 col-md-12">
								<input type="submit" value="signup">
							</div>
						</div>
					</div>											
				</div>
			</div>
		</div>
	</div>
</form>