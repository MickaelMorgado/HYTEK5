$(document).on('keydown', function(e) {
	var enterKey 	= 13,
    	altKey 		= 64,
    	downKey 	= 40,
    	upKey 		= 38,
    	escKey 		= 27,
    	tabKey 		= 9;
    if ( e.keyCode === escKey ) {								/* on esc disable next focus */
    	console.log("in function");
    	e.preventDefault();
    	$('#searchinput').focus();
    	//enable = false;
    }
});