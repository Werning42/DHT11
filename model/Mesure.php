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
    
    protected function sendData()
    {
        $pdo = $this->dbConnect();
        $req = $pdo->prepare('INSERT INTO Da (humi, temp) VALUES (:humi, :temp)');
        $req->execute(array(':humi' => $humidite, ':temp' => $temperature));
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

