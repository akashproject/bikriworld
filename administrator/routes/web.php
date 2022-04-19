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


//Products
Route::get('/products', [App\Http\Controllers\ProductController::class, 'index'])->name('products');
Route::get('/product/{id}', [App\Http\Controllers\ProductController::class, 'show'])->name('product');
Route::get('/addproduct', [App\Http\Controllers\ProductController::class, 'add'])->name('product');
Route::post('/submitproduct', [App\Http\Controllers\ProductController::class, 'save'])->name('submitproduct');

//Questions
Route::get('/questions', [App\Http\Controllers\QuestionController::class, 'index'])->name('questions');
Route::get('/question/{id}', [App\Http\Controllers\QuestionController::class, 'show'])->name('question');
Route::get('/addquestion', [App\Http\Controllers\QuestionController::class, 'add'])->name('question');
Route::post('/submitquestion', [App\Http\Controllers\QuestionController::class, 'save'])->name('submitquestion');

//Sell Request
Route::get('/sell-requests', [App\Http\Controllers\SellRequestController::class, 'index'])->name('sell-requests');
Route::get('/sell-request/{id}', [App\Http\Controllers\SellRequestController::class, 'show'])->name('sell-request');

// Route::get('/addinstitutes', [App\Http\Controllers\InstituteController::class, 'add'])->name('addinstitutes');
// Route::post('/submitinstitutes', [App\Http\Controllers\InstituteController::class, 'save'])->name('submitinstitutes');
// Route::post('/submitinstitutecourse', [App\Http\Controllers\InstituteController::class, 'saveCourse'])->name('submitinstitutecourse');
// Route::put('/editinstitutes', [App\Http\Controllers\InstituteController::class, 'edit'])->name('editinstitutes');
// Route::get('/institute-course/{id}', [App\Http\Controllers\InstituteController::class, 'instituteCourses'])->name('institutecourses');
// Route::get('/add-institute-course/{id}', [App\Http\Controllers\InstituteController::class, 'addInstitutecourse'])->name('addinstitutecourses');


// Route::get('/countries', [App\Http\Controllers\CountryController::class, 'index'])->name('countries');
// Route::get('/addcountries', [App\Http\Controllers\CountryController::class, 'add'])->name('addinstitutes');
// Route::post('/submitcountries', [App\Http\Controllers\CountryController::class, 'save'])->name('submitcountries');
