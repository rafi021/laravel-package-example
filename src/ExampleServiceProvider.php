<?php

namespace Rafi021\Example;

use Illuminate\Support\Facades\Route;
use Rafi021\Example\Commands\ExampleCommand;
use Rafi021\Example\Http\Controllers\MyController;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class ExampleServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-package-example')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_my_models_table')
            ->hasCommand(ExampleCommand::class);
    }

    public function packageRegistered()
    {
        Route::macro('example', function(string $basrUrl = 'example'){
            Route::prefix($basrUrl)->group(function(){
                Route::get('/', [MyController::class, 'index']);
            });
        });
    }
}
