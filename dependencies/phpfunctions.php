<?php 
	include('dbConnection.php');
	if (isset($link)) {
		/* 
			function to easy select array of $rows:
			$select = columns you want;
			$from   = tables you want;
			$where  = where condition;
			$code_file = php file to edit results (like making a link or list with values);
			
			<?php db_fetch($link,'*','table',NULL,'this'); ?>
			
			use example:
				<?php db_fetch($link,'*','pages',NULL,NULL); ?>
		*/
		function db_fetch($link,$select,$from,$where,$code_file) {
			//echo "link:".$link;
			//echo "s:".$select." |f: ".$from." |w: ".$where." |c: ".$code_file;
			if ($where == ''||$where == NULL) {	$db_select_result = mysqli_query($link, "SELECT ".$select." FROM ".$from);
			}else{								$db_select_result = mysqli_query($link, "SELECT ".$select." FROM ".$from." WHERE ".$where);
			}
			//echo "SELECT ".$select." FROM ".$from." WHERE ".$where;
			while ($row = mysqli_fetch_assoc($db_select_result)) {
				if ($code_file == '') {
					include('phpfunctions/fetch_example.php');
				}elseif($code_file == 'this'){
					echo $row['id_tab'];
				}else{
					include($code_file);
				}
				/*	
					put this in included file;
					echo $row['any_table_you_want'];
				*/
			}
		}

	}else{ ?><p class="bg-warning">Connection variable not defined or get some errors</p><?php }
?>