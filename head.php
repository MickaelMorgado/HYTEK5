<?php  
	require_once('dbConnection.php');
	$appsfolder = 'apps';

	function phpdebugger(){
		$echo = "<pre>" . print_r(get_defined_vars(), true) . "</pre>";
		return $echo;
	}
?>
