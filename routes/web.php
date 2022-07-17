<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
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



Route::get('/caetegories/create', [CategoryController::class, 'create'])->name('category');
Route::post('/caegories/create', [CategoryController::class, 'store'])->name('storeCategory');
Route::get('/categories/all', [CategoryController::class, 'index'])->name('allCategory');
Route::delete('/categories/{category}', [CategoryController::class, 'destroy'])->name('destroy');


Route::get('/product/create', [ProductController::class, 'create'])->name('createProduct');
Route::post('/product/create', [ProductController::class, 'store'])->name('storeProduct');


Route::get('/cart/add/{id}', [CartController::class, 'show'])->name('cart');
Route::get('/cart/show', [CartController::class, 'create'])->name('myCart');
