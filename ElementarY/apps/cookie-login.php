<?php 
	if (isset($_SESSION["name"])) {
		?>
		<form id="logout" action="apps/logout.php" method="POST">
			<input type="submit" value="logout">
		</form>	
		<?php
	}else{
		?>
			<form id='loginform' action='apps/login.php' method='POST'>
				<input type='text' name='CKName' id='login-name' placeholder='name'>
				<input type='password' name='CKPass' id='login-pass' placeholder='pass'>
				<input type="submit" value="login">
			</form>
			<script>
				//console.log("put js cookies in input: "+$.cookie("name")+" - "+$.cookie("pass"));
				$('#login-name').val($.cookie("name"));
				$('#login-pass').val($.cookie("pass"));

				/* if input not empty auto-submit form */
				if ($.cookie("name")!="") {
					//alert("auto-submit");
					$('#loginform').submit();
				};
			</script>
		<?php
	}
?>


