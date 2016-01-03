<?php 
	session_start();
	//$link = mysqli_connect("localhost","root","","hytek_db"); 
	$link = mysqli_connect("mysql.hostinger.pt","u206790186_hytek","Mickael01","u206790186_spbd");

	$link->query('set character_set_client=utf8');
	$link->query('set character_set_connection=utf8');
	$link->query('set character_set_results=utf8');
	$link->query('set character_set_server=utf8');

	/* change character set to utf8 
	if (!$link->set_charset("utf8")) {
	    printf("Error loading character set utf8: %s\n", $link->error);
	    exit();
	} else {
	    printf("Current character set: %s\n", $link->character_set_name());
	}
	*/

	/* GLOBAL VARIABLES */

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
		use example:
			<?php db_fetch($link,'*','mytabs',NULL,'phpfunctions/fetch_example.php'); ?>
	*/
	function db_fetch($link,$select,$from,$where,$code_file) {
		$db_select_result = mysqli_query($link, "SELECT ".$select." FROM ".$from." WHERE ".$where);
		//echo "SELECT ".$select." FROM ".$from." WHERE ".$where;
		while ($row = mysqli_fetch_assoc($db_select_result)) {
			include($code_file);
			/*	
				put this in included file;
				echo $row['any_table_you_want'];
			*/
		}

	}

	/* 
		function to easy update:
		$select = columns you want;
		$from   = tables you want;
		$where  = where condition;
		$code_file = php file to edit results (like making a link or list with values);
	*/
	function db_update($link,$update,$set,$where) {
		$update_query = "UPDATE $update SET $set WHERE $where";
		echo $update_query ; 
		$db_update_result = mysqli_query($link, $update_query);
	}

	function getbg() {
		db_select("bg","settings","WHERE id_settings = '$_SESSION[id_session]'","apps/getbg.php");
	}

	function getyoutube() {
		db_select("youtubeplaylistlink","playlists","WHERE ID_session = '$_SESSION[id_session]'","apps/getyoutubelink.php");
	}

	function getspotify() {
		db_select("spotifyplaylistlink","playlists","WHERE ID_session = '$_SESSION[id_session]'","apps/getspotifylink.php");
	}

?>
