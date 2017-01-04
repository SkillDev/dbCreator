<?php


class test { 

	private $host;

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


	public function createDatabase(){

		try
		{
	// On se connecte à MySQL
			$bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', '');
		}
		catch(Exception $e)
		{
	// En cas d'erreur, on affiche un message et on arrête tout
			die('Erreur : '.$e->getMessage());
		}


		var_dump($bdd);

	}


} 
$test = 'lol';
$lol = new test();
$databases_list = $lol->showDatabases();
?>