<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;

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
Route::resource('customers','App\Http\Controllers\CustomerController');


Route::get('/',[HomeController::class,'index'])->name('home.index');


Route::group(['prefix'=>'customer'],function(){
    Route::post('/create',[CustomerController::class,'create'])->name('customer.add');
    Route::post('/create',[CustomerController::class,'store'])->name('customer.store');
    Route::get('/getLogin',[CustomerController::class,'getLogin'])->name('customer.getLogin');
    Route::post('/postLogin',[CustomerController::class,'postLogin'])->name('customer.postLogin');
    Route::post('/postAddCustomer',[CustomerController::class,'postAddCustomer'])->name('customer.postAddCustomer');
    Route::get('/getListCustomer',[CustomerController::class,'getListCustomer'])->name('customer.getListCustomer');
    Route::get('/getRegister',[CustomerController::class,'getRegister'])->name('customer.getRegister');
    Route::post('/getRegister',[CustomerController::class,'postRegister'])->name('customer.postRegister');
    Route::post('/home',[CustomerController::class,'getHome'])->name('customer.getHome');
});

Route::group(['prefix'=>'category'],function(){
    Route::get('/getListCategory',[CategoryController::class,'index'])->name('customer.getListCategory');

});

Route::group(['prefix'=>'product'],function(){
    Route::get('/getListProduct',[ProductController::class,'index'])->name('product.getListProduct');
    Route::get('/getListProductByCategoryId/{id}',[ProductController::class,'getListProductByCategoryId'])->name('product.getListProductByCategoryId');
    Route::get('/getProductDetail/{id}',[ProductController::class,'getProductDetail'])->name('product.getProductDetail');

});
Route::group(['prefix'=>'user'],function(){
    Route::get('/getLogin',[UserController::class,'getLogin'])->name('user.getLogin');
    Route::post('/postLogin',[UserController::class,'postLogin'])->name('user.postLogin');
});










