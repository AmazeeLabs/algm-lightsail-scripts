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
        $returnVar = 255;
        system("DEBIAN_FRONTEND=noninteractive apt-get -y update", $returnVar);
        return $returnVar;
    }

    public function aptGetInstall($packageName)
    {
        
    }
}