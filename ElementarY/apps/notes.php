<h2>Notes</h2>
<form action="apps/notes/edit-note.php" method="POST">
<textarea rows="7" cols="32" name="notetxtarea"><?php include('../../dbConnection.php'); $sql = "SELECT * FROM notes WHERE id_session = $_SESSION[id_session]";
$result = mysqli_query($link,$sql);
if ($result->num_rows > 0) {
  while ($row = mysqli_fetch_assoc($result)) {
    echo $row['content'];
  }   
}else{
  echo "no notes added";
}
  ?>
  </textarea>
  <input type="submit" value="edit" />
</form>