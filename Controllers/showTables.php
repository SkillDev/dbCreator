<?php
/**
*PHP version 5
*
*@author   ANTON Maicmelan <maicmelan.anton@epitech.eu>
*/
require '../Controllers/dbController.php';

$init = new dbCtrl();


if (isset($_POST['dbName'])) {
  $newDb = $init->createDatabase($_POST['dbName']);
  header('Location: ../index.php');
  die();
}

if (isset($_GET['name']) && empty($_GET['table'])) {
  $tables_sql = $init->showTables($_GET['name']);
  require '../Views/showTables.html';
  die();
}

elseif (isset($_GET['name']) && isset($_GET['table'])) {
  $column_sql = $init->describeTables($_GET['name'], $_GET['table']);
  $all_sql = $init->selectAllFromTables($_GET['name'], $_GET['table']);
  require '../Views/describeTable.html';
  die();
}

elseif (isset($_GET['new'])) {
  require '../Views/newDb.html';
  die();
}
elseif (isset($_GET['newTable'])) {
  if (isset($_POST['newTable'])) {
    $newDb = $init->createTable($_GET['newTable'], $_POST['newTable']);
    header('Location: ../index.php');
    die();
  }
  require '../Views/newTable.html';
  die();

}
else {
  header('Location: ../index.php');
  die();
}
?>

