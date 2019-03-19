<?php

require "Database.php";

class Auto
{
    // Private heisst, nur innerhalb der Klasse zugänglich
        private $bauart;
        private $hubraum;
        private $ps;
        private $kraftstoff;
        private $farbe;
        private $kmstand;
        private $betankungen;
        private $conn;
        private $database;

    // Public heisst, ausserhalb der Klasse zugänglich
    public $ersatzwagen;

    // Der Konstruktor. Er wird zu Beginn direkt ausgeführt, 
    // wenn ein Objekt vom Typ "Auto" erstellt wird.
    public function __construct() {
        // Code
        $this->betankungen = 1;
        $this->database = new Database;
        $this->conn = $this->database->getConn();
    }
    
    public function getBauart()
    {
        return $this->bauart;
    }

    public function setBauart($bauart)
    {
        $this->bauart = $bauart;
    }

    public function getHubraum()
    {
        return $this->hubraum;
    }

    public function setHubraum($hubraum)
    {
        $this->hubraum = $hubraum;
    }

    public function getPs()
    {
        return $this->ps;
    }

    public function setPs($ps)
    {
        $this->ps = $ps;
    }

    public function getKraftstoff()
    {
        return $this->kraftstoff;
    }

    public function setKraftstoff($kraftstoff)
    {
        $this->kraftstoff = $kraftstoff;
    }

    public function getFarbe()
    {
        return $this->farbe;
    }

    public function setFarbe($farbe)
    {
        $this->farbe = $farbe;
    }

    public function getKmstand()
    {
        return $this->kmstand;
    }

    public function setKmstand($kmstand)
    {
        $this->kmstand = $kmstand;
    }

    public function getErsatzwagen()
    {
        return $this->ersatzwagen;
    }

    public function setErsatzwagen($ersatzwagen)
    {
        $this->ersatzwagen = $ersatzwagen;
    }

    public function getBetankungen()
    {
        return $this->betankungen;
    }

    public function setBetankungen()
    {
        $this->betankungen++;
    }

    public function saveData()
    {
        
        try {
            $query = $this->conn->prepare("INSERT INTO cars (brand, car_type, body_type, fuel, color, cubic, hp, mileage) VALUES (:brand, :car_type, :body_type, :fuel, :color, :cubic, :hp, :mileage)");

            $query->bindParam(':brand', $this->bauart);
            $query->bindParam(':car_type', $this->bauart);
            $query->bindParam(':body_type', $this->bauart);
            $query->bindParam(':fuel', $this->kraftstoff);
            $query->bindParam(':color', $this->farbe);
            $query->bindParam(':cubic', $this->hubraum);
            $query->bindParam(':hp', $this->ps);
            $query->bindParam(':mileage', $this->kmstand);

            $query->execute();

            }
        catch(PDOException $e)
            {
            echo "Connection failed: " . $e->getMessage();
        }
    }
}