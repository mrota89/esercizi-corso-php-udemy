<?php
/**
 * Estendere una classe in PHP
 * in php, si puoò estendere una classe usando la keyword extends
 * Estendendo una classe, la classe figlia eredita le proprietà e i metodi dalla classe parent, compresi i metodi setter, getter e __contruct.
 */
class Car {
    public $color;
    protected $fuel;
 
    function __construct($customColor, $customFuel) {
       $this->color = $customColor;
       $this->fuel = $customFuel;
    }
 
    public function getFuel() //getter
    {
        return $this->fuel;
    }
 
    public function setFuel(string $carburante) //setter
    {
       $this->fuel= $carburante;
    }
 }

 class Truck extends Car {
    protected $weight;
    public function __construct($customColor, $customFuel, $truckWeight) {
        //con parent:: entro nello scope della classe parent, in maniera da poter accedere alle sue proprietà. 
        parent::_construct($customColor, $customFuel);
        $this->weight = $truckWeight; 
    }
 }

 $camion = new Truck('red', 'benzina', 32);
 var_dump($camion);
 
 $camion->setFuel('gasolio');
 echo $camion->getFuel(); //gasolio