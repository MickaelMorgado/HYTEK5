<!DOCTYPE html>
<html>
<head>
	<title>HYTEK workflow</title>
    <meta charset="UTF-8">
	<meta name="format-detection" content="telephone=no"/>
	<meta name="viewport" content="width=device-width" />
	<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/jquery.slick/1.3.15/slick.css"/>
	<link rel="stylesheet" type="text/css" href="css.css"/>
	<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
	<script type="text/javascript" src="//cdn.jsdelivr.net/jquery.slick/1.3.15/slick.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet" />
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
</head>
<style>
	* {
	  box-sizing: border-box;
	}

	header {
		position: fixed;
		background: rgba(6, 53, 63, 0.7) none repeat scroll 0% 0%;
		height: 55px;
		width: 100%;
		left: 0px;
		top: 0px;
		box-shadow: 0px 0px 5px -2px black;
		padding: 10px 10px;
	}
	header input {
		border: none;
		background: transparent none repeat scroll 0% 0%;
		width: 100%;
		height: 35px;
		text-transform: uppercase;
	}
	body {
		background: #333333;
		color: #fff;
		padding-top: 60px;
	}
	.wrap ul {
		padding: 0;
		-webkit-columns: 300px 2;
		-moz-columns: 300px 2;
		columns: 300px 2;
	}
	.wrap li {
		text-transform: uppercase;
		text-align: center;
		list-style: none;
	}
	.wrap li span {
		position: absolute;
		left: 0;
		width: 0;
		visibility: hidden;
	}
	.wrap li a {
		white-space: nowrap;
		overflow: hidden;
		text-overflow: ellipsis;
		color: #fff;
		padding: 0 20px;
		font-weight: lighter;
		line-height: 40px;
		background: rgb(34, 34, 34) none repeat scroll 0% 0%;
		box-shadow: 0 0 8px -3px black;
		display: block;
		margin: 10px 0px;
	}
	.modal-content {
		border-radius: 0;
		background: rgba(6, 53, 63, 0.7) none repeat scroll 0% 0%;
		text-align: center;
	}
	.fa {
		display: block;
		font-size: 60px;
		margin: 50px 0px 10px
	}
</style>
<body>
<?php 

	session_start();
	//error_reporting(0);

	include_once "phpfunctions/ez_sql_core.php";
	include_once "phpfunctions/ez_sql_mysql.php";

	//$link = new ezSQL_mysql("mysql.hostinger.pt","u206790186_hytek","Mickael01","u206790186_spbd");
	//if (!$link) {
		$link = new ezSQL_mysql("root","","hytek_db","localhost"); 
	//}

?>

<div class="container" id="users">
	<div class="row">
		<div class="col-xs-12">
			<header>
				<input type="text" placeholder="Search..." class="search" >
				<!--button class="sort" data-sort="id">Sort by id</button-->
			</header>
			<div class="wrap">
				<?php $results = $link->get_results("SELECT * FROM mytabs WHERE id_tabs = 2"); ?>
				<ul class="list">
				<?php 
					foreach ( $results as $row ) {
						?>
						<li>
							<span class="id"><?php echo $row->id_tab; ?></span>
							<span class="url"><?php echo $row->url; ?></span>
							<a data-link="<?php echo $row->url; ?>" data-title="<?php echo $row->title; ?>" class="title">
							<?php if ($row->title == ""): ?>
								<?php echo $row->url; ?>
							<?php else: ?>
								<?php echo $row->title; ?>
							<?php endif ?>
							</a>
						</li>
						<?php
					}
				?>
				</ul>
			</div>
		</div>
	</div>
</div>
<div class="modal fade laclass" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
		
			<div class='context-menu'>
				<i class='fa add fa-plus' data-cm-action='add'></i>
				<i class='fa edit fa-pencil' data-cm-action='edit'></i>
				<i class='fa rm fa-times' data-cm-action='rm'></i>
				<i class='fa imp fa-exclamation' data-cm-action='imp'></i>
				<div class='context-menu-input'></div>
			</div>

			<div class="boby">
				
			</div>
		</div>
	</div>
</div>

<script src="http://listjs.com/no-cdn/list.js"></script>
<script>
	var options = { valueNames: [ 'title', 'url' ] };
	var userList = new List('users', options);

	$('.title').on('click', function() {
		var lnk = $(this).attr('data-link');  
		var ttl = $(this).attr('data-title');  
		var $Modal = $('.laclass');    
		$Modal.modal('show');
		$('.boby').html("<a href='http://"+lnk+"'><i class='fa fa-external-link'></i>"+ttl+"</a>");
	});
</script>
</body>
</html> 