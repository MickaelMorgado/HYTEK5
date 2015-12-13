<?php
error_reporting(0);
session_start();
@include('../../dbConnection.php');
	if(isset($_SESSION['id_session'])){
		$result = mysqli_query($link, "SELECT * FROM mostimportant WHERE id_most = $_SESSION[id_session]");
		while($row=mysqli_fetch_assoc($result)){
			//echo "<a href='http://$row[url]' title='$row[url]' class='aside-buttons'>
				//<span><img src='http://www.google.com/s2/favicons?domain=$row[url]' onError=this.src='http://www.google.com/s2/favicons?domain=google' /></span>";
			if ( $row['title']=='' ) {
				$url = str_replace(array("http://", "https://", "www."), "", $row['url']);//$link = "http://$url.com";
				$string = $url;
				$parts=explode(".",$string);
				$name=$parts[0]; //echo "$name";//$res = file_get_contents("http://designshack.net/articles/css/scrolljs/");//preg_match("~<title>(.*?)</title>~", $res, $match);//$tt = $match[1];//echo "$tt";//if($tt == ''){//echo "no found title";//}//}else{//echo "string";//}//}
				echo "<li><a href='http://$row[url]' title='$row[url]' data-tabs-title='$row[title]' data-tabs-url='$row[url]' data-tabs-id='$row[id_mostimportant]' data-tabs-important='1'>
				<span class='ico-link'><img src='http://www.google.com/s2/favicons?domain=$row[url]' /></span><span>$name</span>" ;
			}else{
				echo "<li><a href='http://$row[url]' title='$row[url]' data-tabs-title='$row[title]' data-tabs-url='$row[url]' data-tabs-id='$row[id_mostimportant]' data-tabs-important='1'>
				<span class='ico-link'><img src='http://www.google.com/s2/favicons?domain=$row[url]' /></span><span>$row[title]</span>";
			}
			echo "<div class='help-number'></div></a></li>" ;
		}
	}else{
		echo "not logged";
	}
?>
<!--
onError=this.src='http://www.google.com/s2/favicons?domain=google'
-->