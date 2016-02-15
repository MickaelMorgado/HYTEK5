<!--MODAL-->
<div id="popup">
 	<span id="close" title="press Esc to close">&times;</span>
<!--TABS-->
	<ul class="tabs">
		<li class="active-tab">Login</li>
		<li>Sign Up</li>
	</ul>
	<ul class="tabs-content">
		<li>
			<form action="apps/login.php" method="POST">
				<input type="text" name="name" placeholder="Username" />
				<input type="password" name="pass" placeholder="password" />
				<input type="submit" value="ok">
			</form>
		</li>
		<li>
			<form action="apps/signup.php" method="POST">
				<input type="text" name="name" placeholder="Username" />
				<input type="password" name="pass" placeholder="password" />
				<input type="password" name="pass2" placeholder="confirma" />
				<input type="submit" value="ok">
			</form>
		</li>
	</ul>
</div>