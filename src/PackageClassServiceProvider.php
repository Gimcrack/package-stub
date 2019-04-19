<?php

namespace {{Vendor}}\{{PackageClass}};

use Illuminate\Support\ServiceProvider;

class {{PackageClass}}ServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        // config
        // $this->publishes([
        //     __DIR__.'/config/{{package_name}}.php' => config_path('{{package_name}}.php')
        // ], 'config');

    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('{{PackageClass}}', function() {
            return new {{PackageClass}};
        } );
    }
}
