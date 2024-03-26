<?php

use App\Http\Controllers\api\ApartmentController;
use App\Http\Controllers\api\PartnerController;
use App\Http\Controllers\api\SliderController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

/*Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});*/


Route::get('/slider', [SliderController::class, 'index'])->name('api/slider.index');
Route::get('/apartment', [ApartmentController::class, 'index'])->name('api/apartment.index');
Route::get('/partner', [PartnerController::class, 'index'])->name('api/partner.index');
