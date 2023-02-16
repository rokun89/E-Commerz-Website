<?php

use App\Http\Controllers\backendController;
use App\Http\Controllers\frontendController;
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

Route::get('/',[backendController::class,'admin'])->name('base.url');

Route::get('/web',[frontendController::class,'frontend'])->name('frontend.url');
