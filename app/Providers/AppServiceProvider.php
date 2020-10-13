<?php

namespace App\Providers;

use App\Http\Resources\BusDetails as BusDetailsResource;
use App\Http\Resources\Destinations as DestinationsResource;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;
use App\Http\Resources\FromRoute as FromRouteResource;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**api
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);

        BusDetailsResource::withoutWrapping();
        DestinationsResource::withoutWrapping();
    }
}
