<?php

namespace Cgnetwork\Ease;

use Cgnetwork\Ease\Console\InstallCommand;
use Illuminate\Support\ServiceProvider;

class EaseServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/../config/ease.php', 'ease');
    }

    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/../routes/web.php');

        $this->loadViewsFrom(__DIR__.'/../vite', 'ease');

        if ($this->app->runningInConsole()) {

            $this->commands([
                InstallCommand::class
            ]);

            $this->publishes([
                __DIR__.'/../config/ease.php' => config_path('ease.php'),
            ], 'config');
        }
    }
}
