<a href="http://<?php echo $row['url'] ?>"><span>
	<?php 
		if ($row['title'] == '') {	// IF EMPTY TITLE GET ONE BASED FROM THE LINK
			$url 	= str_replace(array("http://", "https://", "www."), "", $row['url']);//$link = "http://$url.com";
			$string = $url;
			$parts 	= explode(".",$string);
			$name 	= $parts[0];  //echo "$name";//$res = file_get_contents("http://designshack.net/articles/css/scrolljs/");//preg_match("~<title>(.*?)</title>~", $res, $match);//$tt = $match[1];//echo "$tt";//if($tt == ''){//echo "no found title";//}//}else{//echo "string";//}//}
			echo $name;
		}else{
			echo $row['title']; 
		}
	?>
</span></a>