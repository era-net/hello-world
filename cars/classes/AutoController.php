<?php

require "Auto.php";
require "AutoView.php";

class AutoController
{
    private $model;
    private $view;

    public function __construct() {
        $this->model = new Auto;
        $this->view = new AutoView;
    }
    
    public function getBauart()
    {
        return $this->model->getBauart();
    }

    public function setBauart($bauart)
    {
        if($bauart) 
        {
            $this->model->setBauart($bauart);
            return true;
        }
        return false;
    }

    public function getHubraum()
    {
        return $this->model->getHubraum();
    }

    public function setHubraum($hubraum)
    {
        $this->model->setHubraum($hubraum);
    }

    public function getPs()
    {
        return $this->model->getPs();
    }

    public function setPs($ps)
    {
        $this->model->setPs($ps);
    }

    public function getKraftstoff()
    {
        return $this->model->getKraftstoff();
    }

    public function setKraftstoff($kraftstoff)
    {
        $this->model->setKraftstoff($kraftstoff);
    }

    public function getFarbe()
    {
        return $this->model->getFarbe();
    }

    public function setFarbe($farbe)
    {
        $this->model->setFarbe($farbe);
    }

    public function getKmstand()
    {
        return $this->model->getKmstand();
    }

    public function setKmstand($kmstand)
    {
        $this->model->setKmstand($kmstand);
    }

    public function getErsatzwagen()
    {
        return $this->model->getErsatzwagen();
    }

    public function setErsatzwagen($ersatzwagen)
    {
        $this->model->setErsatzwagen($ersatzwagen);
    }

    public function getBetankungen()
    {
        return $this->model->getBetankungen();
    }

    public function setBetankungen()
    {
        $this->model->setBetankungen();
    }

    public function showData()
    {
        $this->view->setData($this);
        $this->view->showData();
    }

    public function saveData()
    {
        $this->model->saveData();
    }
}