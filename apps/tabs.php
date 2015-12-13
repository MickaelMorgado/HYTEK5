<?php 
error_reporting(0);
session_start();
@include('../../dbConnection.php');
	if(isset($_SESSION['id_session'])){
		if ($_POST['keywords']!='') {
			//echo "<h1>session: $_SESSION[id_session] key:$_POST[keywords]</h1>";
			$keywords = $_POST['keywords'];
			$result = mysqli_query($link, "SELECT * FROM mytabs WHERE (url like '%$keywords%' OR title like '%$keywords%') AND id_tabs = '$_SESSION[id_session]' ORDER BY data DESC");
		}else {
			//echo "<h1>session: $_SESSION[id_session] key:$_POST[keywords]</h1>";
			$result = mysqli_query($link, "SELECT * FROM mytabs WHERE id_tabs = '$_SESSION[id_session]' ORDER BY data DESC");
		}
		if(mysqli_num_rows($result) > 0) {
			while($row = mysqli_fetch_assoc($result)){
				echo "<a href='http://$row[url]' title='$row[url]' class='aside-buttons' data-tabs-title='$row[title]' data-tabs-url='$row[url]' data-tabs-id='$row[id_tab]'>
						<span><img src='http://www.google.com/s2/favicons?domain=$row[url]' /></span>";
				if ( $row['title']=='' ) {
					$url = str_replace(array("http://", "https://", "www."), "", $row['url']);//$link = "http://$url.com";
					$string = $url;
					$parts=explode(".",$string);
					$name=$parts[0];
					//echo "$name";//$res = file_get_contents("http://designshack.net/articles/css/scrolljs/");//preg_match("~<title>(.*?)</title>~", $res, $match);//$tt = $match[1];//echo "$tt";//if($tt == ''){//echo "no found title";//}//}else{//echo "string";//}//}
					echo "<span> $name</span>" ;
				}else{
					echo "<span title='$row[title]'> $row[title]</span>";
				}
					echo "<span> $row[url]</span><span title='views'> $row[view]</span><span title='added date'> $row[data]</span>
				</a>
				" ;
			}
		}else{
			echo "<a href='http://www.google.com' title='google' class='aside-buttons' data-tabs-title='google' data-tabs-url='google' data-tabs-id='null'>
						<span><img src='http://www.google.com/s2/favicons?domain=google.com' /></span><span title='opcional title'>opcional title</span><span>url.goes.here</span><span title='number of views'># of views</span><span title='added link date'>date added</span></a>";
		}
			
	}else{
		?>
		<div class="padded">
			<h1>Not logged :(</h1>
			<h2>follow <i class="fa fa-steam"></i> news</h2>
			<!--div class="news-block first"><span><img src="https://unsplash.it/790/300/?random" alt="news-image-1"/></span></div><!--
			<div class="news-block second"><span><img src="https://unsplash.it/350/300/?random" alt="news-image-1"/></span></div><!--
			<div class="news-block second"><span><img src="https://unsplash.it/350/300/?random" alt="news-image-1"/></span></div><!--
			<div class="news-block first"><span><img src="https://unsplash.it/790/300/?random" alt="news-image-1"/></span></div-->
			<iframe src="http://store.steampowered.com/" width="100%" height="700px" frameborder="0"></iframe>
		</div>
		<?php
	}
?>