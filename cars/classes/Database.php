<?php

class Database 
{
    private $servername = "localhost";
    private $username = "erwin";
    private $password = "erwin";
    private $dbname = "erwin";
    private $conn;

    public function __construct() {
        try 
        {
            $this->conn = new PDO("mysql:host=$this->servername;dbname=$this->dbname;charset=utf8", $this->username, $this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        catch(PDOException $e)
        {
            echo "Connection failed: " . $e->getMessage();
        }
    }

    public function getConn()
    {
        return $this->conn;
    }

}