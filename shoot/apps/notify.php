<?php 

if (isset($_GET['achivements'])) {
	switch ($_GET['achivements']) {
		case 'levelup':
			echo "<div class='notify'>level up from $_GET[oldscore] to $_GET[newscore]</div>";
			break;
	}	
}

?>