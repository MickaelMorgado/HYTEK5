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
		OutsideElem 		= $('.padded');
		ContextElements 	= $('.tabs a');

		DN = "'display':'none'";

		function StartRestartContextmenu() {
	
			ContextMenu.css({DN});
			//console.log(":");

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
		console.log("main.js loaded on ready");
		$('.single-item').slick({
			dots: true,
			draggable: false,
		});
	});
