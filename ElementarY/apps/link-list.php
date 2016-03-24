<div id="UI-result"></div>

<div id="tabs">
	<div class="dropdown pull-right">
		<button href="#" type="button" id="dropdownMenuAdd" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" class="btn-search">+<span class="caret"></span></button>
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
	<form id="searchform" action="" method="GET">
		<input type="text" placeholder="Search" class="search" id="searchinput">
		<div class="toggles-search-buttons">
			<button onclick="google()" class="btn-search gg"><i class="fa fa-google"></i></button><button onclick="youtube()" class="btn-search yt"><i class="fa fa-youtube-play"></i></button>
		</div>
	</form>
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


/* Google & Youtube search buttons :
====================================
*/
	form = document.getElementById("searchform");
	
	function google() {
		$('#searchinput').attr("name","q");
		form.action="https://www.google.pt/search";
		form.submit();
	}
	
	function youtube() {
		$('#searchinput').attr("name","search_query");
		form.action="http://www.youtube.com/results";
		form.submit();
	} 





</script>