<?php

namespace TddEssais;

use App\Model\Car;
use PHPUnit\Framework\TestCase;
use Starter;

class MakeCarTest extends TestCase
{
    private $tyreBrand;
    private $doors;
    private $motor;

    public function testInstanceCar()
    {
        $car = new Car(4, 5);
        $this->assertInstanceOf(Car::class, $car);
    }

    public function testParamCar()
    {
        $car = new Car(4, 5);
        $this->assertSame(4, $car->getNumberOfWheels());
        $this->assertSame(5, $car->getNumberOfDoors());
    }
    public function testParamCars()
    {
        $cars = [[4, 3], [2, 4],[7,3]];

        foreach ($cars as $data) {
            $car = new Car($data[0], $data[1]);
            $this->assertSame($data[0], $car->getNumberOfWheels());
            $this->assertSame($data[1], $car->getNumberOfDoors());
        }
    }
}
