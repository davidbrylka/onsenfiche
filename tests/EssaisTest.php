<?php

namespace TddEssais;

use PHPUnit\Framework\TestCase;
use Starter;

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
    public function testAddMotor()
    {
        $newMotor = new SpyMotor(4);
         $numberOfCylinderIs = $newMotor->getNumberOfCylinder();

        $this->assertTrue($newMotor->numberOfCylinderFlag, "Methode getNumberOfCylinderCalled");
    }

    public function testDemarrage()
    {
        $newStarter = $this
        ->getMockBuilder(Starter::class)
        ->disableOriginalConstructor()
        ->getMock();

    }
}
