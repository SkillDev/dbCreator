<?php
	include ('Controllers/dbController.php');
	
	$init = new test();
	$databases_list = $init->showDatabases();
	include ('Views/index.html');
?>