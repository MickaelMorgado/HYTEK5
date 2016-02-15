<script>$(document).foundation();</script>
<script>
	$(document).ready(function () {
		toggleFullScreen();
		function toggleFullScreen() {
		  if (!document.fullscreenElement &&    // alternative standard method
		      !document.mozFullScreenElement && !document.webkitFullscreenElement && !document.msFullscreenElement ) {  // current working methods
		    if (document.documentElement.requestFullscreen) {
		      document.documentElement.requestFullscreen();
		    } else if (document.documentElement.msRequestFullscreen) {
		      document.documentElement.msRequestFullscreen();
		    } else if (document.documentElement.mozRequestFullScreen) {
		      document.documentElement.mozRequestFullScreen();
		    } else if (document.documentElement.webkitRequestFullscreen) {
		      document.documentElement.webkitRequestFullscreen(Element.ALLOW_KEYBOARD_INPUT);
		    }
		  } else {
		    if (document.exitFullscreen) {
		      document.exitFullscreen();
		    } else if (document.msExitFullscreen) {
		      document.msExitFullscreen();
		    } else if (document.mozCancelFullScreen) {
		      document.mozCancelFullScreen();
		    } else if (document.webkitExitFullscreen) {
		      document.webkitExitFullscreen();
		    }
		  }
		}
	});
</script>
<script>//MENU SOUNDS/////////////////////////////////////////////////////////////////////////////////
	var menu = new Audio();
	menu.src = 'audios/robot.mp3';
	menu.play();

	var mouseover1 = new Audio();
	var mouseover2 = new Audio();
	var mouseover3 = new Audio();
	var mouseover4 = new Audio();

	mouseover1.src = 'audios/mouseover.mp3';
	mouseover2.src = 'audios/mouseover.mp3';
	mouseover3.src = 'audios/mouseover.mp3';
	mouseover4.src = 'audios/mouseover.mp3';
</script>

<script>//ACCORDION//////////////////////////////////////////////////////////////////////////////////
	$(".static-menu div.link").append("<i class='fa fa-chevron-down'></i>");
	$(function(){
		var Accordion = function(el, multiple){
	    this.el = el || {};
	    this.multiple = multiple || false;
	    var links = this.el.find('.link');
	    links.on('click', {el: this.el, multiple: this.multiple}, this.dropdown);
	};
	Accordion.prototype.dropdown = function(e) {
		var $el = e.data.el;
		$this = $(this),
	    $next = $this.next();
	    $next.slideToggle();
	    $this.parent().toggleClass('open');
	    if (!e.data.multiple){$el.find('.sub-menu').not($next).slideUp().parent().removeClass('open');}
	  	};
	  	var accordion = new Accordion($('#accordion'), false);
	});
</script>

<script>//YOURSCORE APPEAR////////////////////////////////////////////////////////////////////////////
	//$('.yourscore').toggle();$('.leaderboard').hover(function(){$('.yourscore').toggle();});
</script>

<script>//HS APPEAR///////////////////////////////////////////////////////////////////////////////////
	//$('.hs').toggle();$('#HS').click(function(){$('.hs').toggle();});
</script>

<script>//MODAL///////////////////////////////////////////////////////////////////////////////////////
	$('[href="#popup"]').click(function(e){e.preventDefault();$("body").addClass("show-popup");});
	function closePopup(){$("body").removeClass("show-popup");}
	$("#close").click(function(){closePopup();});
	$(document).keyup(function(e){if(e.keyCode==27){closePopup();}});
</script>

<script>//TABS////////////////////////////////////////////////////////////////////////////////////////
	$(function () {
		var activeIndex = $('.active-tab').index(),
		$contentlis = $('.tabs-content li'),
		$tabslis = $('.tabs li');
		// Show content of active tab on loads
		$contentlis.eq(activeIndex).show();
		$('.tabs').on('click', 'li', function (e) {
		var $current = $(e.currentTarget),
		index = $current.index();
		$tabslis.removeClass('active-tab');
		$current.addClass('active-tab');
		$contentlis.hide().eq(index).show();
		});	});
</script>

<script>
	$('.block.games').hover(function(){
		mouseover1.play();
	});
	$('.block.leaderboard').hover(function(){
		mouseover2.play();
	});
	$('.block.options').hover(function(){
		mouseover3.play();
	});
	$('.block.news').hover(function(){
		mouseover4.play();
	});
	$('#oom').click(function(){
		$("#status,#preloader").fadeIn();
		document.location.href = "games/game.php";
	});
</script>