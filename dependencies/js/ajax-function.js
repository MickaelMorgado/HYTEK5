/*============================================================
    AJAX
============================================================*/

	/* how to use :
		<form ... onsubmit="ajax($(this),event)" ... >
		<form ... onsubmit="ajax($(this),event);$('divUwant').load('phpfileuwant');" ... > // W/ reload div
		<span class="ajax-response"></span>
	*/
	function ajax(e,event) {

		var $myForm  	= 	$('#'+e.attr('id')), 							/* form */
			phpFile  	= 	e.attr('action'), 						/* target php file */
			method  	= 	e.attr('method'),						/* form method */
			$targetDiv 	= 	$('#'+e.attr('id')).parent().find('.ajax-response'); 		/* div where php response will be shown */

		$.ajax({
			url: phpFile,
			type: method,
			data: $myForm.serialize(),
			cache: false,
			success: function(output) {
				$targetDiv.html(output);
		  	},
		  	error: function(xhr, desc, err) {
				console.log(xhr + "\n" + err);
		  	}
		});
		event.preventDefault(); /* escaping from html submit event */

	}