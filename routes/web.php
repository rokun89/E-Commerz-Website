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
use App\Http\Controllers\UserController;
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

Route::get('/login',[UserController::class,'login'])->name('login');

Route::post('/login/store',[UserController::class,'login_store'])->name('login.store');



Route::group(['middleware'=>'auth'],function(){
   Route::get('/logout',[UserController::class,'logout'])->name('logout');
   Route::get('/',[backendController::class,'dashboard'])->name('base.url');
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
   Route::get('/category/edit/{id}',[CategoryController::class,'edit'])->name('category.edit');
   Route::post('/category/update/{id}',[CategoryController::class,'update'])->name('category.update');
   Route::get('/category/delete/{id}',[CategoryController::class,'delete'])->name('category.delete');
});




Route::get('/frontend',[frontendController::class,'frontend'])->name('frontend.url');

