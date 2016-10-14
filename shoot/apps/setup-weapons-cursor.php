<?php 
include('../../head.php'); 
$sql = "UPDATE `shooters`.`weapons` SET `src` = '".$_POST['oi']."' WHERE `id_session` = ".$_SESSION['id_session']."; ";
mysqli_query($link,$sql);
echo $sql;
?>