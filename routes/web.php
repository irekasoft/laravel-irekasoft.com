<?php

use App\Http\Controllers\AppController;
use App\Http\Controllers\IrekaUiController;
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

// Ireka UI — component library documentation
Route::get('/ireka-ui', [IrekaUiController::class, 'index'])
  ->name('ireka-ui.index');

Route::get('/ireka-ui/docs/getting-started', [IrekaUiController::class, 'gettingStarted'])
  ->name('ireka-ui.getting-started');

Route::get('/ireka-ui/docs/structure', [IrekaUiController::class, 'structure'])
  ->name('ireka-ui.structure');

Route::get('/ireka-ui/docs/navigation', [IrekaUiController::class, 'navigation'])
  ->name('ireka-ui.navigation');

Route::get('/ireka-ui/docs/modals', [IrekaUiController::class, 'modals'])
  ->name('ireka-ui.modals');

Route::get('/ireka-ui/docs/overlays', [IrekaUiController::class, 'overlays'])
  ->name('ireka-ui.overlays');

Route::get('/ireka-ui/docs/layout', [IrekaUiController::class, 'layout'])
  ->name('ireka-ui.layout');

Route::get('/ireka-ui/docs/components', [IrekaUiController::class, 'components'])
  ->name('ireka-ui.components');

Route::get('/ireka-ui/docs/components/{component}', [IrekaUiController::class, 'component'])
  ->name('ireka-ui.component');

Route::get('/ireka-ui/docs/{category}/{guide}', [IrekaUiController::class, 'guide'])
  ->whereIn('category', ['navigation', 'modals', 'overlays', 'layout'])
  ->name('ireka-ui.guide');


// Legacy URLs → contact
Route::get('/contact-us', function () {
  return redirect()->route('contact');
});

Route::get('/support', function () {
  return redirect()->route('contact');
});