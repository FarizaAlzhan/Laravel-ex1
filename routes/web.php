<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductController;
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

Route::group(['prefix' =>'auth'],function(){
    Route::get('register',[AuthController::class,'register'])->name('register');
    Route::get('login',[AuthController::class,'auth'])->name('auth');
    Route::post('user/create',[AuthController::class,'create'])->name('user.create');
    Route::post('signin',[AuthController::class,'login'])->name('login');
});

Route::get('/',[ProductController::class,'index'])->name('products');
Route::get('/product/{product}',[ProductController::class,'product'])->name('product');

Route::get('/product/{product}/edit',[ProductController::class,'edit'])->name('edit');
Route::post('/product/{product}/edit/save',[ProductController::class,'editSave'])->name('edit.save');
Route::get('/product/{product}/delete',[ProductController::class,'delete'])->name('delete');

Route::get('/create',[ProductController::class,'create'])->name('create');
Route::post('/store',[ProductController::class,'store'])->name('store');
