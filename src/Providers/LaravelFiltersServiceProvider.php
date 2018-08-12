<?php

namespace MikeRovers\LaravelFilters\Providers;

use Illuminate\Support\ServiceProvider;

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
