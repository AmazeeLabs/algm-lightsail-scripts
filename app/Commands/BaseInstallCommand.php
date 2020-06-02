<?php

namespace App\Commands;

use Illuminate\Console\Scheduling\Schedule;
use LaravelZero\Framework\Commands\Command;
use App\AlgmLightsailApp;

abstract class BaseInstallCommand extends Command
{
    protected $preflightRun = false;
    protected $algmLightsailApp;

    public function preflightCheck() 
    { 
        if(!$this->algmLightsailApp->amIRoot()) {
            $this->error("This command demands root");
            return false;
        }
        
        if(! $this->aptGetUpdate()) {
            $this->error("apt update failed");
            return false;
        }

        return true;
    }

    public function aptGetUpdate()
    {
        $this->info("Running apt-get update");
        return $this->algmLightsailApp->aptGetUpdate();
    }

    final public function handle(AlgmLightsailApp $algmLightsailApp)
    {
        $this->algmLightsailApp = $algmLightsailApp;

        if(!$this->preflightCheck()) {
            $this->error("This command demands root");
            return 255;
        }

        $this->info('Preflight checks passed.');
        $this->algmHandle($algmLightsailApp);
    }
}
