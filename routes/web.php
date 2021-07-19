<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BoardController;
use App\Http\Controllers\PersonController;
use App\Http\Controllers\SessionController;

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

Route::get('/', [PersonController::class,'index']);
Route::get('/find', [PersonController::class,'find']);
Route::post('/find', [PersonController::class,'search']);
Route::get('/add',[PersonController::class,'add']);
Route::post('/add',[PersonController::class,'create']);
Route::get('/edit',[PersonController::class,'edit']);
Route::post('/edit',[PersonController::class,'update']);
Route::get('/delete',[PersonController::class,'delete']);
Route::post('/delete',[PersonController::class,'remove']);
Route::get('/board', [BoardController::class,'index']);
Route::get('/board/add', [BoardController::class,'add']);
Route::post('/board/add', [BoardController::class,'create']);
Route::get('/person', [PersonController::class,'index']);
Route::get('/session', [SessionController::class,'ses_get']);
Route::post('/session', [SessionController::class,'ses_put']);
