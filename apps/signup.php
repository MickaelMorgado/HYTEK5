<form 
	action="apps/signup-action.php" 
	method="POST" 
	id="SignUpForm" 
	onsubmit="ajax($(this),event)">
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
</form>
<div class="ajax-response"></div>
<!--script>

	var $myForm  	= 	$('#SignUpForm'), 					/* form */
		phpFile  	= 	$myForm.attr('action'), 			/* target php file */
		method  	= 	$myForm.attr('method'),				/* form method */
		$targetDiv 	= 	$('#php-response'); 				/* div where php response will be shown */
	
	$myForm.submit(function(event){
		$.ajax({
			url: phpFile,
			type: method,
			data: $myForm.serialize(),
			cache: false,
			success: function(data) {
				if ($targetDiv) { 	$targetDiv.html(data); 	}
				else {				$myForm.append(data);	}
		  	},
		  	error: function(xhr, desc, err) {
				console.log(xhr + "\n" + err);
		  	}
		});
		event.preventDefault();
	});

</script-->