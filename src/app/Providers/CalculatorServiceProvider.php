<?php

namespace Mahmudbekstudio\Calculator\App\Providers;

use Illuminate\Support\ServiceProvider;

class CalculatorServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        include __DIR__ . '/../../routes/routes.php';
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->make('Mahmudbekstudio\Calculator\App\Http\Controllers\CalculatorController');
        $this->loadViewsFrom(__DIR__.'/../../resources/views', 'calculator');
    }
}
