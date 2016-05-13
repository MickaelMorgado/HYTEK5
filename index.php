<!DOCTYPE html>
<html lang="en">
<head>
	<title>HYTEK - HOME</title>
	<meta name="description" content="HYTEK - web projects like bookmarks and games developped with html,css,js,php">
    <meta charset="UTF-8">
    <meta name="theme-color" content="#ffffff">
	<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
	<meta name="viewport" content="width=device-width" />
	<meta name="format-detection" content="telephone=no"/>
	<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/jquery.slick/1.3.15/slick.css"/>
	<link href="{% static "stylesheets/styles.css" %}" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" type="text/css" href="css.css"/>
	<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
	<script type="text/javascript" src="//cdn.jsdelivr.net/jquery.slick/1.3.15/slick.min.js"></script>

	<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet" />
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>

	<!--[if lt IE 9]>
	  <script type='text/javascript' src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	  <link rel="stylesheet" href="{% static 'stylesheets/ie.css' %}">
	<![endif]-->
	
	<style>
		.block {
			display: inline-block;
			width:  100%;
			height: 250px;
			overflow: hidden;
			background-repeat:no-repeat;
			background-size:cover;
			content: "";
			box-shadow: 0 0 8px 0 black;
			-webkit-transition: all .25s;
			-moz-transition: all .25s;
			transition: all .25s;
		}
		.block:hover { 
			opacity: .7; 
			box-shadow: 0 0 8px 3px black;
		}
		.container { margin: 120px auto; }
	</style>
	
</head>
<body>

<div class="container">
	<div class="row">
		<div class="col-xs-12 col-sm-6 col-md-3"><a href="ElementarY/" class="block" style="background-image:url('Elementary.png')"></a></div>
		<div class="col-xs-12 col-sm-6 col-md-3"><a href="shoot/" class="block" style="background-image:url('shoot/img/thumbnail1.png')"></a></div>
		<div class="col-xs-12 col-sm-6 col-md-3"><a href="phpeditor/" class="block" style="background-image:url('phpeditor.bmp')"></a></div>
		<div class="col-xs-12 col-sm-6 col-md-3"><a href="" class="block" style="background-image:url('hyteklogo.jpg')"></a></div>
	</div>
</div>



</body>
</html> 
