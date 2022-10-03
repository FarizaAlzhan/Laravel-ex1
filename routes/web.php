<?php

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

Route::get('/',[ProductController::class,'index']);
Route::get('/product/{product}',[ProductController::class,'product'])->name('product');

Route::get('/product/{product}/edit',[ProductController::class,'edit'])->name('edit');
Route::post('/{product}/edit/save',[ProductController::class,'editSave'])->name('edit.save');

Route::get('/create',[ProductController::class,'create'])->name('create');
Route::post('/store',[ProductController::class,'store'])->name('store');
