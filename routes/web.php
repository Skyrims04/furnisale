<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Listbarang;
use App\Http\Controllers\Login;
use App\Http\Controllers\Regist;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [HomeController::class, 'index']);
Route::get('/Contact', [HomeController::class, 'Contact']);
Route::get('/Listbarang_view', [Listbarang::class, 'tampilkan']);
Route::get('/Login', [Login::class, 'Login']);
Route::get('/Regist', [Regist::class, 'Regist']);