<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SaranController;
use App\Http\Controllers\UserController;

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

Route::get('/', function () {
    return view('index');
});

Auth::routes();

// Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('index');
Route::get('/about', [App\Http\Controllers\MainController::class, 'about'])->name('about');
Route::get('/contact', [App\Http\Controllers\MainController::class, 'contact'])->name('contact');
// Route::get('/logins', [App\Http\Controllers\MainController::class, 'login'])->name('login');
// Route::get('/login', [App\Http\Controllers\MainController::class, 'loginadmin'])->name('auth.login');
Route::get('/category', [App\Http\Controllers\MainController::class, 'category'])->name('category');
Route::get('/admin', [App\Http\Controllers\AdminController::class, 'adminpage'])->name('indexadmin');
Route::get('/general', [App\Http\Controllers\AdminController::class, 'general'])->name('general');
Route::get('/component', [App\Http\Controllers\AdminController::class, 'components'])->name('components');
Route::get('/button', [App\Http\Controllers\AdminController::class, 'adminbutton'])->name('buttons');
Route::get('/toastr', [App\Http\Controllers\AdminController::class, 'toastr'])->name('toastr');
Route::get('/table', [App\Http\Controllers\AdminController::class, 'table'])->name('table');
Route::get('/chart', [App\Http\Controllers\AdminController::class, 'chart'])->name('chartjs');
Route::get('/simple', [App\Http\Controllers\AdminController::class, 'simple'])->name('simple');
// Route::get('/profile', [App\Http\Controllers\AdminController::class, 'profile'])->name('profile');
// Route::get('/profile', [App\Http\Controllers\UserController::class, 'index'])->name('profile.index');
// Route::get('/edit', [App\Http\Controllers\UserController::class, 'edit'])->name('profile.index');
Route::resource('profile', UserController::class);
Route::get('profile', [App\Http\Controllers\UserController::class, 'edit'])->name('profile.edit');
Route::patch('profile', [App\Http\Controllers\UserController::class, 'update'])->name('profile.update');
// Route::get('/sign-up', [App\Http\Controllers\MainController::class, 'signup'])->name('sin-up');
// Route::get('/register', [App\Http\Controllers\MainController::class, 'register'])->name('auth.register');


Route::resource('saran',  SaranController::class);