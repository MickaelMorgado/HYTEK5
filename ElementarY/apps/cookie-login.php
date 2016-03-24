<div id="loginform">
	<button onclick="logout()">logout</button>
</div>	
<script>

function login() {
	ln = $('#login-name').val();
	pass = $('#login-pass').val();
	var obj = {name:ln,pass:pass}
	$.cookie("session", $.param(obj), { expires: 7 });
}
function logout() {
	$.removeCookie('session');
}

if ($.cookie('session') == null) {
	$('#loginform').prepend("<input type='text' id='login-name'><input type='password' id='login-pass'><button onclick='login()'>login</button>");
}else{
	$('#loginform').prepend("logged as "+$.cookie("session") );
};
</script>