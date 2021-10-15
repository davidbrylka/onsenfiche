<?php

namespace TddEssais;

use PHPUnit\Framework\TestCase;

class MakeCarTest extends TestCase
{
    private $tyreBrand;
    private $doors;
    private $motor;


    public function testAddTyres()
    {
        $newTyre = new FakeTyres();
        $this->assertEquals("Michelin", $newTyre->getTyreName());
    }
    public function testAddDoors()
    {
        $door = new FakeDoor();
        $this->assertSame("vitree", $door->toleOuVitree());
    }
    public function testAddAMotor()
    {
        $newMotor=new SpyMotor(4);
        $numberOfCylinderIs=$newMotor->getNumberOfCylinder();

        $this->assertTrue($newMotor->numberOfCylinderFlag,"Methode getNumberOfCylinderCalled");
    }
}

