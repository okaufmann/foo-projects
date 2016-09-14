<?php

namespace App\Providers;

use App\Http\Controllers\TaskController;
use App\Services\FooService;
use GuzzleHttp\Client;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(FooService::class, function () {
            $client = new Client([
                'base_uri' => 'http://httpbin.org',
            ]);

            $service = new FooService($client);

            return $service;
        });
    }
}
