<?php 
	$backfolder_string = "";
	if ($backfolder>0) {
		$backfolder_string = "../";
		for ($i=1; $i < $backfolder; $i++) { 
			$backfolder_string = $backfolder_string."../";
		}
	}
?>
<script src="<?php echo $backfolder_string; ?>dependencies/js/jquery-2.1.3.min.js"></script>
<script src="<?php echo $backfolder_string; ?>dependencies/js/bootstrap.min.js"></script>
<script src="<?php echo $backfolder_string; ?>dependencies/js/list.min.js"></script>
<script src="<?php echo $backfolder_string; ?>dependencies/js/moment.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.js"></script>
<script src="https://npmcdn.com/masonry-layout@4.0.0/dist/masonry.pkgd.min.js"></script> <!-- like masonary -->

<!-- meteo -->
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
<script src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script> 