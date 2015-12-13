<!DOCTYPE html>
<html manifest="index2.php">
<?php include("head.php"); ?>
<head>
	<title>HYTEK4</title>
    <meta charset="UTF-8">
	<meta name="format-detection" content="telephone=no"/>
	<link rel="stylesheet" href="stylesheets/font-awesome.min.css">
	<script type="text/javascript" src="javascripts/jquery-2.1.3.min.js"></script>
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
	<!--script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script-->
	<link href="stylesheets/bootstrap.min.css" rel="stylesheet" />
	<link rel="stylesheet" type="text/css" href="stylesheets/slick.css"/>
	<link rel="stylesheet" type="text/css" href="stylesheets/styles2.css"/>
	<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery.gridster/0.5.6/jquery.gridster.min.js"></script>
	<script type="text/javascript" src="javascripts/slick.min.js"></script>
	<link rel="icon" href="hyteklogo.jpg" type="image/jpg">
</head>

<?php include('apps/custom-head.php'); ?>

<body>
  


<div class="container full-height">
	<div class="row full-height">
		<div class="col-xs-12 col-sm-12 col-md-12 full-height">
			<div class="Hcontainer">

				<div class="menu">
					<div class="col-xs-12 col-sm-4 col-md-4 col-sm-offset-4">
						<form id="searchform" action="" method="GET">
							<div class="col-xs-12 text-center GYForm">
								<button onclick="youtube()" class="btn-search yt"><i class="fa fa-youtube-play"></i></button>
								<input id="searchinput" type="text" name="" placeholder="search">
								<button onclick="google()" class="btn-search gg"><i class="fa fa-google"></i></button>
							</div>
						</form>
					</div>
					<div class="col-xs-12 col-sm-4 col-md-4">
						<div class="player-controls">
							<span id="player-previous" title="previous"><i class="fa fa-fast-backward"></i></span>
							<span id="player-pause" title="pause (s)"><i class="fa fa-pause"></i></span>
							<span id="player-play" title="play (p)"><i class="fa fa-play"></i></span>
							<span id="player-next" title="next"><i class="fa fa-fast-forward"></i></span>
							<span id="player-playAt" title="go to first"><i class="fa fa-reply"></i></span>
							<span class="play-pause"></span>
							<span class="yt-time"></span>
						</div>
					</div>
				</div>

<div class="single-item">
	<div>
	<?php if(isset($_SESSION['id_session'])){ ?>

				<div class="row top-menu-offset">
					<div class="col-xs-12">
						<div class="col-xs-12 col-sm-8 col-md-8">
							<div class="tabs">
								<div id="tabs-results">
									<?php include('apps/tabs.php'); ?>
								</div>
							</div>
						</div>
						<div class="col-xs-12 col-sm-4 col-md-4">
							<h4>most important tabs :</h4>
							<ul class="list-unstyled">
								<?php include('apps/mostimportanttabs.php'); ?>
							</ul>
						</div>
					</div>
				</div>


	<?php }else{ ?>
		
				<div class="col-xs-12 top-menu-offset text-center">
					<form action="login.php" method="post" id="login-form" class="login-form">
						<input type="hidden" name="page" value="index2" />
						<input type="text" placeholder="username" name="username" id="login-username">
						<input type="password" placeholder="password" name="password" id="login-password">
						<input type="submit" class="btn fa fa-sign-in" value="" id="submit-login">
					</form>
					<a href="../login-signup-modal.php" class="aside-buttons button">
					  <i class="fa fa-server"></i>
					  <span>signup</span>
					</a>
				</div>

	<?php } ?>
	</div>






	<div>
		<div class="row top-menu-offset">
			<div class="col-xs-12">
				<div class="col-xs-12 col-sm-12 col-md-12">
					<h3>stuffs:</h3>
				</div>
				
				<?php include('apps/youtube.php'); ?>
				
				<div class="col-xs-12 col-sm-4 col-md-4">
					<?php include('apps/files.php'); ?>
				</div>
			</div>
		</div>
	</div>





	
	<div>
		  	<div class="top-menu-offset">
		  		<div class="col-xs-12 columns">

					<?php if(isset($_SESSION['id_session'])){ ?>
						
						<div class="row">
							<div class="col-xs-12 col-sm-12 col-md-12">
								<h3>settings:</h3>
							</div>
						</div>

						<div class="row">
							<div class="col-xs-12 col-sm-3 col-md-3">
								<div class="db mg">
									<i class="fa fa-picture-o"></i>
									<span>fundo :</span>
								</div>
								<input type="text" class="dib" id="bgurl" name="bgurl" placeholder="place url of image" />
								<input type="submit" class="dib" onclick="changebg()" value="change">
							</div>
							<div class="col-xs-12 col-sm-3 col-md-3">
								<div class="db mg">
									<i class="fa fa-youtube-play"></i>
									<span>mudar youtube :</span>
								</div>
								<input type="text" class="dib" id="yturl" name="yturl" placeholder="place url of src" />
								<input type="submit" class="dib" onclick="changeyt()" value="change">
							</div>
							<div class="col-xs-12 col-sm-3 col-md-3">
							  	<div class="db mg">
							  		<i class="fa fa-spotify"></i>
							  		<span>mudar spotify :</span>
							  	</div>
								<input type="text" class="dib" id="spurl" name="spurl" placeholder="place url of src" />
								<input type="submit" class="dib" onclick="changesp()" value="change">
							</div>		
							<div class="col-xs-12 col-sm-3 col-md-3">
							  	<div class="db mg">
							  		<i class="fa fa-cloud-upload"></i>
							  		<span>upload files :</span>
							  	</div>
								<form enctype="multipart/form-data" action="apps/upload.php" method="POST">
									<input name="uploaded" class="dib" type="file" placeholder="Please choose a file (max: 0.7 mb)"/>
									<input type="submit" class="dib" onclick="upload()" value="upload">
								</form> 
							</div>
						</div>

						<div class="row">
							<div class="col-xs-12 col-sm-12 col-md-12">
								<label for="select-tabs-order" class="db">tabs order : </label>
								<select name="select-tabs-order" id="select-tabs-order">
									<option value="New/Old" selected="selected">New/Old</option>
									<option value="Old/New">Old/New</option>
									<option value="A-Z">A-Z</option>
									<option value="Clicked">Clicked</option>
								</select>
							</div>
						</div>
			

					<?php } ?>

		  		</div>
		    </div>
	</div>
</div>

<div class='context-menu'>
	<i class='fa add fa-plus' data-cm-action='add'></i>
	<i class='fa edit fa-pencil' data-cm-action='edit'></i>
	<i class='fa rm fa-times' data-cm-action='rm'></i>
	<i class='fa imp fa-exclamation' data-cm-action='imp'></i>
	<div class='context-menu-input'></div>
</div>

<script type="text/javascript">
	$(document).ready(function(){
	  $('.single-item').slick({
	      dots: true,
	  });
	});
</script>



			</div>
		</div>
	</div>
</div>


</body>
</html>
<script>
	
	//YOUTUBE
		youtubeObj 				= 	$('#youtube');
		Ytdefault		 		= 	30;
		Ythover					= 	90;
		YtmaxHeight 			= 	260;

		youtubeObj.on("mouseenter", function(){		$(this).css({"height":Ythover});	});
		youtubeObj.on("mouseleave", function(){		$(this).css({"height":Ytdefault});	});

	//YOUTUBE - ON
		$("#on2").on("click", function(){
			youtubeObj.css({"height":YtmaxHeight,"margin-top":"0"});
		  	youtubeObj.on("mouseenter", function(){
				$(this).css({"height":YtmaxHeight});
			});
			youtubeObj.on("mouseleave", function(){
				$(this).css({"height":YtmaxHeight});
			});
		});

	//YOUTUBE - OFF
		$("#off2").on("click", function(){
		  youtubeObj.css({"height":Ytdefault});
		  youtubeObj.on("mouseenter", function(){
		  	$(this).css({"height":Ythover});
		  });
		  youtubeObj.on("mouseleave", function(){
		  	$(this).css({"height":Ytdefault});
		  });
		});

/*=================================================================================================*/
/*=================================================================================================*/

	// SEARCH FILTER	
		(function ($) {	  // custom css expression for a case-insensitive contains()
		  jQuery.expr[':'].Contains = function(a,i,m){
		      return (a.textContent || a.innerText || "").toUpperCase().indexOf(m[3].toUpperCase())>=0;
		  };

		  function listFilter(input , list) { // header is any element, list is an unordered list // create and add the filter form to the header

		    input.change( function () {
		        var filter = $(this).val();
		        if(filter) {	          // this finds all links in a list that contain the input,// and hide the ones not containing the input while showing the ones that do
		          $(list).find("span:not(:Contains(" + filter + "))").parent().hide();
		          $(list).find("span:Contains(" + filter + ")").parent().show();
		        } else {
		          $(list).find("a").slideDown();
		        }
		        return false;
	      	}).keyup( function () {	        // fire the above change event after every letter
		        $(this).change();
		    });
		  }

		  //ondomready
		  $(function () {
		  	input = $('#searchinput');
		  	list = $('.tabs');
		    listFilter(input , list);
		  });
		}(jQuery));

/*=================================================================================================*/
/*=================================================================================================*/

		// CONTEXT MENU
		ContextMenu 		= $('.context-menu');
		OutsideElem 		= $('.menu');
		ContextElements 	= $('.tabs .aside-buttons');

		DN = "'display':'none'";

		function StartRestartContextmenu() {
	
			ContextMenu.css({DN});
			console.log(":");

			// RIGHT CLICK TO CONTEXT MENU APPEARS
			ContextElements.on("contextmenu",function(e){
				ContextMenu.css({"display":"block","left":e.pageX+"px","top":e.pageY+"px"});
					
				// automatic highlight link (green border)
				$('.aside-buttons').removeClass('options');		// if exist remove all before highlight the next one
		        $(this).addClass("options");					// highlight the next one

		        var tabId 			= $(this).data('tabs-id');
		    	var tabUrl 			= $(this).data('tabs-url');
		    	var tabTitle 		= $(this).data('tabs-title');   
		    	var tabImportant 	= $(this).data('tabs-important');   
		    	/*
		    	console.log("the id is: "+tabId);    	
		    	console.log("the url is: "+tabUrl);    	
		    	console.log("the title is: "+tabTitle);
		    	*/
		    	var inputs = "<div class='addlink-for-context context-inputs'><input type='text' id='add-url' placeholder='url' /><input type='text' id='add-title' placeholder='title' /><input type='submit' value='add' onclick='addsubmit("+tabImportant+")' /></div><div class='editlink-for-context context-inputs'><input type='text' value='"+tabUrl+"' title='url' id='edit-url' /><input type='text' value='"+tabTitle+"' title='title' id='edit-title' /><input type='submit' value='edit' onclick='editsubmit("+tabId+","+tabImportant+")' /></div><div class='removelink-for-context context-inputs'><input type='submit' value='remove' onclick='removesubmit("+tabId+","+tabImportant+")' /></div><div class='importantlink-for-context context-inputs'>	<input type='submit' value='important' /></div>";
		    	$('.context-menu-input').html(inputs);
		        return false;
		    });

			// REMOVE CONTEXT MENU ON CLICK OUTSIDE
			OutsideElem.click(function(){
				ContextMenu.hide();
				$('.aside-buttons').removeClass('options');		// if exist remove all link highlight
			});

			// TOGGLE CONTEXT ACTIONS FORMS 
		    $('.context-menu .fa').click(function(){
		    	$('.context-menu .fa , .context-menu-input').removeClass('active');
		    	$(this).addClass('active');
		    	$tabUrl 		= $(this).data('tabs-url');
		    	$tabTitle 		= $(this).data('tabs-title');
		    	$tabImportant 	= $(this).data('tabs-important');
					
		    	switch ($(this).data('cm-action')) {
		    		case 'add': 
						$('.context-inputs').removeClass('show');
						$('.addlink-for-context').addClass('show');
						break;
		    		case 'edit':
						$('.context-inputs').removeClass('show');
						$('.editlink-for-context').addClass('show');
						break;
		    		case 'rm':  
						$('.context-inputs').removeClass('show');
						$('.removelink-for-context').addClass('show');
						break;
		    		case 'imp': 
						$('.context-inputs').removeClass('show');
						$('.importantlink-for-context').addClass('show');
						break;
		    		default:    
						$('.addlink-for-context').addClass('show');
						break;
		    	}
		    });

		} // END OF CONTEXT MENU


	// TOGGLE ACTION FORM BETWEEN GOOGLE / YOUTUBE
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

	//APPS
		function changebg() {
			var bgurl = ""+$('#bgurl').val();
	    	$.post('apps/changebg.php', {'bgurl':bgurl}, function(data) { 
				$("style").load('apps/custom-head.php'); 
			});
		}	

		function changeyt() {
			var yturl = ""+$('#yturl').val();
	    	$.post('apps/changeyt.php', {'yturl':yturl}, function(data) { 
				location.reload();
			});
		}

		function changesp() {
			var spurl = ""+$('#spurl').val();
	    	$.post('apps/changesp.php', {'spurl':spurl}, function(data) { 
				location.reload();
			});
		}

	    function addsubmit(imp){
	    	var url = ""+$('#add-url').val();
	    	var title = ""+$('#add-title').val();
	    	$.post('apps/addtab.php', {'url':url,'title':title,'imp':imp}, function(data) { 
				$("header").load('apps/mostimportanttabs.php'); 
				$("#tabs-results").load('apps/tabs.php'); 
			});
			setTimeout(StartRestartContextmenu, 500);
	    }

	    function editsubmit(id,imp){
	    	var url = ""+$('#edit-url').val();
	    	var title = ""+$('#edit-title').val();
	    	$.post('apps/edittab.php', {'id':id,'url':url,'title':title,'imp':imp}, function(data) { 
				$("header").load('apps/mostimportanttabs.php');
				$("#tabs-results").load('apps/tabs.php'); 
			});
			setTimeout(StartRestartContextmenu, 500);
	    }

	    function removesubmit(tabId,imp){
	    	$.post('apps/rmtab.php', {'tabId':tabId,'imp':imp}, function(data) { 
				$("header").load('apps/mostimportanttabs.php');
				$("#tabs-results").load('apps/tabs.php'); 
			});
			setTimeout(StartRestartContextmenu, 500);
	    }

	    function upload(e) {
	    	var data = new FormData(this);
			$.ajax({
				url: "apps/upload.php", // Url to which the request is send
				type: "POST",             // Type of request to be send, called as method
				data: data, // Data sent to server, a set of key/value pairs (i.e. form fields and values)
				contentType: false,       // The content type used when sending data to the server.
				cache: false,             // To unable request pages to be cached
				processData:false,        // To send DOMDocument or non processed data file it is set to false
				success: function(data)   // A function to be called if request succeeds
				{
					alert("boby");
					$('#loading').hide();
					$("body").append(data);
				}
			});
	    }

	//ON READY
		$(document).ready(function () {
			StartRestartContextmenu();	
			$('#searchinput').focus();		
			$('#login-username').focus();
		});

</script>