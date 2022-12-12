<?php

use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/foo', function () {
    Artisan::call('storage:link');
});

Route::controller(App\Http\Controllers\WelcomeController::class)->group(function () {
    Route::get('/', 'index');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::controller(App\Http\Controllers\ProductoController::class)->group(function () {
    Route::get('/productos', 'index');
    Route::get('/producto/{product_id}', 'detail');
    Route::get('/add-product', 'create');
    Route::post('/add-product', 'store');
    Route::get('/edit-product/{product_id}', 'edit');
    Route::put('/update-product/{product_id}', 'update');
    Route::delete('/delete-product/{product_id}', 'destroy');
});

Route::controller(App\Http\Controllers\CategoriaController::class)->group(function () {
    Route::get('/categorias', 'index');
    Route::get('/categoria/{category_id}', 'detail');
    Route::get('/add-category', 'create');
    Route::post('/add-category', 'store');
    Route::get('/edit-category/{category_id}', 'edit');
    Route::put('/update-category/{category_id}', 'update');
    Route::delete('/delete-category/{category_id}', 'destroy');
});

Route::controller(App\Http\Controllers\MarcaController::class)->group(function () {
    Route::get('/marcas', 'index');
    Route::get('/marca/{brand_id}', 'detail');
    Route::get('/add-brand', 'create');
    Route::post('/add-brand', 'store');
    Route::get('/edit-brand/{brand_id}', 'edit');
    Route::put('/update-brand/{brand_id}', 'update');
    Route::delete('/delete-brand/{brand_id}', 'destroy');
});

Route::controller(App\Http\Controllers\CartController::class)->group(function () {
    Route::get('/cart', 'index');
    Route::post('/add-cartitem', 'store');
    Route::put('/update-cart/{cart_id}', 'update');
    Route::delete('/delete-cartitem/{cart_id}', 'destroy');
    Route::delete('/delete-cart', 'clean');
});
