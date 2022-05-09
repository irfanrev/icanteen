<?php

use Illuminate\Routing\Route as RoutingRoute;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Category start
Route::get('/category/add', [CategoryController::class, 'index'])->name('show_cate_table');
Route::post('/category/store', [CategoryController::class, 'store'])->name('cate_store');
Route::get('/category/manage', [CategoryController::class, 'manage'])->name('manage_cate');