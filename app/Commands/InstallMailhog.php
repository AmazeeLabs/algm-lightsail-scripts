<?php

namespace App\Commands;

use Illuminate\Console\Scheduling\Schedule;
use LaravelZero\Framework\Commands\Command;
use App\AlgmLightsailApp;

class InstallMailhog extends BaseInstallCommand
{
    protected $signature = 'install:mailhog';
    protected $description = 'Install and configure a simple mailhog';

    public function algmHandle(AlgmLightsailApp $algmLightsailApp)
    {
        $this->info('Proceeding with installation and configuration of Mailhog');
    }
}
