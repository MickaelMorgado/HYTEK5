<!DOCTYPE html>
<?php 
	$error_reporting = 0;
	include('dbConnection.php');
?>
<html>
<head>
	<title>HYTEK5 - Webbuilder</title>
	<meta name="theme-color" content="#224455">
	<link rel="icon" href="hyteklogo.jpg" type="image/jpg">
    <meta charset="UTF-8">
	<meta name="format-detection" content="telephone=no"/>
	<meta name="viewport" content="width=device-width" />

	<?php include('dependencies/styles.php') ?>
	<?php include('dependencies/scripts.php') ?>

	<style></style>
</head>
<body class="webbuilder">
	

	<div class="sidebar">
		<ul class="list-unstyled elems">
			<li>+</li>
			<li>element</li>
			<li>select</li>
		</ul>	
	</div>

	<textarea class="workspace"></textarea>  


</body>
<script>
	

	function select() {
		options = "<option value='ready'>ready</option><option value='load'>load</option>"
		select = "<select>"+options+"</select>"
		return select
	}
	function element() {
		options = "<option value='document'>document</option><option value='window'>window</option><option value='body'>body</option>"
		select = "<select>"+options+"</select>"
		return select
	}

	function nodeStyle(tag) {
		tag = "<div class='node-style'>"+tag+"</div>";
		return tag;
	}

	function getTag(tag) {
		switch (tag) { 
			case 'element':
				tag = element(); 
				break;
			case 'select':
				tag = select(); 
				break;
		}
		return tag;
	}

	function node(tag) {
		tag = getTag(tag);
		tag = nodeStyle(tag);
		return tag;
	}

	$('.elems li').on("click",function(){
		$('.workspace').text(node($(this).text()));
	});



</script>