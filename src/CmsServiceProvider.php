<?php

namespace wiz\cms;

use Illuminate\Support\ServiceProvider;
use wiz\cms\Console\CmsMakeCommand;
use wiz\cms\Middleware\setLang;

class CmsServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot(\Illuminate\Routing\Router $router)
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                CmsMakeCommand::class,
            ]);
        }
        $router->middleware('setlang', 'setLang');
        $this->loadMigrationsFrom(__DIR__.'/migrations');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {

    }
}
