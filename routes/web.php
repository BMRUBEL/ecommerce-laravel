<?php

use App\Http\Controllers\Dashboard\AdminController;
use App\Http\Controllers\EmployeeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontend\HomeController;
use App\Http\Controllers\frontend\ShopController;
use App\Http\Controllers\frontend\ShopDetailsController;
use App\Http\Controllers\frontend\CardController;
use App\Http\Controllers\frontend\TestimonialController;
use App\Http\Controllers\frontend\ContactController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Dashboard route

Route::get('/',[AdminController::class, 'dashboard']);


Route::resource("employee", controller:EmployeeController::class);


// frontend routing
Route::get('/home',[HomeController::class,'index']);
Route::get('/shop',[ShopController::class,'index']);
Route::get('/shop-details',[ShopDetailsController::class,'index']);
Route::get('/cart',[CardController::class,'index']);
Route::get('/testimonial',[TestimonialController::class,'index']);
Route::get('/contact',[ContactController::class,'index']);
