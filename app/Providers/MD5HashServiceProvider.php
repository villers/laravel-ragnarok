<?php namespace App\Providers;

use App\Lib\MD5Hasher\MD5Hasher;
use Illuminate\Support\ServiceProvider;

class MD5HashServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * #var bool
     */
    protected $defer = true;

    /**
     * Register the service provider.
     *
     * #return void
     */
    public function register()
    {
        $this->app->singleton('hash', function () {
            return new MD5Hasher;
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * #return array
     */
    public function provides()
    {
        return ['hash'];
    }
}