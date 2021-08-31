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

Route::post('customer/login',[\App\Http\Controllers\Api\CustomerController::class,'login']);
Route::post('customer/register',[\App\Http\Controllers\Api\CustomerController::class,'register']);

Route::group( ['prefix' => 'user','middleware' => ['auth:user-api','scopes:user'] ],function(){

   //


});
