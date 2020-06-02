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
        return $returnVar == 0;
    }

    public function aptGetInstall($packageName)
    {
        $returnVar = 255;
        system("DEBIAN_FRONTEND=noninteractive apt-get -y install " . $packageName, $returnVar);
        return $returnVar == 0;
    }

    public function goGet($packageName) 
    {
        $returnVar = 255;
        system("go get " . $packageName, $returnVar);
        return $returnVar == 0;
    }
}