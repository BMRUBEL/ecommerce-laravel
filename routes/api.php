<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\backend\FeaturController;
use App\Http\Controllers\backend\HeroController;
use App\Http\Controllers\backend\VegetableController;
use App\Http\Controllers\backend\ContController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


// Dashboard routing

Route::resource("featur", controller:FeaturController::class);
Route::resource("hero", controller:HeroController::class);
Route::resource("vegetable", controller:VegetableController::class);


// contact page 
Route::resource("cont",ContController::class);