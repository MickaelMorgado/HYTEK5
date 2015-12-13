<?php 
	session_start();
	$link = mysqli_connect("localhost","root","","hytek_db"); 
	//$link = mysqli_connect("mysql.hostinger.pt","u206790186_hytek","Mickael01","u206790186_spbd");

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
	$ID_SESSION = $_SESSION['id_session'];


	function db_select($select,$from,$where,$code_file) {

		$link = mysqli_connect("localhost","root","","hytek_db");

		mysql_query("set names 'utf8'");   
		$db_select_result = mysqli_query($link, "SELECT ".$select." FROM ".$from." ".$where);
		//echo "SELECT ".$select." FROM ".$from." ".$where;
		$bg = mysqli_fetch_assoc($db_select_result);
		$bg = $bg[$select];
		include($code_file);

	}

	function db_update($update,$set,$where) {
		
		$link = mysqli_connect("localhost","root","","hytek_db");

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
