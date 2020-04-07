<?php
class Food {
    
    protected $name;
    protected $price;

    public function __construct($name, $price){
        $this->name = $name;
        $this->price = $price;
    }
   
    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return mixed
     */
    public function getPrice()
    {
        return $this->price;
    }

    static public function calculateEachPrice($price, $foodQuantity){
            
        $eachPrice = $price * $foodQuantity;
        return $eachPrice;
        
    }    
 
}