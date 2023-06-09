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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::middleware('auth')->group(function(){
    Route::get('/', 'DashboardController@index')->name('dashboard');
    Route::resource('user', 'UserController');
    Route::resource('barang', 'BarangController');
    Route::resource('barangmasuk', 'BarangmasukController');
    Route::resource('barangkeluar', 'BarangkeluarController');

    Route::get('/logout', 'LogoutController@perform')->name('logout.perform');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
