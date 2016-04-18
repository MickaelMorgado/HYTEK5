<!--http://php.about.com/od/advancedphp/ss/php_file_upload_3.htm#step-heading-->
<?php 

	require_once("../dbConnection.php");

 $target = "../../HYTEK3/downloads/"; 
 $target = $target . basename( $_FILES['uploaded']['name']) ; 
 $uploaded_type = $_FILES['uploaded']['type'];
 $uploaded_size = $_FILES['uploaded']['size'];
 $ok=1; 
 
 //This is our size condition 
 if ($uploaded_size > 700000) 
 { 
 echo "Your file is too large.<br>"; 
 $ok=0; 
 } 
 
 //This is our limit file type condition 
 if ($uploaded_type == "text/php") { 
	echo "No PHP files<br>"; 
	$ok=0; 
 } 
 
 //Here we check that $ok was not set to 0 by an error 
 if ($ok==0) { 
 	echo "Sorry your file was not uploaded"; 
 }   //If everything is ok we try to upload it 
 elseif ($ok==2) {echo "file type not allowed";} 
 else { 
	 if(move_uploaded_file($_FILES['uploaded']['tmp_name'], $target))  { 
	 	$name_file = basename( $_FILES['uploaded']['name']);
	 	echo "The file ". $name_file . " has been uploaded into $target/";
		mysqli_query($link, "INSERT INTO files VALUES (NULL,'$_SESSION[id_session]','$name_file','$target')");
		//header('location: index.php?file=added&#indexnotes');
	 } else { 
		//header('location: index.php?file=problem&#indexnotes');
	 } 
 } 
 ?>
 <!--?php echo "Not work yet !!"; ?-->