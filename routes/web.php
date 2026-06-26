<?php

use App\Http\Controllers\AppController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'home'])
      ->name('home');

Route::get('/about', [PageController::class, 'about'])
      ->name('about');

Route::get('/about/hijazi', [PageController::class, 'aboutHijazi'])
      ->name('about.hijazi');

Route::get('/products', [PageController::class, 'products'])
      ->name('products');

Route::get('/services', [PageController::class, 'services'])
      ->name('services');

Route::get('/services/portfolio', [PageController::class, 'portfolio'])
      ->name('services.portfolio');

Route::get('/contact', [PageController::class, 'contact'])
      ->name('contact');

Route::get('/apps', [AppController::class, 'index'])
      ->name('apps.index');

Route::get('/apps/{slug}', [AppController::class, 'show'])
      ->name('apps.show');
