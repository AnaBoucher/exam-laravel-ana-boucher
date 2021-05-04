<?php

use App\Http\Controllers\TaskController;
use App\Http\Controllers\ShowController;
use App\Http\Controllers\OrderController;
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

Route::get('/', [TaskController::class, 'index']);
Route::get('/',[OrderController::class,'order']);
Route::get('/task/{task}', [ShowController::class, 'show']);
Route::get('/task/{task}/delete', [ShowController::class,'delete']);
