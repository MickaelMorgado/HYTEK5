<?php 
	$sql1 = "SELECT * FROM notas WHERE id_session = $_SESSION[id_session]";
	$sql2 = "INSERT INTO `notas` (`id_session`, `content`) VALUES ('$_SESSION[id_session];', 'no content')";
?>
<h2>Notes</h2>
<form action="apps/notes/edit-note.php" method="POST">
	<textarea rows="7" cols="32" name="notetxtarea"><?php include('../../dbConnection.php'); 
		$result = mysqli_query($link,$sql1);
		if ($result->num_rows > 0) {
			while ($row = mysqli_fetch_assoc($result)) { echo $row['content']; }   
		}else{
			mysqli_query($link,$sql2);
		  	echo "no notes added";
		}
	  ?>
	</textarea>
	<input type="submit" value="edit" />
</form>