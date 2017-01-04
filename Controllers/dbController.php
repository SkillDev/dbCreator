<?php


class test { 

	private $host;
	private $user;
	private $pass;

  // Méthodes
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

	public function createDatabase($dbname){

		
		$requete = "CREATE DATABASE IF NOT EXISTS `LOL` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci";
		$pdo->prepare($requete)->execute();
		var_dump($bdd);
	}


	public function updateDatabase($dbname){

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