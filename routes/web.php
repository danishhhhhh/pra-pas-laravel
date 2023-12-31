<?php

use App\Http\Controllers\BrandController;
use App\Http\Controllers\CarController;
use App\Http\Controllers\MotorcycleController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//Route::get('/cars', [CarController::class, 'index']);
//Route::get('/cars/{car}', [CarController::class, 'show']);

Route::resource('cars', CarController::class);

Route::resource('motorcycle', MotorcycleController::class);

Route::resource('brand', BrandController::class);

Route::get('/', function () {
    return redirect('/cars');
});
