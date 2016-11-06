<?php 
	include('../dbConnection.php');
	$sql = "SELECT * FROM settings WHERE `id_settings` = ".$_SESSION['id_session'];
	$result = mysqli_query($link,$sql);
	if ($result->num_rows > 0) {
		while ($row = mysqli_fetch_assoc($result)) {
			$selected = $row['tabs_order'];
		} 	
	}else{
		$selected = '';
	}
?>
<div class="container-full">
	<div class="row">
		<div class="col-xs-12">
			<label for="link-order-select">Ordering tabs by:</label>
			<select name="order" id="link-order-select">
				<option 
					<?= $selected == '' ? 'selected="selected"' : ''; ?>
					value="`view`DESC" selected>--</option>
				<option 
					<?= $selected == '`title`DESC' ? 'selected="selected"' : ''; ?>
					value="`title`DESC">title 	&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp			(alphabetically)</option>
				<option 
					<?= $selected == '`data`DESC' ? 'selected="selected"' : ''; ?>
					value="`data`DESC">Date 	&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp					(recently added)</option>
				<option 
					<?= $selected == '`url`DESC' ? 'selected="selected"' : ''; ?>
					value="`url`DESC">Url 		&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp	(alphabetically)</option>
				<option 
					<?= $selected == '`view`DESC' ? 'selected="selected"' : ''; ?>
					value="`view`DESC">View 	&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp					(most viewed)</option>
				<option 
					<?= $selected == '`last_view`DESC' ? 'selected="selected"' : ''; ?>
					value="`last_view`DESC">history 	&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp							(recently viewed)</option>
			</select>
		</div>
	</div>
</div>