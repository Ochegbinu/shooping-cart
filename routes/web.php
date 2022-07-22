<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Auth;
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

// Route::get('/', function () {
//     return view('welcome');
// });



Auth::routes();

Route::get('/', [HomeController::class, 'create'])->name('index');

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::post('/admin/dashboard', [HomeController::class, 'dashboard'])->name('admin');



Route::get('/categories/create', [CategoryController::class, 'create'])->name('category')->middleware('admin');
Route::post('/categories/create', [CategoryController::class, 'store'])->name('storeCategory');
Route::get('/categories/all', [CategoryController::class, 'index'])->name('allCategory');
Route::get('/categories/{id}', [CategoryController::class, 'destroy'])->name('destroy');

Route::get('/product/all', [ProductController::class, 'index'])->name('allProduct');
Route::get('/product/create', [ProductController::class, 'create'])->name('createProduct');
Route::post('/product/create', [ProductController::class, 'store'])->name('storeProduct');
Route::get('/product/destroy/{id}', [ProductController::class, 'destroy'])->name('destroy');


Route::get('/cart/add/{id}', [CartController::class, 'show'])->name('cart');
Route::get('/cart/show', [CartController::class, 'create'])->name('myCart');
Route::get('/cart/destroy/{id}', [CartController::class, 'destroy'])->name('destroy');


Route::post('/order/add', [OrderController::class, 'create'])->name('checkout');
