<?php 
if (isset($_SESSION['id_session'])) {
?>
	<form action="apps/upload.php" method="post" enctype="multipart/form-data">
	    <input type="file" name="fileToUpload" id="fileToUpload">
	    <input type="submit" value="Upload" name="submit">
	</form>
	<?php 
	$dir = "apps/uploads/";
	$dh  = opendir($dir);
	$i=0;
	while (false !== ($filename = readdir($dh))) {
		$i=$i++;
	    //$files[] = $filename;
		if ($filename != "." && $filename != "..") {
			?><a href="<?php echo "apps/uploads/".$filename; ?>"><?php
			if (preg_match('/\.jpg$/', $filename)) {					?><i aria-hidden="true" class="fa fa-picture-o" ></i><?php
			}elseif (preg_match('/\.rar$/', $filename)) {				?><i aria-hidden="true" class="fa fa-compress" ></i><?php
			}elseif (preg_match('/\.tar.gz$/', $filename)) {			?><i aria-hidden="true" class="fa fa-compress" ></i><?php
			}elseif (preg_match('/\.mp3$/', $filename)) {				?><i aria-hidden="true" class="fa fa-file-audio-o" ></i><?php
			}elseif (preg_match('/\.pdf$/', $filename)) {				?><i aria-hidden="true" class="fa fa-file-pdf-o" ></i><?php
			}else{														?><i aria-hidden="true" class="fa fa-file-text-o" ></i><?php
			}
		    echo " ".$filename."<br/>"; ?>
		    </a><a style="float:right;margin-top:-20px;color:red" href="apps/removefile.php?filename=<?php echo $filename; ?>">x</a>
		    <?php			
		}
	}
	?>
<?php 
} else { echo "need to login to see files"; }
?>
