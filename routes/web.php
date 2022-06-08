<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;

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

/*Route::resource('book',BookController::class);*/

Route::get('/home',[BookController::class,'home'])->name('home');
Route::get('/',[BookController::class,'index'])->name('index');
Route::get('/upload_file',[BookController::class,'create'])->name('create');
Route::post('/upload_file',[BookController::class,'store'])->name('store');
Route::get('/index',[BookController::class,'index'])->name('index');
Route::get('/detail/{id}',[BookController::class,'show'])->name('show');
Route::get('/edit/{id}',[BookController::class,'edit'])->name('edit');
Route::put('/update/{id}',[BookController::class,'update'])->name('update');
Route::delete('/destroy/{id}',[BookController::class,'destroy'])->name('destroy');
