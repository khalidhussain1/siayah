<?php

use App\Http\Controllers\UserController;
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

// ================================= Admin  Routes =========================

Route::group(['prefix' => 'admin'], function () {
    Route::get('/admin', function () {
        return view('admin.index');
    });
    Route::get('/add_hotels', function () {
        return view('admin.add_hotels');
    });
});
// ================================= User  Routes =========================
Route::group(['prefix' => 'user'], function () {
    Route::view('/user', 'user.index')->name('user.index');
    Route::view('/booking', 'user.hotel_booking')->name('user.hotel_booking');
    Route::post('/hotelbooking', [UserController::class,'booking'])->name('user.hotelbooking');
    Route::view('/flightoneway', 'user.flight_one_way')->name('user.flight_one_way');
    Route::post('/flightonewaybooking', [UserController::class,'flight_one_way'])->name('user.flight_one_way_booking');
    Route::view('/flighttwoway', 'user.flight_two_way')->name('user.flight_two_way');
    Route::view('/airport', 'user.airport')->name('user.airport');
    Route::view('/test', 'user.test')->name('user.test');
    Route::view('/riview', 'user.riview')->name('user.riview');

});



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
