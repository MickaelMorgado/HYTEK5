	/* animate bg color
		$(document).ready(function(){
			bgr();
			function bgr() {
				var color = '#'+(Math.random()*0xFFFFFF<<0).toString(16);
				$('html head style').html("body{background:"+color+"}.clock,.link-list{color:"+color+"}");
				//console.log(color);
			}
			setInterval(function(){
				bgr();
			},5000);
		});
	*/

	$('#searchinput').on("input",function(){
		if ($(this).val() == '') {
			$('#tabs .list').removeClass("active");
		}else{
			$('#tabs .list').addClass("active");
		};
	});

/* Tab focus link :
====================================
*/
	var nextFocus = 0;
	var enable = true;

	function goNextFocus(nf) {
		$('#enableRefresh li:nth-child('+nf+') a').focus();
	}

	$('#searchinput').on('keyup', function(){ nextFocus = 0; }); /* reset next focus on writing in input */

	//var a = false ;
	//function toggle(){
	//	if (a == true) { a = false;
	//		$('a.link-list').prop('target','_blank');
	//	}else if (a == false){ a = true;
	//		$('a.link-list').prop('target','');
	//	}
	//}
	

/* Google & Youtube search buttons :
====================================
*/
	form = $("#searchform");
	
	function google(e) {
		$(location).attr('href','https://www.google.com/search?q='+e);
	}
	
	function youtube(e) {
		$(location).attr('href','https://www.youtube.com/results?search_query='+e);
	} 

	$("#link-order-select").change(function(){
		var val = $(this).val();
		$.ajax({
			method: "POST",
			url: "apps/links/setup-ordering.php",
			data: { order:val },
			success: function(data) {
				//$.notify(data);
			}
		});
		$('#enableRefresh').load("apps/links/link-list.php?order="+val);
		console.log(val);
	});

	function viewCount(a,b,c) { /* passing "id" of link and "href" and current date */
		$.ajax({
			method: "POST",
			url: "apps/links/link-view.php",
			data: { linkid: a, date: c },
			//success: function(data) {
			//	window.location=b;
				//$.notify(data);
			//}
		});
	}

	$('.link-list').click(function(e){
		//e.preventDefault();
		var lastview = moment().format('YYYY-MM-DD HH:mm:ss');
		viewCount($(this).data("linkid"),$(this).attr("href"),lastview);
	});

	/* Dragable windows :
	=====================
		$(function() {
			$( ".element" ).draggable();
		});
	*/

	$(document).ready(function(){
		/*$('.masonry-container').masonry({
			columnWidth: '.item',
			itemSelector: '.item'
		});*/
		$("img.lazy").lazyload({ effect : "fadeIn",container: $("#YTlist")});
		$("img.lazy2").lazyload({ effect : "fadeIn",container: $(".wallpapers-form")});
		$('#enableRefresh').height($(window).height()-55);
	});
	$(window).load(function(){
		$('.preloader').fadeOut(1000);
	});

$("#menu-close").click(function(e) {
  e.preventDefault();
  $("#sidebar-wrapper").toggleClass("active");
});
$("#menu-toggle").click(function(e) {
  e.preventDefault();
  $("#sidebar-wrapper").toggleClass("active");
});


/* Copy to clipboard
====================
*/

	function modalsetyoutubeid(val) {
		$('.modal.copiedtoclipboard .txt').val("http://www.youtube.com/watch?v="+val);
	}

	function copyButton() {
		var copy_btn;
		copy_btn = document.querySelector('.ctc');
		return copy_btn.addEventListener('click', function (event) {
		    var err, msg, successful, text;
		    text = document.querySelector('.txt');
		    text.select();
		    try {
		        successful = document.execCommand('copy');
		        msg = successful ? 'successful' : 'unsuccessful';
		        return console.log('Copy command was ' + msg);
		    } catch (_error) {
		        err = _error;
		        return console.log('Oops, unable to copy');
		    }
		});
	}

	(function () {
	    window.onload = function () {
	    	if ($('.ctc').length > 0) {	copyButton(); }
	    };
	}.call(this));

/* Color picker for settings 
============================
*/
	function update(jscolor) {
	    // 'jscolor' instance can be used as a string
	    document.getElementById('rect').style.backgroundColor = '#' + jscolor
	}


/*============================================================
    CUSTOME FILE STYLES
============================================================*/	

	$('input[type="file"]').on('change',function(){
		var val = $(this).val();
	  	$(this)
	  		.next()
	  		.addClass('has-file')
	  		.text(val+" was uploaded");
	});

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