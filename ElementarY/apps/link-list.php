<div id="UI-result"></div>

<div id="tabs">
	<input type="text" placeholder="Search" class="search">
	<div class="dropdown pull-right">
		<a href="#" type="button" id="dropdownMenuAdd" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">+<span class="caret"></span></a>
		<ul class="dropdown-menu" aria-labelledby="dropdownMenuAdd">
			<form action="apps/links/add-link.php" method="post">
				<li>
					<input type="text" name="link-add-title" 	placeholder="title">
					<input type="text" name="link-add-url" 		placeholder="url">
				</li>
				<input type="submit" value="add">
			</form>
		</ul>
	</div>
	<ul class="list-unstyled scrollable list" id="enableRefresh">
		<?php 
			include('links/get-links.php'); 
		?>
	</ul>
</div>

<!--script src="http://listjs.com/no-cdn/list.js"></script-->
<script> 
	
	var options = { valueNames: [ 'title','url' ] };
	var userList = new List('tabs', options);

/* More info @ : 
================

	http://malsup.com/jquery/form/			*/

/*    $('form').ajaxForm({
    	target: '#UI-result',  
        success: function() { 
			$('#enableRefresh').load('apps/links/get-links.php');
       		$('#UI-result').fadeIn('fast'); 
       		setTimeout(function(){
       			$('#UI-result').fadeOut('slow'); 
       		}, 2000);
        }  
    }); */


</script>