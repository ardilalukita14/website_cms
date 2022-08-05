<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SaranController;
use App\Http\Controllers\ProfileController;

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
Route::get('/category', [App\Http\Controllers\MainController::class, 'category'])->name('category');
Route::get('/admin', [App\Http\Controllers\AdminController::class, 'adminpage'])->name('indexadmin');
Route::get('/general', [App\Http\Controllers\AdminController::class, 'general'])->name('general');
Route::get('/component', [App\Http\Controllers\AdminController::class, 'components'])->name('components');
Route::get('/button', [App\Http\Controllers\AdminController::class, 'adminbutton'])->name('buttons');
Route::get('/toastr', [App\Http\Controllers\AdminController::class, 'toastr'])->name('toastr');
Route::get('/table', [App\Http\Controllers\AdminController::class, 'table'])->name('table');
Route::get('/chart', [App\Http\Controllers\AdminController::class, 'chart'])->name('chartjs');
Route::get('/simple', [App\Http\Controllers\AdminController::class, 'simple'])->name('simple');
Route::get('/profileadmin', [App\Http\Controllers\AdminController::class, 'profile'])->name('profile');
Route::resource('saran',  SaranController::class);
// Route::resource('profile',  UserController::class);

Route::group(['middleware' => 'auth'], function () {
    Route::get('profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('profile', [ProfileController::class, 'update'])->name('profile.update');
});
