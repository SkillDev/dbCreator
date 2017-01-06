<?php

class dbCtrl { 

	private $host;
	private $user;
	private $pass;

  
	public function __construct() 
	{
		$this->host = "localhost";
		$this->user = 'root';
		$this->pass = '';
	}

	public function showDatabases() {

		$db = new PDO( "mysql:host=$this->host", $this->user, $this->pass );
		$requete ="SHOW DATABASES";
		$databases = $db->prepare($requete);
		$databases->execute();
		$databases_sql=$databases->fetchAll();
		return $databases_sql;
	}

	public function showTables($name) {
		$db = new PDO( "mysql:host=$this->host", $this->user, $this->pass );
		$requete1 ="USE " . $name;
		$databases1 = $db->prepare($requete1);
		$databases1->execute();
		$requete ="SHOW TABLES";
		$tables = $db->prepare($requete);
		$tables->execute();
		$tables_sql=$tables->fetchAll();
		return $tables_sql;
	}

	public function describeTables($name, $table) {
		$db = new PDO( "mysql:host=$this->host", $this->user, $this->pass );
		$requete1 ="USE " . $name;
		$databases1 = $db->prepare($requete1);
		$databases1->execute();
		$requete ="DESCRIBE " . $table;
		$column = $db->prepare($requete);
		$column->execute();
		$column_sql = $column->fetchAll();
		return $column_sql;
	}

	public function selectAllFromTables($name, $table) {
		$db = new PDO( "mysql:host=$this->host", $this->user, $this->pass );
		$requete1 ="USE " . $name;
		$databases1 = $db->prepare($requete1);
		$databases1->execute();
		$requete ="SELECT * FROM " . $table;
		$all = $db->prepare($requete);
		$all->execute();
		$all_sql = $all->fetchAll();
		return $all_sql;
	}

	public function createDatabase($dbname) {
		$pdo = new PDO( "mysql:host=$this->host", $this->user, $this->pass );
		$requete = "CREATE DATABASE IF NOT EXISTS ". $dbname ." DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci";
		$pdo->prepare($requete)->execute();
		var_dump($bdd);
	}


	public function updateDatabase($dbname) {
		$requete = "CREATE DATABASE IF NOT EXISTS `LOL` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci";
		$pdo->prepare($requete)->execute();
	}


	public function deleteTable($dbname, $tableName){
		$db = new PDO( "mysql:host=$this->host", $this->user, $this->pass );
		$requete1 ="USE " . $dbname;
		$databases1 = $db->prepare($requete1);
		$databases1->execute();
		$requete = "DROP TABLE ".$tableName;
		$db->prepare($requete)->execute();
	}

	public function deleteDatabase($dbname){
		$db = new PDO( "mysql:host=$this->host", $this->user, $this->pass );
		$requete = "DROP DATABASE ".$dbname;
		$db->prepare($requete)->execute();
	}


	public function createTable($dbname, $tablename){
		$pdo = new PDO( "mysql:host=$this->host", $this->user, $this->pass );
		$requete1 ="USE " . $dbname;
		$databases1 = $pdo->prepare($requete1);
		$databases1->execute();
		$requete = "CREATE TABLE " . $tablename . " (id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY)";
		$pdo->prepare($requete)->execute();

	}


	public function renameTable($dbname, $tablename, $newName){
		$pdo = new PDO( "mysql:host=$this->host", $this->user, $this->pass );
		$requete1 ="USE " . $dbname;
		$databases1 = $pdo->prepare($requete1);
		$databases1->execute();
		$requete = "RENAME TABLE " . $tablename . " TO " . $newName;
		$pdo->prepare($requete)->execute();
	}


	public function addColumn($tablename){

		$requete = "ALTER TABLE contacts ADD email VARCHAR(60)";
		$pdo->prepare($requete)->execute();
	}

} 
?>