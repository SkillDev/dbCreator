<?php
include ('../Controllers/dbController.php');

if (isset($_GET['name'])) {
	$init = new dbCtrl();
	$delete = $init->deleteDatabase($_GET['name']);
	header('Location: ../index.php');
	die();
}
elseif (isset($_GET['dbName']) && isset($_GET['tableDrope'])) {
	$init = new dbCtrl();
	$delete = $init->deleteTable($_GET['dbName'], $_GET['tableDrope']);
	header('Location: ../index.php');
	die();
}
elseif (isset($_GET['dbName']) && isset($_GET['tableName'])) {
	if (isset($_POST['newName'])) {
		$init = new dbCtrl();
		$newDb = $init->renameTable($_GET['dbName'], $_GET['tableName'], $_POST['newName']);
		header('Location: ../index.php');
		die();
	}
	require '../Views/renameTable.html';
	die();
}
?>