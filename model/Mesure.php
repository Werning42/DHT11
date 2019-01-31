<?php
require_once 'Dbconnect.php';

class Mesure extends DbManager{

    private $id;
    private $temperature;
    private $humidite;
    private $storeTime;

    
    function __construct($temperature,$humidite,$storeTime){
        $this->temperature = $temperature;
        $this->humidite = $humidite;
        $this->storeTime = $storeTime;
    }

    protected function getData(){
        $pdo = $this->dbConnect();
        $req = $bdd->query('SELECT température, humidité, date FROM Data');
    }
    
    protected function sendData($humidite,$temperature)
    {
        $pdo = $this->dbConnect();
        $req = $pdo->prepare('INSERT INTO Data (humidité, température) VALUES (:humidité, :température)');
        $req->execute(array(':humidité' => $humidite, ':température' => $temperature));
    }
    
    public function getId(){
        return $this->id;
    }

    public function setId():void{
        $this->id =$id;
    }

    public function getTemperature(){
        return $this->temperature;
    }

    public function setTemperature():void{
        $this->temperature =$temperature;
    }

    public function getHumidite(){
        return $this->humidite;
    }

    public function setHumidite(){
        $this->humidite=$humidite;
    }
}

