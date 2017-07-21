<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use \Adyen\Client as AdyenClient;
use Adyen\Config;

class AdyenServiceProvider extends ServiceProvider
{

    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;


    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/../config/adyen.php' => config_path('adyen.php'),
        ]);

        $this->app->bind(AdyenClient::class, function () {
            $config = $this->app['config']['adyen'];
            $config = new Config($config);

            $client = new AdyenClient($config);
            $client->setEnvironment($this->app['config']['adyen']['environment']);

            return $client;
        });

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
