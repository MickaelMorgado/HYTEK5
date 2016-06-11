<?php 
unlink("uploads/".$_GET['filename']);
echo $_GET['filename']." removed sucessfully!";
?>