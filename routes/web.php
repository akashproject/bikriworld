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

Route::get('/clear-cache', function() {
    $exitCode = Artisan::call('cache:clear');
    // return what you want
 });

// Route::get('/test-mail', function() {
    
//     //return view('emails.order');
// });
Route::get('/test-mail', [App\Http\Controllers\ProductController::class, 'testMail'])->name('test-mail');

//Categories 
Route::get('/', [App\Http\Controllers\IndexController::class, 'index'])->name('index');
Route::get('/selling-categories', [App\Http\Controllers\CategoriesController::class, 'index'])->name('categories-index');
Route::get('/selling-brands/{id}', [App\Http\Controllers\BrandController::class, 'index'])->name('brands-index');

Route::post('/question', [App\Http\Controllers\QuestionController::class, 'index'])->name('question-index');
Route::post('/calculate-price', [App\Http\Controllers\QuestionController::class, 'calculatePrice'])->name('calculate-price');
Route::post('/given-accessories', [App\Http\Controllers\QuestionController::class, 'givenAccessories'])->name('given-accessories');
Route::post('/device-age', [App\Http\Controllers\QuestionController::class, 'deviceAge'])->name('device-age');

// User Module
Route::get('/dashboard', [App\Http\Controllers\UserController::class, 'dashboard'])->name('dashboard');
Route::get('/pickups', [App\Http\Controllers\UserController::class, 'pickups'])->name('pickups');
Route::get('/payments', [App\Http\Controllers\UserController::class, 'payments'])->name('payments');
Route::get('/addresses', [App\Http\Controllers\UserController::class, 'addresses'])->name('addresses');
Route::get('/add-address', [App\Http\Controllers\UserController::class, 'addAddress'])->name('add-address');
Route::get('/edit-address/{id}', [App\Http\Controllers\UserController::class, 'editAddress'])->name('edit-address');
Route::get('/delete-address/{id}', [App\Http\Controllers\UserController::class, 'deleteAddress'])->name('delete-address');
Route::post('/save-address', [App\Http\Controllers\UserController::class, 'saveAddress'])->name('save-address');
Route::post('/save-payment', [App\Http\Controllers\UserController::class, 'savePayment'])->name('save-payment');
Route::post('/save-info', [App\Http\Controllers\UserController::class, 'saveInfo'])->name('save-info');
Route::get('/logout', [App\Http\Controllers\UserController::class, 'logout'])->name('logout');

// Login Module
Route::post('/submit-mobile-otp', [App\Http\Controllers\LoginController::class, 'submitMobileOtp'])->name('submit-mobile-otp');
Route::post('/access-profile', [App\Http\Controllers\LoginController::class, 'accessProfile'])->name('access-profile');
Route::post('/check-exist', [App\Http\Controllers\LoginController::class, 'isUserExist'])->name('check-exist');
Route::post('/register', [App\Http\Controllers\LoginController::class, 'registerUser'])->name('register');

// Product Module
Route::get('/selling-products/{id}', [App\Http\Controllers\ProductController::class, 'index'])->name('products-index');
Route::get('/view-product/{id}', [App\Http\Controllers\ProductController::class, 'view'])->name('product-view');
Route::get('/add-device', [App\Http\Controllers\ProductController::class, 'add'])->name('add-device');
Route::get('/product-quote', [App\Http\Controllers\ProductController::class, 'productQuote'])->name('product-quote');
Route::get('/checkout', [App\Http\Controllers\ProductController::class, 'checkOut'])->name('checkout');
Route::post('/confirm-pickup', [App\Http\Controllers\ProductController::class, 'confirmPickup'])->name('confirm-pickup');
Route::get('/order-success', [App\Http\Controllers\ProductController::class, 'orderSuccess'])->name('order-success');
Route::post('/get-question', [App\Http\Controllers\ProductController::class, 'getQuestion'])->name('get-question');
Route::post('/submit-sell-request', [App\Http\Controllers\ProductController::class, 'submitSellRequest'])->name('submit-sell-request');


// Search Module
Route::post('/get-product-search', [App\Http\Controllers\SearchController::class, 'searchProduct'])->name('get-search-result');
Route::post('/get-city-search', [App\Http\Controllers\SearchController::class, 'searchCity'])->name('get-search-result');
Route::get('/contact-us', [App\Http\Controllers\UserController::class, 'contact'])->name('contact');
Route::post('/save-contact', [App\Http\Controllers\ContactController::class, 'saveContact'])->name('save-contact');

Route::get('/about-us', [App\Http\Controllers\UserController::class, 'aboutUs'])->name('about-us');
Route::get('/privacy-policy', [App\Http\Controllers\UserController::class, 'privacyPolicy'])->name('privacy-policy');
Route::get('/terms-conditions', [App\Http\Controllers\UserController::class, 'termsConditions'])->name('terms-conditions');


