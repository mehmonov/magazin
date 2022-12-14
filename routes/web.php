<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HodimController;
use App\Http\Controllers\MahsulotController;
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

    
Route::get('/',[HodimController::class,'index'])->name('home');
Route::resource('hodim', HodimController::class);
Route::resource('mahsulot', MahsulotController::class);
Route::get('getProductData',[MahsulotController::class, 'getProductData'])->name('getProductData');

// Route::get('/hodim/{id}',[HodimController::class,'delete'])->name('hodim.delete');