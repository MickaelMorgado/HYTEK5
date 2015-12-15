<!DOCTYPE html>
<html>
<head>
	<title>HYTEK workflow</title>
    <meta charset="UTF-8">
	<meta name="format-detection" content="telephone=no"/>
	<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/jquery.slick/1.3.15/slick.css"/>
	<link rel="stylesheet" type="text/css" href="css.css"/>
	<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
	<script type="text/javascript" src="//cdn.jsdelivr.net/jquery.slick/1.3.15/slick.min.js"></script>

	<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet" />
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
</head>
<body>
<?php 
$link = mysqli_connect("localhost","root","","hytek_db");
/* 
	function to easy select single result:
	$select = columns you want;
	$from   = tables you want;
	$where  = where condition;
	$code_file = php file to edit results (like making a link or list with values);
*/
function db_select($link,$select,$from,$where,$code_file) {
	$db_select_result = mysqli_query($link, "SELECT ".$select." FROM ".$from." ".$where);
	//echo "SELECT ".$select." FROM ".$from." ".$where;
	$sr = mysqli_fetch_assoc($db_select_result);
	$sr = $sr[$select];
	return $sr;
	//include($code_file);
}



/* 
	function to easy select array of $rows:
	$select = columns you want;
	$from   = tables you want;
	$where  = where condition;
	$code_file = php file to edit results (like making a link or list with values);
*/
function db_fetch($link,$select,$from,$where,$code_file) {
	$db_select_result = mysqli_query($link, "SELECT ".$select." FROM ".$from." ".$where);
	//echo "SELECT ".$select." FROM ".$from." ".$where;
	while ($row = mysqli_fetch_assoc($db_select_result)) {
		include($code_file);
		/*	
			put this in included file;
			echo $row['any_table_you_want'];
		*/
	}

}
?>

<div class="container">
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-12">

			<h3>calling my php functions</h3>

			<p><u>simple select:</u></p>
			<?php echo db_select($link,'title','mytabs',NULL,NULL); ?>

			<p><u>edit:</u></p>
			<form action="phpfunctions/update_example.php">
				<input type="text" name="name1" value="<?php echo db_select($link,'title','mytabs',NULL,NULL); ?>" />
				<input type="submit" />
			</form>

			<p><u>fetch select:</u></p>
			<?php db_fetch($link,'*','mytabs',NULL,'phpfunctions/fetch_example.php'); ?>

		</div>
	</div>
</div>

</body>
</html> 