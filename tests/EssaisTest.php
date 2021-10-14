<?php

namespace TddEssais;

use PHPUnit\Framework\TestCase;

class MakeCarTest extends TestCase
{
    private $tyreBrand;
    private $doors;
    private $motor;


    public function testAddTyres(string $tyrebrand)
    {
        $this->assertEquals("Michelin", $this->tyrebrand);
        $this->tyreBrand = $tyrebrand;
    }
    public function testAddDoors($nbDoors)
    {
        $this->assertSame(3,$nbDoors);
    }
    public function testAddAMotor($motor)
    {
        $this->assertInstanceOf();
    }
}
