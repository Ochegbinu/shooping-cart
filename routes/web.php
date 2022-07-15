<?php

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

Route::get('/', [HomeController::class, 'create']);

Route::get('/home', [HomeController::class, 'index'])->name('home');



Route::get('/create-category', [CategoryController::class, 'create'])->name('category');
Route::post('/create-category', [CategoryController::class, 'store'])->name('storeCategory');
Route::get('/all-categories', [CategoryController::class, 'index'])->name('allCategory');
Route::get('/destroy-category/{id}', [CategoryController::class, 'destroy'])->name('destroy');


Route::get('/create-product', [ProductController::class, 'create'])->name('createProduct');
Route::post('/create-product', [ProductController::class, 'store'])->name('storeProduct');


