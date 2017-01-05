<?php
/**
*PHP version 5
*
*@author   ANTON Maicmelan <maicmelan.anton@epitech.eu>
*/
require '../Controllers/dbController.php';

$init = new dbCtrl();

if (isset($_GET['name']) && empty($_GET['table'])) {
  $tables_sql = $init->showTables($_GET['name']);
  require '../Views/showTables.html';
  die();
}

elseif (isset($_GET['name']) && isset($_GET['table'])) {
  $column_sql = $init->describeTables($_GET['name'], $_GET['table']);
  require '../Views/describeTable.html';
  die();
}

else {
  header('Location: ../index.php');
  die();
}
?>

