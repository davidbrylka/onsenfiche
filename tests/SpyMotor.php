<?php

namespace TddEssais;

class SpyMotor
{
    public bool $numberOfCylinderFlag=false;
    public int $numberOfCylinders;

    public function __construct($nbsOfCylinders)
    {
        $this->numberOfCylinders=$nbsOfCylinders;
    }

    public function getNumberOfCylinder()
    {
        $this->numberOfCylinderFlag=true;
    }
}
