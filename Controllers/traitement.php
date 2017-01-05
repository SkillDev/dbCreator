<?php
include ('../Controllers/dbController.php');

var_dump($_GET);

$init = new test();
$delete = $init->deleteDatabase($_GET['name']);





?>