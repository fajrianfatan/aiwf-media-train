<?php

namespace App\Providers;

use App\Models\Artikel;
use Illuminate\Support\ServiceProvider;
use App\Observers\ArtikelObserver;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Artikel::observe(ArtikelObserver::class);
    }
}
