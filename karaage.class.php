<?php

class karaage extends food{
       
    private $source;
    
    public function __construct($name, $price, $source){
        $this->name = $name;
        $this->price = $price;
        $this->source = $source;
    }
    
    public function getSource()
    {
        return $this->source;
    }
}