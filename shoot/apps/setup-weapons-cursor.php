<?php 
include('../../head.php'); 
$sql = "UPDATE `shooters`.`weapons` SET `src` = '".$_POST['oi']."' WHERE `id_player` = ".$_SESSION['id_player']."; ";
mysqli_query($link,$sql);
echo $sql;
?>