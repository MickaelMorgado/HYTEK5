<!DOCTYPE html>
<html>
<head>
	<title>ElementarY</title>
	<meta name="theme-color" content="#224455">
	<link rel="icon" href="https://lh3.googleusercontent.com/-UhiNRhND2Ac/UvtXfOIZTbI/AAAAAAAAAdo/1ZTaCtlTsOYck5ADKhFgolv2JLjridn-A/s640-no/H%2Bart%2Bchannel%2B640x640.jpg" type="image/jpg">
    <meta charset="UTF-8">
	<meta name="format-detection" content="telephone=no"/>
	<link href="dependencies/css/bootstrap.min.css" rel="stylesheet" />
	<link rel="stylesheet" type="text/css" href="elementary/stylesheets/styles.css"/>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	<script src="dependencies/js/jquery-2.1.3.min.js"></script>
	<script src="dependencies/js/bootstrap.min.js"></script>
	<script src="dependencies/js/list.min.js"></script>
	<script src="dependencies/js/moment.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.js" type="text/javascript"></script>
	<style></style>
</head>
<body id="bganim">

	<?php include('dbConnection.php') ?>
	<!--?php include('dependencies/phpfunctions.php') ?-->

	<?php 
		//echo $_SESSION["id_session"]; 
	?>
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-6 col-md-3">
				<div class="element">
																			<?php include('apps/clock.php'); ?>
					<div class="glass"></div>
				</div>
				<div class="element">
																			<?php include('apps/notes.php'); ?>
					<div class="glass"></div>
				</div>	
			</div>		
			<div class="col-xs-12 col-sm-6 col-md-3">
				<div class="element">
																			<?php include('apps/link-list.php'); ?>
					<div class="glass"></div>
				</div>
			</div>
			<div class="col-xs-12 col-sm-6 col-md-3">
				<div class="element">
																			<?php include('apps/files.php'); ?>
					<div class="glass"></div>
				</div>
				<div class="element">
																			<!--?php include('apps/socio.php'); ?-->
																			<?php include('apps/youtubeminiplayer.php'); ?>
					<div class="glass"></div>
				</div>
			</div>
			<div class="col-xs-12 col-sm-6 col-md-3">
				<div class="element">
																			<?php include('apps/cookie-login.php'); ?>
					<div class="glass"></div>
				</div>	
			</div>		
			<div class="col-xs-12 col-sm-6 col-md-3">
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
						<li><a href="http://gmail.com/"><img class="dock-icon" src="https://pbs.twimg.com/profile_images/638751551457103872/KN-NzuRl.png" alt=""></a></li>
						<li><a href="http://facebook.com"><img class="dock-icon" src="http://www.gmafiaagency.com.br/wp-content/uploads/2013/07/iconefacebook-300x300.png" alt=""></a></li>
						<li><a href="http://youtube.com"><img class="dock-icon" src="http://static.wixstatic.com/media/324cb8_b2f30590c6634940b2521bdf25b4906f.png" alt=""></a></li>
						<li><a href="http://play.spotify.com"><img class="dock-icon" src="http://dn-musicianguide.qbox.me/wp-content/uploads/2014/01/spotify-icon-1.jpg" alt=""></a></li>
						<li><a href="http://twitter.com"><img class="dock-icon" src="http://www.bartoliniemauri.com/img/social/twitter.jpg" alt=""></a></li>
						<li class="dock-aspect"><div class="glass"></div></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	
	<!--script src="http://listjs.com/no-cdn/list.js"></script-->
	<script>


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

	</script>


</body>
</html> 
