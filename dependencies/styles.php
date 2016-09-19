<?php 
	$backfolder_string = "";
	if ($backfolder>0) {
		$backfolder_string = "../";
		for ($i=1; $i < $backfolder; $i++) { 
			$backfolder_string = $backfolder_string."../";
		}
	}
?>
<link rel="stylesheet" href="<?php echo $backfolder_string; ?>dependencies/css/bootstrap.min.css"/>
<link rel="stylesheet" href="<?php echo $backfolder_string; ?>dependencies/css/introjs.css"/>
<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
<link rel="stylesheet" href="<?php echo $backfolder_string; ?>dependencies/css/styles.css"/>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<!-- meteo -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/weather-icons/2.0.9/css/weather-icons.min.css">