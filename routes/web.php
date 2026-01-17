<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController; 


Route::get('/', [HomeController::class, 'index']);


Route::get('/news', [HomeController::class, 'news']);
Route::get('/about', [HomeController::class, 'about']);


Route::get('/contact', [ContactController::class, 'index'])->name('contact.index');
Route::post('/contact', [ContactController::class, 'sendEmail'])->name('contact.send');


Route::prefix('products')->group(function () {
    Route::get('/', [HomeController::class, 'products'])->name('products.index');
    Route::get('/panigale', [HomeController::class, 'panigale'])->name('products.panigale');
    Route::get('/streetfighter', [HomeController::class, 'streetfighter'])->name('products.streetfighter');
    Route::get('/monster', [HomeController::class, 'monster'])->name('products.monster');
    Route::get('/multistrada', [HomeController::class, 'multistrada'])->name('products.multistrada');
    Route::get('/diavel', [HomeController::class, 'diavel'])->name('products.diavel');
    Route::get('/desmo450mx', [HomeController::class, 'desmo450mx'])->name('products.desmo450mx');
});

Route::prefix('programs')->group(function () {
    Route::get('/', [HomeController::class, 'programs'])->name('programs.index'); 
    Route::get('/dre', [HomeController::class, 'dre'])->name('programs.dre');     
    Route::get('/motogp', [HomeController::class, 'motogp'])->name('programs.motogp');    
});

Route::prefix('news')->group(function () {
    Route::get('/', [HomeController::class, 'news'])->name('news.index');
    Route::get('/{slug}', [HomeController::class, 'showNewsBySlug'])->name('news.show');
});