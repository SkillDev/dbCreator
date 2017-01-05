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
		var_dump($column_sql);
		return $column_sql;
	}

	public function createDatabase($dbname) {
		$requete = "CREATE DATABASE IF NOT EXISTS `LOL` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci";
		$pdo->prepare($requete)->execute();
		var_dump($bdd);
	}


	public function updateDatabase($dbname) {
		$requete = "CREATE DATABASE IF NOT EXISTS `LOL` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci";
		$pdo->prepare($requete)->execute();
	}


	public function deleteDatabase($dbname){

		$requete = "DROP DATABASE".$dbname;
		$pdo->prepare($requete)->execute();

	}


	public function createTable($tablename){

		$requete = "CREATE TABLE MyGuests (id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY)";
		$pdo->prepare($requete)->execute();

	}


	public function renameTable($tablename){

		$requete = "RENAME TABLE myguests TO lol";
		$pdo->prepare($requete)->execute();
	}


	public function addColumn($tablename){

		$requete = "ALTER TABLE contacts ADD email VARCHAR(60)";
		$pdo->prepare($requete)->execute();
	}

} 
?>