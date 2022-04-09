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

//Categories 
Route::get('/', [App\Http\Controllers\IndexController::class, 'index'])->name('index');
Route::get('/selling-categories', [App\Http\Controllers\CategoriesController::class, 'index'])->name('categories-index');
Route::get('/selling-brands/{id}', [App\Http\Controllers\BrandController::class, 'index'])->name('brands-index');
Route::get('/selling-products/{id}', [App\Http\Controllers\ProductController::class, 'index'])->name('products-index');
Route::get('/view-product/{id}', [App\Http\Controllers\ProductController::class, 'view'])->name('product-view');
Route::get('/product-quote', [App\Http\Controllers\ProductController::class, 'productQuote'])->name('product-quote');
Route::get('/question/{id}', [App\Http\Controllers\QuestionController::class, 'index'])->name('question-index');
Route::post('/calculate-price', [App\Http\Controllers\QuestionController::class, 'calculatePrice'])->name('calculate-price');
Route::post('/submit-mobile-otp', [App\Http\Controllers\UserController::class, 'submitMobileOtp'])->name('submit-mobile-otp');
Route::post('/access-profile', [App\Http\Controllers\UserController::class, 'accessProfile'])->name('access-profile');
Route::get('/checkout', [App\Http\Controllers\ProductController::class, 'checkOut'])->name('checkout');
Route::post('/confirm-pickup', [App\Http\Controllers\ProductController::class, 'confirmPickup'])->name('confirm-pickup');
