<?php 
	include('../../dbConnection.php');

	$sql = "SELECT * FROM playlists WHERE `ID_session` = $_SESSION[id_session] ORDER BY id_playlist DESC";
	$result = mysqli_query($link,$sql);
	$i = 0;
	$fullarray = "";

	if ($result->num_rows > 0) {
		while ($row = mysqli_fetch_assoc($result)) {
			?>
			<form action="apps/youtube/rm-link.php" method="POST" class="pull-right">
				<input type="hidden" name="rm-id" value="<?php echo $row['id_playlist'];?>">
				<input type="submit" value="x" class="youtube-list-rm-button">
			</form>
			<!-- !!! NAO separar a linha abaixo por que ta a ir buscar o texto via js examplo id = "aaaaaa" se separar pode ficar id ="      aaaaaaa     " e perde-se o id -->
			<a class='playlistlink' title='dataOrder=<?php echo $i; ?>' onclick='player.loadVideoById("<?php echo $row['youtubeplaylistlink']; ?>");dataOrder=<?php echo $i; ?>' data-order="<?php echo $i; ?>"><img class="youtube-list-thumbnail" src="http://i1.ytimg.com/vi/<?php echo $row['youtubeplaylistlink']; ?>/default.jpg"><?php echo $row['youtubeplaylistlink']; ?></a>
			
			<button type="button" class="pull-right yt-cp2clpbrd" data-toggle="modal" data-target=".copiedtoclipboard" onclick="modalsetyoutubeid('<?php echo $row[youtubeplaylistlink]; ?>')">D</button>
			<br/>
			<?php
			if ($i>=1) {
				$separate = ",";
			}else{
				$separate = "";
			}
			$i = $i+1;
			$fullarray = $fullarray.$separate.$row['youtubeplaylistlink'];
		} 	
	}else{
		echo "0 results";
	}
?>



<input type="hidden" id="fullarray" value="<?php echo $fullarray; ?>">


<script>
	function youtubeChangeSrc($dt,$ytorder) {
		yt.attr("src", "https://www.youtube.com/embed/"+$dt+"?autoplay=1&ytorder="+$ytorder);
	}
</script>

	<div class="modal fade copiedtoclipboard" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<h2>copy youtube url and go to youtube-mp3.org</h2>
				<input type="text" class='txt' rows='5' value="http://www.youtube.com/watch?v=<?php echo $row['youtubeplaylistlink']; ?>">
				<div class='btn ctc'>Copy to clipboard</div>go to
				<a href="http://www.youtube-mp3.org/" target="_blank">youtube-mp3.org</a>
			</div>
		</div>
	</div>

<!-- youtube list 
<script>
    var str = $('#tarea').val();
    var res = str.split(",");
    for (i = 0; i <= res.length - 1; i++) {
    	$("#YTlist").append("<a onclick='youtubeChangeSrc(&#34;"+res[i]+"&#34;,"+i+")'><img width='50px' src='http://i1.ytimg.com/vi/"+res[i]+"/default.jpg'>"+res[i]+"</a><br/>");
    };
</script>
-->