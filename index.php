<!DOCTYPE html>
<html>
<?php include("head.php"); ?>
<head>
	<title>HYTEK4</title>
    <meta charset="UTF-8">
	<meta name="format-detection" content="telephone=no"/>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
	<!--script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script-->
	<link rel="stylesheet" type="text/css" href="stylesheets/styles.css"/>
</head>

<?php include('apps/custom-head.php'); ?>

<body>
  <header>
	<?php include('apps/mostimportanttabs.php'); ?>
  </header>

  <aside>
  	<?php if(isset($_SESSION['id_session'])){ ?>
		    <a href="#" class="aside-buttons button">
				<i class="fa fa-picture-o"></i>
				<span>fundo :</span>
		    </a>
		    <div class="double-divider">
		    	<div>	<input type="text" id="bgurl" name="bgurl" placeholder="place url of image" />		    	</div>
		    	<div>	<input type="submit" onclick="changebg()" value="change">		    	</div>
		    </div>
		    
		    <a href="#" class="aside-buttons button">
				<i class="fa fa-youtube-play"></i>
	      		<span>mudar youtube :</span>
		    </a>
		    <div class="double-divider">
		    	<div>	<input type="text" id="yturl" name="yturl" placeholder="place url of src" />		    	</div>
		    	<div>	<input type="submit" onclick="changeyt()" value="change">		    	</div>
		    </div>

		    <a href="#" class="aside-buttons button">
		      	<i class="fa fa-spotify"></i>
		      	<span>mudar spotify :</span>
		    </a>
		    <div class="double-divider">
		    	<div>	<input type="text" id="spurl" name="spurl" placeholder="place url of src" />		    	</div>
		    	<div>	<input type="submit" onclick="changesp()" value="change">		    	</div>
		    </div>

		    <a href="#" class="aside-buttons button not-yet">
		      	<i class="fa fa-cloud-upload"></i>
		      	<span>upload files :</span>
		    </a>
		    <form enctype="multipart/form-data" action="apps/upload.php" method="POST">
		      	<div class="double-divider">
		    		<div>	<input name="uploaded" type="file" placeholder="Please choose a file (max: 0.7 mb)"/>		    	</div>
		    		<div>	<input type="submit" onclick="upload()" value="upload">		    	</div>
		   		</div>
            </form> 
    <?php } ?>
    
    <a href="#" class="aside-buttons button not-yet">
      <i class="fa fa-newspaper-o"></i>
      <span>news</span>
    </a>
    <a href="#" id="help" class="aside-buttons button">
      <i class="fa fa-question"></i>
      <span>help</span>
    </a>
    <?php 
	    if(isset($_SESSION['id_session'])){ ?>
		    <a href="#" class="aside-buttons button not-yet">
		      <i class="fa fa-user"></i>
		      <span>account</span>
		    </a>
		    <a href="logout.php" class="aside-buttons button">
		      <i class="fa fa-sign-out"></i>
		      <span>log out</span>
		    </a>
		    <?php
	    }else{
			?>
			<form action="login.php" method="post" id="login-form" class="login-form">
				<div class="left">
					<input type="text" placeholder="username" name="username" id="login-username">
					<input type="password" placeholder="password" name="password" id="login-password">
				</div><div class="right">
					<input type="submit" class="fa fa-sign-in" value="" id="submit-login">
				</div>
			</form>
			<a href="../login-signup-modal.php" class="aside-buttons button">
			  <i class="fa fa-server"></i>
			  <span>signup</span>
			</a>
			<?php
	    } 
    ?>
  </aside>
  




  <main>
  	<div class="container">
  		<div class="row shearches">
  			<div class="col-xs-12 col-sm-6">
  				<form id="google-form" method="get" action="https://www.google.pt/search">
  					<input name="sitesearch" value="" type="hidden">
  					<div class="search-input">
  						<input id="googlesearchinput" class="inputblue no-margin-bottom" name="q" size="25" maxlength="255" placeholder="Search" onfocus="if(this.value==this.defaultValue)this.value=" ';="" this.style.color="black" ;'="" onblur="if(this.value==" ')this.value="this.defaultValue;" '="" type="text">
  					</div><div class="search-button">
  						<input value="Find" class="button no-margin-bottom search-button" type="submit">
  					</div>
  				</form>
  			</div>
  			<div class="col-xs-12 col-sm-6">
  				<form id="vb_yt_search-form" action="http://www.youtube.com/results" method="get" target="_blank">
  					<div class="search-input">
  						<input id="vb_yt_search-term" class="inputblue no-margin-bottom search-input" name="search_query" type="text" maxlength="128" placeholder="Youtube search" />
  					</div><div class="search-button">
  						<input type="submit" class="button no-margin-bottom search-button" value="youtube" />
  					</div>
  				</form>
  			</div>
  		</div>
		<div class="row full-height">
			<section class="col-xs-12 col-sm-8">
			  <div class="tabs">
			
						<div id="tabs-results" class="block">
							<?php include('apps/tabs.php'); ?>
						</div>
			  
						<div class='context-menu'>
							<i class='fa add fa-plus' data-cm-action='add'></i>
							<i class='fa edit fa-pencil' data-cm-action='edit'></i>
							<i class='fa rm fa-times' data-cm-action='rm'></i>
							<i class='fa imp fa-exclamation' data-cm-action='imp'></i>
							<div class='context-menu-input'></div>
						</div>
			
			  </div>
			</section><!--
			--><section class="col-xs-12 col-sm-4">
			  <div class="tabs">
			    <div class="block padded searches">
			
						<?php
							if (isset($_SESSION['id_session'])) {
								$result = mysqli_query($link, "SELECT * FROM playlists WHERE id_session = $_SESSION[id_session]");
								while($row=mysqli_fetch_assoc($result)){
									$ytb = "".$row['youtubeplaylistlink']."&color=white&controls=2&iv_load_policy=3&showinfo=1&enablejsapi";
									$spt = "".$row['spotifyplaylistlink'];
									echo "<br/>";
									?>
										<div class='over2'>DISPLAY - PLAYLIST
										  	<span id='off2'>off</span>
										  	<span id='on2'>on</span>
										  	<?php echo "<iframe id='youtube' width='100%' height='30px' src='$ytb' frameborder='0' allowfullscreen></iframe>"; ?>
										</div>
									<?php
									echo "<br/><a href=".$spt." target='_blank' class='sp'>Go to your <img src='http://www.google.com/s2/favicons?domain=play.spotify.com/'> playlist</a><hr/>";
								}
							}
						?>
					    <h4>files :</h4>
					    <ul>
					    <?php
			         $result = mysqli_query($link, "SELECT * FROM files WHERE id_session = $_SESSION[id_session]");
			         while($row=mysqli_fetch_assoc($result)){
			          echo "<li><a href='../HYTEK3/$row[path_file]'>$row[name_file]</a></li>";
			         }
			      ?>
					    </ul>
			    </div>
			  </div>
			</section>
		</div>
    </div>
  </main>


<!--input type='text' id='add-url' placeholder='url' value="test" /><input type='text' id='add-title' placeholder='title' /><input type='submit' value='add' onclick='addsubmit()' /-->
<span id="add-urlLabel"></span>

	<div class="popup">
		<div class="popup-div">
			popup
		</div>
	</div>
  

</body>
<script>


	$("#add-url").keyup(function(){
	   var addurl = ""+$("#add-url").val();
	   console.log("yey");
	   $("#add-urlLabel").text(addurl);
	});

//DROPDOWN
	$('.dropdown').click(function () {
		$(this).toggleClass('active');
	});

//YOUTUBE
	$('#youtube').on("mouseenter", function(){		$(this).css({"height":90});	});
	$('#youtube').on("mouseleave", function(){		$(this).css({"height":5});	});

		//ON
		$("#on2").on("click", function(){
			$("#youtube").css({"height":260,"margin-top":"0"});
		  	$('#youtube').on("mouseenter", function(){
				$(this).css({"height":260});
			});
			$('#youtube').on("mouseleave", function(){
				$(this).css({"height":260});
			});
		});
		//OFF
		$("#off2").on("click", function(){
		  $("#youtube").css({"height":5});
		  $('#youtube').on("mouseenter", function(){
		  	$(this).css({"height":90});
		  });
		  $('#youtube').on("mouseleave", function(){
		  	$(this).css({"height":5});
		  });
		});

	/*=================================================================================================*/
	/*=================================================================================================*/
	
	(function ($) {	  // custom css expression for a case-insensitive contains()
	  jQuery.expr[':'].Contains = function(a,i,m){
	      return (a.textContent || a.innerText || "").toUpperCase().indexOf(m[3].toUpperCase())>=0;
	  };

	  function listFilter(header, list) { // header is any element, list is an unordered list // create and add the filter form to the header
	    var form = $("#google-form .search-input").attr({"class":"filterform search-input"}),
	        input = $("#googlesearchinput").attr({"class":"filterinput search-input","type":"text"});
	    $(form).prepend(input).prependTo(header);

	    $(input).change( function () {
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
	    listFilter($(".searches #google-form"), $("#tabs-results"));
	  });
	}(jQuery));

	/*=================================================================================================*/
	/*=================================================================================================*/





//HOVER SHOW HELPS
	$('#help').mouseenter(function () {	$('.help-number').fadeIn();	 });
	$('#help').mouseleave(function () {	$('.help-number').fadeOut(); });

//CONTEXT MENU
	function StartRestartContextmenu() {
		$('.context-menu').css({"display":"none"});

		$('.main-section:nth-child(2),header,aside').click(function(){
			$('.context-menu').css({"display":"none"});
			$('.aside-buttons').removeClass('options');
		});

		$('.tabs .aside-buttons,header .aside-buttons').on("contextmenu",function(e){
			$('.context-menu').css({"display":"block","left":e.pageX+"px","top":e.pageY+"px"});
				
				// For highlight the button (green border)
			$('.aside-buttons').removeClass('options');
	        $(this).addClass("options");

	        var tabId = $(this).data('tabs-id');
	    	var tabUrl = $(this).data('tabs-url');
	    	var tabTitle = $(this).data('tabs-title');   
	    	var tabImportant = $(this).data('tabs-important');   
	    	 	//console.log("the id is: "+tabId);    	//console.log("the url is: "+tabUrl);    	//console.log("the title is: "+tabTitle);
	    	var inputs = "<div class='addlink-for-context context-inputs'><input type='text' id='add-url' placeholder='url' /><input type='text' id='add-title' placeholder='title' /><input type='submit' value='add' onclick='addsubmit("+tabImportant+")' /></div><div class='editlink-for-context context-inputs'><input type='text' value='"+tabUrl+"' title='url' id='edit-url' /><input type='text' value='"+tabTitle+"' title='title' id='edit-title' /><input type='submit' value='edit' onclick='editsubmit("+tabId+","+tabImportant+")' /></div><div class='removelink-for-context context-inputs'><input type='submit' value='remove' onclick='removesubmit("+tabId+","+tabImportant+")' /></div><div class='importantlink-for-context context-inputs'>	<input type='submit' value='important' /></div>";
	    	$('.context-menu-input').html(inputs);
	        return false;
	    });

	    $('.context-menu .fa').click(function(){
	    	$('.context-menu .fa , .context-menu-input').removeClass('active');
	    	$(this).addClass('active');
	    	$tabUrl = $(this).data('tabs-url');
	    	$tabTitle = $(this).data('tabs-title');
	    	$tabImportant = $(this).data('tabs-important');
				
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
			//$("body").load('apps/custom-head.php'); 
			location.reload();
		});
	}

	function changesp() {
		var spurl = ""+$('#spurl').val();
    	$.post('apps/changesp.php', {'spurl':spurl}, function(data) { 
			//$("body").load('apps/custom-head.php'); 
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
		$('#googlesearchinput').focus();		
		$('#login-username').focus();
	});
	
</script>
</html> 
<!-- 
	//LOGIN
	//$(function () {
    //     $('#login-form').on('submit', function (e) {
    //       e.preventDefault();
    //       alert("$('#login-form').serialize(): "+$('#login-form').serialize());
    //       $.ajax({
    //         type: 'post',
    //         url: 'login.php',
    //         data: $('#login-form').serialize(),
    //         success: function (data) {
				// $('body').append(''+data);
    //         }
    //       });

    //     });

   //  $("#submit-login").click(function(){
	  //   var username = $("#login-username").val();
	  //   var password = $("#login-password").val();	    // Returns successful data submission message when the entered information is stored in database.
	  //   $.post('login.php', {'username':username,'password':password}, function(data) { 
			// //alert("reload");
			// //$("#tabs-results").load('apps/tabs.php'); 
			// //$( "#tabs-results" ).load( "test.php", {'username':username,'password':password } );
			// $("body").append(data); 
			// header('Refresh: 1; url=index.php');
	  //   });
	  //   	alert("alert");
   //  });

//});
-->