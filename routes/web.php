<?php

use App\Http\Controllers\AppartmentController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SliderController;
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

Route::get('/', [HomeController::class, 'index'])->name('home.index');
Route::group(['prefix'=>'/slider'], function () {
    Route::get('/', [SliderController::class, 'index'])->name('slider.index');
    Route::get('/create', [SliderController::class, 'create'])->name('slider.create');
    Route::post('/store', [SliderController::class, 'store'])->name('slider.store');
});
Route::group(['prefix'=>'/appartment'], function () {
    Route::get('/', [AppartmentController::class, 'index'])->name('appartment.index');
    Route::get('/create', [AppartmentController::class, 'create'])->name('appartment.create');
    Route::post('/store', [AppartmentController::class, 'store'])->name('appartment.store');
});
