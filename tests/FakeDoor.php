<?php

namespace TddEssais;

use App\Interface\DoorInterface;

class FakeDoor implements DoorInterface{

    public function toleOuVitree()
    {
    return "vitree";
    }
}
