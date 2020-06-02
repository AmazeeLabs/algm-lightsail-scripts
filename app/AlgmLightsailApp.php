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
        return $this->whoAmI() === "root";
    }

    public function aptGetUpdate()
    {
        
    }

    public function aptGetInstall($packageName)
    {
        
    }
}