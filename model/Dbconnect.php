<?php 

require_once '../inc/config.inc.php';

Class DbManager{ 

	private $serverAdress;
	private $dbName;
	private $dbUser;
	private $dbPassword;

	 function __construct($serverAdress,$DbName,$dbUser,$dbPassword){
    
	    $this->serverAdress = $dbinfo['serverAdress'];
	    $this->dbName = $dbinfo['dbName'];
	    $this->dbUser = $dbinfo['dbUser'];
	    $this->dbPassword = $dbinfo['dbPassword'];
    
	}
	
	public function dbConnect(){
	

        try{
            $pdo =  new PDO(`'mysql:host=''$serverAdress';dbname='$dbName','$dbUser','$dbPassword`);
            return $pdo;
        }
        catch (Exception $e){
            die('Erreur : '.$e->getMessage());
        }
}
}