<?php

use App\Http\Controllers\API\ProductController;
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
//
//Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//    return $request->user();
//});

Route::get('/products',[\App\Http\Controllers\API\ProductController::class,'index']);

Route::delete('/product/{product}/delete',[\App\Http\Controllers\API\ProductController::class,'del']);


Route::post('/store',[\App\Http\Controllers\API\ProductController::class,'store']);

Route::put('/product/{product}/edit',[\App\Http\Controllers\API\ProductController::class,'edit']);

Route::post('/registration',[\App\Http\Controllers\API\AuthApiController::class,'registration']);

Route::post('/Login',[\App\Http\Controllers\API\AuthApiController::class,'Login']);
