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

	if ($('.url').size()>0) {
		var options = { 
			valueNames: [
				'title',
				'url'
			],
			//plugins: [ ListFuzzySearch() ] 
		};
		var userList = new List('tabs', options);
	};

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
	$(document).on('keydown', function(e) {					/* on tab got to next link to focus him */
	    if (e.keyCode === 9 && enable === true && $("#enableRefresh").hasClass("active")) {
			if (e.shiftKey) {	shiftKeyDown = true; 	nextFocus= nextFocus - 1; } else {
					 			shiftKeyDown = false; 	nextFocus= nextFocus + 1; }
       		goNextFocus(nextFocus);
	        e.preventDefault();
	    }
	    if (e.keyCode === 27) {								/* on esc disable next focus */
	    	$('#searchinput').focus();
	    	enable = false;
	    }
	    if (e.keyCode === 18) { 	/* on alt focus search input if is empty */
	    	$('#searchinput').focus();
	    	return false;
	    }
	    //if (e.which === 17) {
	    //	toggle();
	    //};
	});

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

	$("#link-order-select").change(function(){
		var val = $(this).val();
		$('#enableRefresh').load("apps/links/get-links.php?order="+val);
		console.log(val);
	});

	function viewCount(a,b) { /* passing "id" of link and "href" */
		$.ajax({
			method: "POST",
			url: "apps/links/link-view.php",
			data: { linkid: a },
			success: function(data) {
				window.location=b;
			}
		});
	}

	$('.link-list').click(function(e){
		e.preventDefault();
		viewCount($(this).data("linkid"),$(this).attr("href"));
	});

	/* Dragable windows :
	=====================
		$(function() {
			$( ".element" ).draggable();
		});
	*/

	$(document).ready(function(){
		$('.masonry-container').masonry({
		columnWidth: '.item',
		itemSelector: '.item'
	});

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
