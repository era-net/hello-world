<?php

class Client
{
    private $firstname;
    private $lastname;
    private $email;
    private $street;
    private $number;
    private $zip;
    private $city;
    private $status;

    public function __construct($firstname, $lastname, $email) 
    {
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->email = $email;
        $this->status = 1;
    }

    public function getFirstname() 
    {
        return $this->firstname;
    }

    public function setFirstname($firstname) 
    {
        $this->firstname = $firstname;
    }

    public function getLastname() 
    {
        return $this->lastname;
    }

    public function setLastname($lastname) 
    {
        $this->lastname = $lastname;
    }

    public function getEmail() 
    {
        return $this->email;
    }

    public function setEmail($email) 
    {
        $this->email = $email;
    }

    public function getStreet() 
    {
        return $this->street;
    }

    public function setStreet($street) 
    {
        $this->street = $street;
    }

    public function getNumber() 
    {
        return $this->number;
    }

    public function setNumber($number) 
    {
        $this->number = $number;
    }

    public function getZip() 
    {
        return $this->zip;
    }

    public function setZip($zip) 
    {
        $this->zip = $zip;
    }

    public function getCity() 
    {
        return $this->city;
    }

    public function setCity($city) 
    {
        $this->city = $city;
    }

    public function getStatus() 
    {
        return $this->status;
    }

    public function setStatus($status) 
    {
        $this->status = $status;
    }
}