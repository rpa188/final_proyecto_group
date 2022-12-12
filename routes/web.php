<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::controller(App\Http\Controllers\ProductoController::class)->group(function () {
    Route::get('/productos', 'index');
    Route::get('/add-product', 'create');
    Route::post('/add-product', 'store');
    Route::get('/edit-product/{product_id}', 'edit');
    Route::put('/update-product/{product_id}', 'update');
});
