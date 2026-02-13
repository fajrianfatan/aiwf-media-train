<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\StreamingController;
use App\Http\Controllers\ArtikelController;
// use App\Http\Controllers\KajianController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\PenulisController;
use App\Http\Controllers\ActivityLogController;

Route::get('/login', function () {
    return view('/login/index',['title'=>'Login']);
})->name('login');

Route::resource('users', UserController::class);

Route::get('/', [MainController::class, 'home'])->name('beranda');

Route::get('/galeri', [MainController::class, 'galeri'])->name('galeri');

Route::get('/kajian', [MainController::class, 'kajian'])->name('kajian');

Route::resource('/streaming', StreamingController::class)->parameters([
    'streaming' => 'streaming'
]);



Route::get('/about', [MainController::class, 'about'])->name('about');

Route::get('/login', [MainController::class, 'login'])->name('login');

Route::get('/users/create', [MainController::class, 'users_create'])->name('users');

// Route::get('/berita', [MainController::class, 'berita'])->name('berita');

Route::resource('/buku', BukuController::class);

Route::resource('/artikel', ArtikelController::class);

Route::resource('/penulis', PenulisController::class)->parameters([
    'penulis' => 'penulis'
]);
// Route::resource('/kajian', KajianController::class);

// Route::resource('/berita', controller: BeritaController::class);
Route::resource('berita', BeritaController::class)->parameters([
    'berita' => 'berita'
]);

Route::get('/logs', [ActivityLogController::class, 'index'])
    ->name('logs');


Route::prefix('api')->group(function () {
    Route::get('/artikel', [ArtikelController::class, 'getById']);
    Route::get('/artikel/judul', [ArtikelController::class, 'getByJudul']);
});
Route::get('/api/berita', [BeritaController::class, 'getById'])->name('api.berita.get');
Route::get('/api/buku', [BukuController::class, 'getById'])->name('api.buku.get');
Route::get('/api/penulis', [PenulisController::class, 'getById'])->name('api.penulis.get');
Route::get('/api/streaming', [StreamingController::class, 'getById'])->name('api.streaming.get');