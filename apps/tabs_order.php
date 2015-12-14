<?php 
$tabs_order = mysqli_query($link, "SELECT tabs_order FROM settings WHERE id_settings = '$ID_SESSION'");
$tabs_order = mysqli_fetch_assoc($tabs_order); 
$tabs_order = $tabs_order['tabs_order'];

switch ($tabs_order) {

	case 'data DESC':
		$data_DESC = "selected='selected'";
		break;

	case 'data ASC':
		$data_ASC = "selected='selected'";
		break;
	
	default:
		$data_DESC = "";
		$data_ASC  = "";
		break;
		
}
?>
<option value="data DESC" <?php echo $data_DESC ; ?>>New/Old</option>
<option value="data ASC" <?php echo $data_ASC ; ?>  >Old/New</option>
<!--option value="Old/New">Old/New</option>
<option value="A-Z">A-Z</option>
<option value="Clicked">Clicked</option-->
