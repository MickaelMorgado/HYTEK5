<!DOCTYPE html>
<?php 
	$error_reporting = 0;
	include('dbConnection.php');
?>
<html>
<head>
	<title>ElementarY</title>
	<meta name="theme-color" content="#224455">
	<link rel="icon" href="https://lh3.googleusercontent.com/-UhiNRhND2Ac/UvtXfOIZTbI/AAAAAAAAAdo/1ZTaCtlTsOYck5ADKhFgolv2JLjridn-A/s640-no/H%2Bart%2Bchannel%2B640x640.jpg" type="image/jpg">
    <meta charset="UTF-8">
	<meta name="format-detection" content="telephone=no"/>

	<?php include('dependencies/styles.php') ?>
	<?php include('dependencies/scripts.php') ?>

	<style></style>
</head>
<body>
	<!--?php include('dependencies/phpfunctions.php') ?-->
	<div class="container-fluid">
		<div class="row masonry-container">
			<div class="col-xs-12 col-sm-6 col-md-2 item">
				<div class="element">
																			<?php include('apps/clock.php'); ?>
					<div class="glass"></div>
				</div>
				<div class="element">
																			<?php include('apps/notes.php'); ?>
					<div class="glass"></div>
				</div>	
			</div>		
			<div class="col-xs-12 col-sm-6 col-md-2 item">
				<div class="element">
																			<?php include('apps/link-list.php'); ?>
					<div class="glass"></div>
				</div>
			</div>
			<div class="col-xs-12 col-sm-6 col-md-2 item">
				<div class="element">
																			<?php include('apps/files.php'); ?>
					<div class="glass"></div>
				</div>
			</div>
			<div class="col-xs-12 col-sm-6 col-md-4 item">
				<div class="element"  style="height:300px;">
																			<?php include('apps/youtubeminiplayer.php'); ?>
					<div class="glass"></div>
				</div>
			</div>
			<div class="col-xs-12 col-sm-6 col-md-2 item">
				<div class="element">
																			<?php include('apps/cookie-login.php'); ?>
					<div class="glass"></div>
				</div>	
			</div>		
			<div class="col-xs-12 col-sm-6 col-md-2 item">
				<div class="element" style="height:150px;">
																			<?php include('apps/meteo.php'); ?>
					<div class="glass"></div>
				</div>	
			</div>		
			<div class="col-xs-12 col-sm-6 col-md-2 item">
				<div class="element">
																			<?php include('apps/shooters.php'); ?>
					<div class="glass"></div>
				</div>	
			</div>		
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<div class="dock text-center">
					<ul class="list-inline">
						<li><a href="http://gmail.com/"><img class="dock-icon" src="../img/1.png" alt=""></a></li>
						<li><a href="http://facebook.com"><img class="dock-icon" src="../img/2.png" alt=""></a></li>
						<li><a href="http://youtube.com"><img class="dock-icon" src="../img/3.png" alt=""></a></li>
						<li><a href="http://play.spotify.com/collection/songs"><img class="dock-icon" src="../img/4.png" alt=""></a></li>
						<li><a href="http://twitter.com"><img class="dock-icon" src="../img/5.png" alt=""></a></li>
						<li class="dock-aspect"><div class="glass"></div></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	
	<!--script src="http://listjs.com/no-cdn/list.js"></script-->
	<script><?php include('dependencies/js/main.js'); ?></script>
	<script>

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
		var options = { valueNames: [ 'title','url' ] };
		var userList = new List('tabs', options);
	};

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

		<?php if (!isset($_SESSION['name'])) : ?>

			$loginInput = $('#user_email');
			$loginInput.focus();
		
		<?php endif ?>
	</script>
</body>
</html> 