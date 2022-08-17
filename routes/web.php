<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SaranController;
use App\Http\Controllers\PengumumanController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\EditorController;
use App\Http\Controllers\PenulisController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\TopikController;

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

// Route::get('/', function () {
//     return view('index');
// });

Route::middleware(['middleware'=>'PreventBackHistory'])->group(function () {
    Auth::routes();
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'indexHome'])->name('home');

// Route::get('/admin', [App\Http\Controllers\HomeController::class, 'indexRole'])->name('indexRole');
// Route::get('/', [App\Http\Controllers\MainController::class, 'index'])->name('index');
Route::get('/about', [App\Http\Controllers\MainController::class, 'about'])->name('about');
Route::get('/contact', [App\Http\Controllers\MainController::class, 'contact'])->name('contact');
Route::get('/category', [App\Http\Controllers\MainController::class, 'category'])->name('category');

Route::group(['middleware'=>['admin','auth','PreventBackHistory']], function(){
Route::get('/admin', [App\Http\Controllers\AdminController::class, 'adminpage'])->name('indexadmin');

Route::get('/admin/berita','App\Http\Controllers\ArticleController@index')->name('admin.berita');
Route::get('/admin/create','App\Http\Controllers\ArticleController@create')->name('admin.create');
Route::post('/admin/create','App\Http\Controllers\ArticleController@store')->name('admin.create');
Route::post('/admin/berita/cari','App\Http\Controllers\ArticleController@cari')->name('admin.cari');
Route::get('/edit/{id}','App\Http\Controllers\ArticleController@edit')->name('admin.edit');
Route::post('/edit/{id}','App\Http\Controllers\ArticleController@update')->name('admin.edit');
Route::get('/admin/{id}','App\Http\Controllers\ArticleController@show')->name('admin.show');
Route::get('/admin/delete/{id}','App\Http\Controllers\ArticleController@destroy')->name('admin.delete');

Route::get('/kategori','App\Http\Controllers\KategoriController@index')->name('admin.kategori');
Route::post('/kategori','App\Http\Controllers\KategoriController@store')->name('admin.do_ketagori');
Route::get('/admin/hapus/{id}','App\Http\Controllers\KategoriController@destroy')->name('admin.delete_kategori');
Route::post('/admin/kategori/cari','App\Http\Controllers\KategoriController@search')->name('admin.carikategori');
Route::get('/edit_category/{id}','App\Http\Controllers\KategoriController@edit')->name('admin.edit_kategori');
Route::post('/edit_category/{id}','App\Http\Controllers\KategoriController@update')->name('admin.do_edit_kategori');

Route::get('/komentar','App\Http\Controllers\KomentarController@index')->name('admin.komentar');
Route::get('/detail_komen/{id}','App\Http\Controllers\KomentarController@show')->name('admin.edit_komen');
Route::post('edit_komen/{id}','App\Http\Controllers\KomentarController@update')->name('admin.do_editkomen');
Route::get('/delete_komen/{id}','App\Http\Controllers\KomentarController@destroy')->name('admin.delete_komen');

});

Route::group(['middleware'=>['penulis','auth','PreventBackHistory']], function(){
Route::get('/penulis', [App\Http\Controllers\PenulisController::class, 'penulispage'])->name('penulis.indexPenulis');
Route::get('/penulis/berita','App\Http\Controllers\PenulisController@index')->name('penulis.berita');
Route::get('/penulis/create','App\Http\Controllers\PenulisController@create')->name('penulis.create');
Route::post('/penulis/create','App\Http\Controllers\PenulisController@store')->name('penulis.create');
Route::post('/penulis/berita/cari','App\Http\Controllers\PenulisController@cari')->name('penulis.cari');
Route::get('/ubah/{id}','App\Http\Controllers\PenulisController@edit')->name('penulis.edit');
Route::post('/ubah/{id}','App\Http\Controllers\PenulisController@update')->name('penulis.edit');
Route::get('/penulis/{id}','App\Http\Controllers\PenulisController@show')->name('penulis.show');
Route::get('/penulis/delete/{id}','App\Http\Controllers\PenulisController@destroy')->name('penulis.delete');

});

Route::group(['middleware'=>['editor','auth','PreventBackHistory']], function(){
Route::get('/editor', [App\Http\Controllers\EditorController::class, 'editorpage'])->name('editor.indexEditor');
Route::get('/editor/berita','App\Http\Controllers\EditorController@index')->name('editor.berita');
Route::post('/editor/berita/cari','App\Http\Controllers\EditorController@cari')->name('editor.cari');
Route::get('/update/{id}','App\Http\Controllers\EditorController@edit')->name('editor.edit');
Route::post('/update/{id}','App\Http\Controllers\EditorController@update')->name('editor.edit');
Route::get('/editor/{id}','App\Http\Controllers\EditorController@show')->name('editor.show');
Route::get('/editor/delete/{id}','App\Http\Controllers\EditorController@destroy')->name('editor.delete');

});
    
    

Route::get('/general', [App\Http\Controllers\AdminController::class, 'general'])->name('general');
Route::get('/component', [App\Http\Controllers\AdminController::class, 'components'])->name('components');
Route::get('/button', [App\Http\Controllers\AdminController::class, 'adminbutton'])->name('buttons');
Route::get('/toastr', [App\Http\Controllers\AdminController::class, 'toastr'])->name('toastr');
Route::get('/table', [App\Http\Controllers\AdminController::class, 'table'])->name('table');
Route::get('/chart', [App\Http\Controllers\AdminController::class, 'chart'])->name('chartjs');
Route::get('/simple', [App\Http\Controllers\AdminController::class, 'simple'])->name('simple');

Route::get('/lifestyle','App\Http\Controllers\ReaderController@lifestyle')->name('reader.lifestyle');
Route::get('/kesehatan','App\Http\Controllers\ReaderController@kesehatan')->name('reader.kesehatan');
Route::get('/teknologi','App\Http\Controllers\ReaderController@teknologi')->name('reader.teknologi');
Route::get('/ekonomi','App\Http\Controllers\ReaderController@ekonomi')->name('reader.ekonomi');
Route::get('/senbud','App\Http\Controllers\ReaderController@senbud')->name('reader.senbud');
Route::get('/pertanian','App\Http\Controllers\ReaderController@pertanian')->name('reader.pertanian');
Route::get('/kreativitas','App\Http\Controllers\ReaderController@kreativitas')->name('reader.kreativitas');
Route::get('/kriminalitas','App\Http\Controllers\ReaderController@kriminalitas')->name('reader.kriminalitas');

Route::get('/','App\Http\Controllers\ReaderController@index')->name('reader.show');
// Route::get('/show','App\Http\Controllers\ReaderController@search')->name('search');
Route::post('/news/cariberita','App\Http\Controllers\ReaderController@cari')->name('reader.cr_berita');
Route::get('/news/{id}','App\Http\Controllers\ReaderController@show')->name('reader.show_news');
Route::post('/news/{id}','App\Http\Controllers\ReaderController@update')->name('reader.komentar');
Route::get('/user/list/{id}','App\Http\Controllers\ReaderController@list')->name('reader.list');

Route::get('/profileadmin', [App\Http\Controllers\AdminController::class, 'profile'])->name('profile');
Route::resource('saran',  SaranController::class);
Route::resource('pengumuman',  PengumumanController::class);
Route::get('/informasi', [App\Http\Controllers\PengumumanController::class, 'tampil'])->name('pengumuman.tampil');

// Route::group(['middleware' => 'auth'], function () {
    Route::get('profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('profile', [ProfileController::class, 'update'])->name('profile.update');

    
// });


Route::get('/post_details', [App\Http\Controllers\ArticleController::class, 'post'])->name('post_details');

