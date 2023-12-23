<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\SignupController;
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

Route::get('/', [SignupController::class, 'index'])->name('loginPage');
Route::post('/registerUser', [SignupController::class, 'registerUser'])->name('registerUser');
Route::post('/userLogin', [SignupController::class, 'userLogin'])->name('userLogin');
Route::get('/products-list',[ProductController::class,'index'])->name('productList');
Route::get('/product-details',[ProductController::class,'productDetails'])->name('productDetails');