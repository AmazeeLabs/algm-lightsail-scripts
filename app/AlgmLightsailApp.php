<?php

namespace App;

class AlgmLightsailApp 
{
    public function whoAmI()
    {
        return env('USER');
    }

    public function amIRoot()
    {
        return $this->whoAmI() != "root";
    }

    public function aptGetInstall($packageName)
    {
        
    }
}