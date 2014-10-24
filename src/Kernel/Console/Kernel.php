<?php namespace Orchestra\Kernel\Console;

use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * The bootstrap classes for the application.
     *
     * @return void
     */
    protected $bootstrappers = [
        'Illuminate\Foundation\Bootstrap\LoadEnvironment',
        'Illuminate\Foundation\Bootstrap\LoadConfiguration',
        'Illuminate\Foundation\Bootstrap\RegisterFacades',
        'Illuminate\Foundation\Bootstrap\RegisterProviders',
        'Illuminate\Foundation\Bootstrap\BootProviders',
        'Orchestra\Extension\Bootstrap\BootEnvironment',
    ];
}
