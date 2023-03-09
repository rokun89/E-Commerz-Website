<?php

use App\Http\Controllers\backendController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\frontendController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RoleController;
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

   // Route For sidebar
Route::get('/role',[RoleController::class,'role'])->name('role.url');
Route::get('/permission',[PermissionController::class,'permission'])->name('permission.url');
Route::get('/category',[CategoryController::class,'category'])->name('category.url');
Route::get('/brand',[BrandController::class,'brand'])->name('brand.url');
Route::get('/product',[ProductController::class,'product'])->name('product.url');
Route::get('/order',[OrderController::class,'order'])->name('order.url');
Route::get('/payment',[PaymentController::class,'payment'])->name('payment.url');
Route::get('/report',[backendController::class,'report'])->name('report.url');


// Categories Route
Route::get('/create/category',[CategoryController::class,'CreateNewCategory'])->name('create.category');
Route::post('/category/store',[CategoryController::class,'CategoryStore'])->name('category.store');
Route::get('/category/view/{id}',[CategoryController::class,'view'])->name('category.view');



Route::get('/web',[frontendController::class,'frontend'])->name('frontend.url');

