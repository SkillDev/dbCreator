<?php


class test { 

	private $host;

  // Méthodes
	public function __construct() 
	{
		$this->host = "localhost";
	}



	public function createDatabase($dbname){


		
		$requete = "CREATE DATABASE IF NOT EXISTS `LOL` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci";
		$pdo->prepare($requete)->execute();


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


		
		$requete = "CREATE TABLE MyGuests (
			
			id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY)";
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


$test = 'lol';
$lol = new test();
$caca = $lol->createDatabase();

?>