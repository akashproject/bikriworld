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

header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST, GET, OPTIONS, PUT, DELETE, PATCH');
header('Access-Control-Allow-Headers: Content-Type, X-Auth-Token, Origin, Authorization');

Route::get('/clear-cache', function() {
    $exitCode = Artisan::call('cache:clear');
    // return what you want
 });

Route::get('/test-mail', [App\Http\Controllers\ProductController::class, 'testMail'])->name('test-mail');

//Categories 
Route::get('/', [App\Http\Controllers\IndexController::class, 'index'])->name('index');
Route::get('/sell-old-used-product', [App\Http\Controllers\CategoriesController::class, 'index'])->name('categories-index');
Route::get('/repair-device', [App\Http\Controllers\CategoriesController::class, 'repair'])->name('categories-repair');

Route::get('/select-brand/{slug}', [App\Http\Controllers\BrandController::class, 'index'])->name('brands-index');
Route::get('/repair-select-brand/{slug}', [App\Http\Controllers\BrandController::class, 'repair'])->name('brands-repair');

//Series 
Route::get('/select-series/{slug}', [App\Http\Controllers\SeriesController::class, 'index'])->name('series-index');

//whatsapp
Route::get('/sell-old-used-laptop', [App\Http\Controllers\CategoriesController::class, 'laptopUsedWhatsapp'])->name('laptop-whatsapp');
Route::get('/sell-used-laptop', [App\Http\Controllers\CategoriesController::class, 'laptopWhatsapp'])->name('laptop-whatsapp');

//Whatsapp For Parts
Route::get('/buy-online-device-parts', [App\Http\Controllers\PartsController::class, 'index'])->name('buy-online-device-parts');

Route::post('/question', [App\Http\Controllers\QuestionController::class, 'index'])->name('question-index');
Route::post('/calculate-price', [App\Http\Controllers\QuestionController::class, 'calculatePrice'])->name('calculate-price');
Route::post('/given-accessories', [App\Http\Controllers\QuestionController::class, 'givenAccessories'])->name('given-accessories');
Route::post('/device-age', [App\Http\Controllers\QuestionController::class, 'deviceAge'])->name('device-age');
Route::post('/device-condition', [App\Http\Controllers\QuestionController::class, 'deviceCondition'])->name('device-condition');

// User Module
Route::get('/dashboard', [App\Http\Controllers\UserController::class, 'dashboard'])->name('dashboard');
Route::get('/pickups', [App\Http\Controllers\UserController::class, 'pickups'])->name('pickups');
Route::get('/payments', [App\Http\Controllers\UserController::class, 'payments'])->name('payments');
Route::get('/addresses', [App\Http\Controllers\UserController::class, 'addresses'])->name('addresses');
Route::post('/get-address', [App\Http\Controllers\UserController::class, 'getAddress'])->name('get-address');
Route::get('/add-address', [App\Http\Controllers\UserController::class, 'addAddress'])->name('add-address');
Route::get('/edit-address/{id}', [App\Http\Controllers\UserController::class, 'editAddress'])->name('edit-address');
Route::get('/delete-address/{id}', [App\Http\Controllers\UserController::class, 'deleteAddress'])->name('delete-address');
Route::post('/save-address', [App\Http\Controllers\UserController::class, 'saveAddress'])->name('save-address');
Route::post('/save-payment', [App\Http\Controllers\UserController::class, 'savePayment'])->name('save-payment');
Route::post('/save-info', [App\Http\Controllers\UserController::class, 'saveInfo'])->name('save-info');
Route::get('/logout', [App\Http\Controllers\UserController::class, 'logout'])->name('logout');
Route::get('/bw-earning', [App\Http\Controllers\UserController::class, 'bwEarning'])->name('bw-earning');
Route::get('/confirm-withdrawal', [App\Http\Controllers\UserController::class, 'confirmWithdrawal'])->name('confirm-withdrawal');
Route::get('/sevices', [App\Http\Controllers\UserController::class, 'service'])->name('sevices');

// Login Module
Route::post('/submit-mobile-otp', [App\Http\Controllers\LoginController::class, 'submitMobileOtp'])->name('submit-mobile-otp');
Route::post('/verify-otp', [App\Http\Controllers\LoginController::class, 'verifyOtp'])->name('verify-otp');
Route::post('/access-profile', [App\Http\Controllers\LoginController::class, 'accessProfile'])->name('access-profile');
Route::post('/check-exist', [App\Http\Controllers\LoginController::class, 'isUserExist'])->name('check-exist');
Route::post('/register', [App\Http\Controllers\LoginController::class, 'registerUser'])->name('register');
Route::get('/register', [App\Http\Controllers\LoginController::class, 'register'])->name('register-page');

// Product Module
Route::get('/sell-used-model/{slug}', [App\Http\Controllers\ProductController::class, 'index'])->name('products-index');
Route::get('/repair-used-model/{slug}', [App\Http\Controllers\ProductController::class, 'repair'])->name('products-repair');
Route::get('/sell-old-product/{slug}', [App\Http\Controllers\ProductController::class, 'view'])->name('sell-old-product');
Route::get('/repair-device/{slug}', [App\Http\Controllers\RepairController::class, 'view'])->name('sell-old-product');
Route::post('/filter-by-series', [App\Http\Controllers\ProductController::class, 'filterBySeries'])->name('filter-by-series');

Route::get('/add-device', [App\Http\Controllers\ProductController::class, 'add'])->name('add-device');
Route::get('/product-quote', [App\Http\Controllers\ProductController::class, 'productQuote'])->name('product-quote');
Route::get('/checkout', [App\Http\Controllers\ProductController::class, 'checkOut'])->name('checkout');
Route::post('/confirm-pickup', [App\Http\Controllers\ProductController::class, 'confirmPickup'])->name('confirm-pickup');
Route::get('/order-success', [App\Http\Controllers\ProductController::class, 'orderSuccess'])->name('order-success');
Route::post('/update-order', [App\Http\Controllers\ProductController::class, 'updateOrder'])->name('update-order');
Route::post('/cancel-order', [App\Http\Controllers\ProductController::class, 'cancelOrder'])->name('cancel-order');
Route::get('/manage-order/{id}', [App\Http\Controllers\ProductController::class, 'manageOrder'])->name('manage-order');
Route::get('/manage-service/{id}', [App\Http\Controllers\ProductController::class, 'manageService'])->name('manage-service');
Route::post('/get-question', [App\Http\Controllers\ProductController::class, 'getQuestion'])->name('get-question');
Route::post('/submit-sell-request', [App\Http\Controllers\ProductController::class, 'submitSellRequest'])->name('submit-sell-request');
Route::post('/get-product-config-price', [App\Http\Controllers\ProductController::class, 'getProductConfigPrice'])->name('get-product-config-price');


// Search Module
Route::post('/get-product-search', [App\Http\Controllers\SearchController::class, 'searchProduct'])->name('get-search-result');
Route::post('/get-city-search', [App\Http\Controllers\SearchController::class, 'searchCity'])->name('get-search-result');
Route::get('/contact-us', [App\Http\Controllers\UserController::class, 'contact'])->name('contact');
Route::post('/save-contact', [App\Http\Controllers\ContactController::class, 'saveContact'])->name('save-contact');

Route::get('/about-us', [App\Http\Controllers\UserController::class, 'aboutUs'])->name('about-us');
Route::get('/privacy-policy', [App\Http\Controllers\UserController::class, 'privacyPolicy'])->name('privacy-policy');
Route::get('/terms-conditions', [App\Http\Controllers\UserController::class, 'termsConditions'])->name('terms-conditions');


// Vehicle Module
Route::get('/view-vehicle/{id}', [App\Http\Controllers\VehicleController::class, 'view'])->name('product-view');
Route::post('/given-document', [App\Http\Controllers\VehicleController::class, 'givenDocuments'])->name('given-document');
Route::post('/vehicle-condition', [App\Http\Controllers\VehicleController::class, 'vehicleCondition'])->name('vehicle-condition');
Route::post('/book-appointment', [App\Http\Controllers\VehicleController::class, 'bookAppointment'])->name('book-appointment');
Route::post('/confirm-booking', [App\Http\Controllers\VehicleController::class, 'confirmBooking'])->name('confirm-booking');


//Repair Module
Route::post('/book-repair', [App\Http\Controllers\RepairController::class, 'bookRepair'])->name('book-repair');
Route::post('/confirm-service-booking', [App\Http\Controllers\RepairController::class, 'confirmBooking'])->name('confirm-service-booking');
Route::get('/order-repair-success', [App\Http\Controllers\RepairController::class, 'orderSuccess'])->name('order-success');

//Refer & Earn
Route::get('/refer-earn', [App\Http\Controllers\ReferEarnController::class, 'index'])->name('refer-earn');

// Api Route
Route::get('/api-categories', [App\Http\Controllers\ApiCategoriesController::class, 'apiIndex'])->name('api-categories-index');
Route::get('/api-brands/{id}', [App\Http\Controllers\ApiCategoriesController::class, 'apiBrands'])->name('api-brands-index');
Route::post('/api-products', [App\Http\Controllers\ApiProductsController::class, 'listProduct'])->name('api-products');


//Franchise Landing Page
Route::get('/become-franchise-partner', [App\Http\Controllers\IndexController::class, 'franchisePartner'])->name('franchise-partner');
Route::post('/save-franchise', [App\Http\Controllers\IndexController::class, 'saveFranchisePartner'])->name('save-franchise');
Route::get('/franchise-thank-you', [App\Http\Controllers\IndexController::class, 'franchiseThankyou'])->name('franchise-thank-you');