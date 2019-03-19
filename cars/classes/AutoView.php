<?php

class AutoView
{
    private $data;

    public function __construct() {
        // Code
    }

    public function setData($data)
    {
        $this->data = $data;
    }

    public function showData()
    {
        echo '<pre>';
        print_r($this->data);
        echo '</pre>';
    }
}