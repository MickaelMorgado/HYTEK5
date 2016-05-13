<?php 

	$dbhost = "localhost";
	$dbuser = "root";
	$dbpswd = "";
	$dbname = "test";

	$link = mysqli_connect($dbhost,$dbuser,$dbpswd,$dbname);






	/* GLOBAL VARIABLES */

	/* 
		function to easy select single result:
		$select = columns you want;
		$from   = tables you want;
		$where  = where condition;
		$code_file = php file to edit results (like making a link or list with values);
	function db_select($link,$select,$from,$where,$code_file) {
		$db_select_result = mysqli_query($link, "SELECT ".$select." FROM ".$from." ".$where);
		//echo "SELECT ".$select." FROM ".$from." ".$where;
		$sr = mysqli_fetch_assoc($db_select_result);
		$sr = $sr[$select];
		return $sr;
		//include($code_file);
	}
	*/

	/* 
		function to easy select array of $rows:
		$select = columns you want;
		$from   = tables you want;
		$where  = where condition;
		$code_file = php file to edit results (like making a link or list with values);
		use example:
			<?php db_fetch($link,'*','mytabs',NULL,'phpfunctions/fetch_example.php'); ?>
	*/
			/*
	function db_fetch($link,$select,$from,$where,$code_file) {
		$db_select_result = mysqli_query($link, "SELECT ".$select." FROM ".$from." WHERE ".$where);
		//echo "SELECT ".$select." FROM ".$from." WHERE ".$where;
		while ($row = mysqli_fetch_assoc($db_select_result)) {
			include($code_file);
			/*	
				put this in included file;
				echo $row['any_table_you_want'];
		}

	}
			*/

	/* 
		function to easy update:
		$select = columns you want;
		$from   = tables you want;
		$where  = where condition;
		$code_file = php file to edit results (like making a link or list with values);
	function db_update($link,$update,$set,$where) {
		$update_query = "UPDATE $update SET $set WHERE $where";
		echo $update_query ; 
		$db_update_result = mysqli_query($link, $update_query);
	}
	*/

	
?>