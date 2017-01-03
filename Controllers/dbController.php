<?php


class test { 

	private $host;

  // Méthodes
	public function __construct() 
	{
		$this->host = "localhost";
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

$caca = $lol->createDatabase();

?>