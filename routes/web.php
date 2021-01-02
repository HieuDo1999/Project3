<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CartController;


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
    Route::get('/getAdd',[ProductController::class,'getAdd'])->name('product.getAdd');
    Route::post('/postAdd',[ProductController::class,'postAdd'])->name('product.postAdd');
    Route::get('/delete/{id}',[ProductController::class,'delete'])->name('product.delete');
    Route::post('/edit',[ProductController::class,'edit'])->name('product.edit');
    Route::post('/viewProductByName',[ProductController::class,'viewProductByName'])->name('product.viewProductByName');
    Route::get('/getListProduct',[ProductController::class,'index'])->name('product.getListProduct');
    Route::get('/getListProductByCategoryId/{id}',[ProductController::class,'getListProductByCategoryId'])->name('product.getListProductByCategoryId');
   
    Route::get('/getProductDetail/{id}',[ProductController::class,'getProductDetail'])->name('product.getProductDetail');

});
Route::group(['prefix'=>'user'],function(){
    Route::get('/getLogin',[UserController::class,'getLogin'])->name('user.getLogin');
    Route::post('/postLogin',[UserController::class,'postLogin'])->name('user.postLogin');
    Route::get('/logout',[UserController::class,'logout'])->name('user.logout');
    Route::get('/getRegister',[UserController::class,'getRegister'])->name('user.getRegister');
    Route::post('/postRegister',[UserController::class,'postRegister'])->name('user.postRegister');
    Route::get('/index',[UserController::class,'index'])->name('user.index');
    Route::post('/viewUserByEmail',[UserController::class,'viewUserByEmail'])->name('user.viewUserByEmail');

});
Route::group(['prefix'=>'admin'],function(){
    Route::get('/home',[AdminController::class,'index'])->name('admin.home');
});

Route::group(['prefix'=>'cart'],function(){
    Route::post('/addToCart',[CartController::class,'addToCart'])->name('cart.addToCart');
});










