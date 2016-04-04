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
			$('#login-name').val($.cookie("name"));
			$('#login-pass').val($.cookie("pass"));

			if ($.cookie("name")!="") { 
				//$('#loginform').submit();
			};
		</script>
		<?php
	}
?>


