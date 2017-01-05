<?php
	include ('Controllers/dbController.php');
	
	$init = new dbCtrl();
	$databases_list = $init->showDatabases();
	include ('Views/index.html');
?>