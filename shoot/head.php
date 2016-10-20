<!DOCTYPE html>
<head>

	<title>SHOOTER'S</title>
	<meta name="description" content="SHOOTER'S">
    <meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
	<meta name="viewport" content="width=device-width" />
	<meta name="format-detection" content="telephone=no"/>
	<!--link href='http://fonts.googleapis.com/css?family=Satisfy' rel='stylesheet' type='text/css'-->
	<!-- Mine stuffs -->
	<link rel="stylesheet" href="stylesheets/styles.css">
	<!--Scripts-->
	<script src="js/jquery-2.1.3.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/notify/0.4.2/notify.min.js"></script>

</head><!-- DB Connection -->
<?php
/*
	session_start();
	error_reporting(0);

	$link = mysqli_connect("mysql.hostinger.pt","u206790186_shoot","Mickael01","u206790186_shoot");
	if (!$link) {
		$link = mysqli_connect("localhost","root","","shooters"); 
	}


	/* 
		function to easy select single result:
		<?php echo db_select($link,"SELECT * FROM table","ID",NULL);?>
	/
	function db_single($link,$sql,$rslt_cols,$code_file) {
		$db_select_result = mysqli_query($link,$sql);
		$sr = mysqli_fetch_assoc($db_select_result);
		$sr = $sr[$rslt_cols];
		return $sr;
		//include($code_file);
	}



	/* 
		function to easy select array of $rows:
		$select = columns you want;
		$from   = tables you want;
		$where  = where condition;
		$code_file = php file to edit results (like making a link or list with values);
	/
	function db_fetch($link,$sql,$code_file,$singleCol) {
		$db_select_result = mysqli_query($link,$sql);
		while ($row = mysqli_fetch_assoc($db_select_result)) {
			if (($code_file!='')||($code_file!=NULL)) {
				include($code_file);
			}else{
				echo $row['singleCol'];
			}
		}

	}

	/* <?php echo get($link,"selectCol","table","whereCond."); ?> /
*/
	function get($link,$col,$table,$who){
		$rslt = "select ".$col." FROM ".$table;
		if(isset($who)){ 
			$rslt = $rslt." WHERE ".$who;}
		$result = mysqli_query($link,$rslt);
		while ($row = mysqli_fetch_assoc($result)) {
			$rslt = $row[$col];
			return $rslt;
		}
	}
	include("apps/notify.php");	
?>
<script src="../dependencies/js/main.js"></script>
