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
Route::put('/edituser', [App\Http\Controllers\UserController::class, 'edit'])->name('show');

//institutes
Route::get('/institutes', [App\Http\Controllers\InstituteController::class, 'index'])->name('institutes');
Route::get('/institute/{id}', [App\Http\Controllers\InstituteController::class, 'show'])->name('institute');
Route::get('/addinstitutes', [App\Http\Controllers\InstituteController::class, 'add'])->name('addinstitutes');
Route::post('/submitinstitutes', [App\Http\Controllers\InstituteController::class, 'save'])->name('submitinstitutes');
Route::post('/submitinstitutecourse', [App\Http\Controllers\InstituteController::class, 'saveCourse'])->name('submitinstitutecourse');
Route::put('/editinstitutes', [App\Http\Controllers\InstituteController::class, 'edit'])->name('editinstitutes');
Route::get('/institute-course/{id}', [App\Http\Controllers\InstituteController::class, 'instituteCourses'])->name('institutecourses');
Route::get('/add-institute-course/{id}', [App\Http\Controllers\InstituteController::class, 'addInstitutecourse'])->name('addinstitutecourses');


Route::get('/countries', [App\Http\Controllers\CountryController::class, 'index'])->name('countries');
Route::get('/addcountries', [App\Http\Controllers\CountryController::class, 'add'])->name('addinstitutes');
Route::post('/submitcountries', [App\Http\Controllers\CountryController::class, 'save'])->name('submitcountries');
