<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;

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

Route::get('/',[TodoController::class,'index'])->name('todos');

Route::get('/create',[TodoController::class,'create'])->name('create');

Route::post('/create', [TodoController::class,'store']);

Route::get('/edit/{id}',[TodoController::class,'edit'] )->name('edit');

Route::post('/edit/{id}', [TodoController::class,'update']);

Route::get('/delete/{id}', [TodoController::class,'destroy']);