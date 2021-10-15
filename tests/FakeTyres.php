<?php

namespace TddEssais;

use App\Interface\TyreInterface;

class FakeTyres implements TyreInterface{

    public function getTyreName()
    {
    return "Michelin";
    }
    public function getTyreSize()
    {
        
    }

}

?>
