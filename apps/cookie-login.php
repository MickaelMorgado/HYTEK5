<?php 
session_start();
if($debug==true){ echo "session: ".$_SESSION['id_session']; }
if(!isset($_SESSION['id_session'])){?>

	<div class="signin-form">
		<label for="user_email">Login / Signup:</label>
		<form action="apps/login.php" method="POST" class="form-signin" id="login-form">
			<div id="error"><!-- error will be shown here ! --></div>

			<div class="form-group">
				<input type="email" placeholder="Email address" name="user_email" id="user_email" />
				<span id="check-e"></span>
			</div>

			<div class="form-group">
				<input type="password" placeholder="Password" name="password" id="password" />
			</div>
			<div class="form-group">
				remeber me: <input type="checkbox" name="keepSession" checked="checked">
			</div>

			<div class="form-group">
				<button type="submit" name="btn-login" id="btn-login">Sign In</button> 
			</div>        
		</form>
	</div>
	or <a data-toggle="modal" data-target=".signup-modal">Sign up</a>

	<!--script>
		$('document').ready(function(){ 
			/* validation ===================================================================*/
		  	$("#login-form").validate({
		  		rules:{
		   			password: {
		   				required: true,
			   		},
			   		user_email: {
			            required: true,
			            email: true
		            },
		    	},
		       	messages:{
		            password:{ required: "please enter your password" },
		            user_email: "please enter your email address",
		       	},
		    	submitHandler: submitForm 
	        });  
		    /* end of validation ===================================================================*/
		    
		    /* login submit ========================================================================*/
		    function submitForm(){  
		   		var data = $("#login-form").serialize();
		    
		   		$.ajax({
					type : 'POST',
					url  : 'apps/login.php',
					data : data,
					beforeSend: function(){ 
		    			$("#error").fadeOut();
		    			$("#btn-login").html('<span class="glyphicon glyphicon-transfer"></span> &nbsp; sending ...');
		   			},
		   			success: function(response){      
		     			if(response=="ok"){
		        			$("#btn-login").html('<img src="btn-ajax-loader.gif" /> &nbsp; Signing In ...');
		      				//setTimeout(' window.location.href = "home.php"; ',4000);
		     			}else{
		        			$("#error").fadeIn(1000, function(){      
		    					$("#error").html('<div class="alert alert-danger"> <span class="glyphicon glyphicon-info-sign"></span> &nbsp; '+response+' !</div>');
		           				$("#btn-login").html('<span class="glyphicon glyphicon-log-in"></span> &nbsp; Sign In');
		         			});
		     			}
		     		}
		   		});
		    	return false;
		  	}
		    /* end of login submit ========================================================================*/
		});
	</script-->

<?php
}else{?>
	<?php 
		$sql = "SELECT * FROM users WHERE id_session = ".$_SESSION['id_session'];
		$result = mysqli_query($link,$sql);

		if ($result->num_rows > 0) {
			while ($row = mysqli_fetch_assoc($result)) {
				echo $row['name'];
				echo "<br>";
			} 	
		}else{
			echo "0 results";
		}

	?>
	<a href="apps/logout.php" class="btn">Logout</a><?php
}
?>