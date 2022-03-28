<?php

require_once 'Vehicle.php';

class Truck extends Vehicle
{

    private int $cargoLimit;
    private int $cargo = 0;

    public function __construct(int $cargoLimit, string $color, int $nbSeats, string $energy)
    {
        $this->cargoLimit = $cargoLimit;
        parent::__construct($color, $nbSeats);
        $this->energy = $energy;
    }

    public function getCargo():int
    {
        return $this->cargo;
    }
    public function setCargo(int $cargo): void
    {
        $this->cargo = $cargo;
        
    }
    
    public function cargoState():string
    {
        $sentence ="This truck";
        if($this->cargo === $this->cargoLimit) {
            return $sentence .  "is Full";
        }
        elseif($this->cargo < $this->cargoLimit){
            return $sentence . "in filling";
        }
    }



    
   
}


