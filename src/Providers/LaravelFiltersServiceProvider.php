<?php

namespace MikeRovers\LaravelFilters\Providers;

use Illuminate\Support\ServiceProvider;
use Mikerovers\LaravelFilters\Commands\CreateFilterCollection;

class LaravelFiltersServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
		if ($this->app->runningInConsole()) {
			$this->commands([
				CreateFilterCollection::class
			]);
		}
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
