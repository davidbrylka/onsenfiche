<?php

namespace App\Model;

class Car{

    public int $numberOfWheels;
    public int $numberOfDoors;

    public function __construct(int $numberOfWheels, int $numberOfDoors)
    {
        $this->numberOfWheels=$numberOfWheels;
        $this->numberOfDoors=$numberOfDoors;
    }


    public function getNumberOfWheels()
    {
        return $this->numberOfWheels;
    }
    public function getNumberOfDoors()
    {
        return $this->numberOfDoors;
    }

}

?>
