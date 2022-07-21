<?php

use Illuminate\Support\Facades\Route;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

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
Auth::routes();

Route::get('/', function () {
    return view('auth.login');
});

//Route::get('/', [App\Http\Controllers\LoginController::class, 'index'])->name('login');

Route::get('/role', function () {
    $role = Role::create(['name' => 'Administrator']);
    $role = Role::create(['name' => 'User']);
});
Route::get('/test', function () {
    $permission = Permission::create(['name' => 'edit users']);
    $permission->assignRole('Administrator');
});
Route::get('/getRole', function () {
    return $role = Auth::user()->getRoleNames();
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');
// users
Route::get('/users', [App\Http\Controllers\UserController::class, 'index'])->name('users');
Route::get('/user/{id}', [App\Http\Controllers\UserController::class, 'show'])->name('show');

//Orders
Route::get('/orders', [App\Http\Controllers\OrderController::class, 'index'])->name('users');
Route::get('/order/{id}', [App\Http\Controllers\OrderController::class, 'show'])->name('show');
Route::post('/saveorder', [App\Http\Controllers\OrderController::class, 'save'])->name('save');

//brands
Route::get('/brands', [App\Http\Controllers\BrandController::class, 'index'])->name('brands');
Route::get('/brand/{id}', [App\Http\Controllers\BrandController::class, 'show'])->name('brand');
Route::get('/addbrand', [App\Http\Controllers\BrandController::class, 'add'])->name('addbrand');
Route::post('/submitbrand', [App\Http\Controllers\BrandController::class, 'save'])->name('submitbrand');
Route::get('/delete-brand/{id}', [App\Http\Controllers\BrandController::class, 'delete'])->name('delete-brand');

//categories
Route::get('/categories', [App\Http\Controllers\CategoriesController::class, 'index'])->name('categories');
Route::get('/category/{id}', [App\Http\Controllers\CategoriesController::class, 'show'])->name('category');
Route::get('/addcategories', [App\Http\Controllers\CategoriesController::class, 'add'])->name('addcategories');
Route::post('/submitcategories', [App\Http\Controllers\CategoriesController::class, 'save'])->name('submitcategories');
Route::get('/delete-category/{id}', [App\Http\Controllers\CategoriesController::class, 'delete'])->name('delete-category');

//Products
Route::get('/products', [App\Http\Controllers\ProductController::class, 'index'])->name('products');
Route::get('/product/{id}', [App\Http\Controllers\ProductController::class, 'show'])->name('product');
Route::get('/addproduct', [App\Http\Controllers\ProductController::class, 'add'])->name('product');
Route::post('/submitproduct', [App\Http\Controllers\ProductController::class, 'save'])->name('submitproduct');
Route::get('/product-delete/{id}', [App\Http\Controllers\ProductController::class, 'delete'])->name('product-delete');

//Series
Route::get('/serieses', [App\Http\Controllers\SeriesController::class, 'index'])->name('seriess');
Route::get('/series/{id}', [App\Http\Controllers\SeriesController::class, 'show'])->name('series');
Route::get('/addseries', [App\Http\Controllers\SeriesController::class, 'add'])->name('series');
Route::post('/submitseries', [App\Http\Controllers\SeriesController::class, 'save'])->name('submitseries');
Route::get('/series-delete/{id}', [App\Http\Controllers\SeriesController::class, 'delete'])->name('series-delete');

//Questions
Route::get('/questions', [App\Http\Controllers\QuestionController::class, 'index'])->name('questions');
Route::get('/question/{id}', [App\Http\Controllers\QuestionController::class, 'show'])->name('question');
Route::get('/addquestion', [App\Http\Controllers\QuestionController::class, 'add'])->name('question');
Route::post('/submitquestion', [App\Http\Controllers\QuestionController::class, 'save'])->name('submitquestion');
Route::get('/question-delete/{id}', [App\Http\Controllers\QuestionController::class, 'delete'])->name('question');

//Age
Route::get('/device-age', [App\Http\Controllers\QuestionController::class, 'deviceAge'])->name('device-age');
Route::get('/device-age/{id}', [App\Http\Controllers\QuestionController::class, 'showDeviceAge'])->name('show-device-age');
Route::get('/add-device-age', [App\Http\Controllers\QuestionController::class, 'addDeviceAge'])->name('add-device-age');
Route::post('/save-device-age', [App\Http\Controllers\QuestionController::class, 'saveDeviceAge'])->name('save-device-age');
Route::get('/age-delete/{id}', [App\Http\Controllers\QuestionController::class, 'deleteDeviceAge'])->name('age-delete');

//Conditions
Route::get('/conditions', [App\Http\Controllers\ConditionController::class, 'index'])->name('conditions');
Route::get('/condition/{id}', [App\Http\Controllers\ConditionController::class, 'show'])->name('condition');
Route::get('/add-condition', [App\Http\Controllers\ConditionController::class, 'add'])->name('add-condition');
Route::post('/save-condition', [App\Http\Controllers\ConditionController::class, 'save'])->name('save-condition');
Route::get('/condition-delete/{id}', [App\Http\Controllers\ConditionController::class, 'delete'])->name('condition-delete');

//Accessories
Route::get('/accessories', [App\Http\Controllers\AccessoriesController::class, 'index'])->name('accessories');
Route::get('/add-accessories', [App\Http\Controllers\AccessoriesController::class, 'add'])->name('add-accessories');
Route::get('/accessory/{id}', [App\Http\Controllers\AccessoriesController::class, 'show'])->name('accessory');
Route::get('/accessory-delete/{id}', [App\Http\Controllers\AccessoriesController::class, 'delete'])->name('accessory-delete');
Route::post('/save-accessories', [App\Http\Controllers\AccessoriesController::class, 'save'])->name('save-accessories');

//Contact
Route::get('/quaries', [App\Http\Controllers\ContactController::class, 'index'])->name('quaries');
Route::get('/quary/{id}', [App\Http\Controllers\ContactController::class, 'show'])->name('quary');
Route::post('/savequary', [App\Http\Controllers\ContactController::class, 'save'])->name('savequary');

//Sell Request
Route::get('/sell-requests', [App\Http\Controllers\SellRequestController::class, 'index'])->name('sell-requests');
Route::get('/sell-request/{id}', [App\Http\Controllers\SellRequestController::class, 'show'])->name('sell-request');
Route::post('/saverequest', [App\Http\Controllers\SellRequestController::class, 'save'])->name('saverequest');

//Configuration
Route::get('/configs', [App\Http\Controllers\DeviceConfigController::class, 'index'])->name('configs');
Route::get('/config/{id}', [App\Http\Controllers\DeviceConfigController::class, 'show'])->name('config');
Route::get('/addconfig', [App\Http\Controllers\DeviceConfigController::class, 'add'])->name('addconfig');
Route::post('/submit-config', [App\Http\Controllers\DeviceConfigController::class, 'save'])->name('submit-config');
Route::get('/delete-config/{id}', [App\Http\Controllers\DeviceConfigController::class, 'delete'])->name('delete-config');

//Configuration
Route::get('/product-config-prices', [App\Http\Controllers\ProductConfigPriceController::class, 'index'])->name('product-config-prices');
Route::get('/product-config-price/{id}', [App\Http\Controllers\ProductConfigPriceController::class, 'show'])->name('product-config-price');
Route::get('/add-product-config-price', [App\Http\Controllers\ProductConfigPriceController::class, 'add'])->name('add-product-config-price');
Route::post('/submit-product-config-price', [App\Http\Controllers\ProductConfigPriceController::class, 'save'])->name('submit-product-config-price');
Route::get('/delete-product-config-price/{id}', [App\Http\Controllers\ProductConfigPriceController::class, 'delete'])->name('delete-product-config-price');

//Vehicle COnfiguration
Route::get('/vehicle-configs', [App\Http\Controllers\VehicleVariationController::class, 'index'])->name('vehicle-configs');
Route::get('/vehicle-config/{id}', [App\Http\Controllers\VehicleVariationController::class, 'show'])->name('vehicle-config');
Route::get('/add-vehicle-config', [App\Http\Controllers\VehicleVariationController::class, 'add'])->name('add-vehicle-config');
Route::post('/submit-vehicle-config', [App\Http\Controllers\VehicleVariationController::class, 'save'])->name('submit-vehicle-config');
Route::get('/delete-vehicle-config/{id}', [App\Http\Controllers\VehicleVariationController::class, 'delete'])->name('delete-vehicle-config');