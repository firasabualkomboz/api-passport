<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
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

Route::post('seller/login',[\App\Http\Controllers\Api\LoginController::class,'sellerLogin']);
Route::post('seller/register',[\App\Http\Controllers\Api\LoginController::class,'sellerregister']);

Route::group( ['prefix' => 'seller','middleware' => ['auth:seller-api','scopes:seller'] ],function(){


    Route::get('test-seller', function () {

    return "test seller";

    });

});
