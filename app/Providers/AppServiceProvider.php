<?php

namespace App\Providers;

use App\Models\Artikel;
use App\Models\Buku;
use App\Models\Berita;
use App\Models\Penulis;
use App\Models\Streaming;
use Illuminate\Support\ServiceProvider;
use App\Observers\BeritaObserver;
use App\Observers\BukuObserver;
use App\Observers\PenulisObserver;
use App\Observers\ArtikelObserver;
use App\Observers\StreamingObserver;
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
        Berita::observe(BeritaObserver::class);
        Buku::observe(BukuObserver::class);
        Penulis::observe(PenulisObserver::class);
        Streaming::observe(StreamingObserver::class);
    }
}
