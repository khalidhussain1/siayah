<?php

use App\Http\Controllers\ApiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();

   

// });

 Route::post('/hotelbooking', [ApiController::class,'booking']);
Route::post('/flightonewaybooking', [ApiController::class,'flight_one_way']);
Route::post('/flighttwowaybooking', [ApiController::class,'flight_two_way']);
Route::post('/airport', [ApiController::class,'airport']);
Route::post('/covidtest', [ApiController::class,'covid_test']);
Route::post('/riviews', [ApiController::class,'riviews']);


