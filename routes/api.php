<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use app\Http\Controllers\UserController;

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

 Route::post('/hotelbooking', [UserController::class,'booking']);
 Route::get('/test', [app\Http\Controllers\UserController::class,'test']);

 Route::get('/check', function () {
    return response()->json([
            'message'=>'created Successfully'
        ]);
});
