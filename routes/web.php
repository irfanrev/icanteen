<?php

use Illuminate\Routing\Route as RoutingRoute;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\deliverBoyController;

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
Route::get('/category/active/{category_id}', [CategoryController::class, 'active'])->name('category_active');
Route::get('/category/inactive/{category_id}', [CategoryController::class, 'inactive'])->name('inactive_cate');
Route::get('/category/delete/{category_id}', [CategoryController::class, 'delete'])->name('delete_cate');
Route::post('/category/update', [CategoryController::class, 'update'])->name('cate_update');

// Kurir Start
Route::get('/delivery/boy/add', [deliverBoyController::class, 'index'])->name('show_deliveryBoy_add_table');
Route::post('/delivery/boy/store', [deliverBoyController::class, 'store_boy'])->name('delivery_store');
Route::get('/delivery/boy/manage', [deliverBoyController::class, 'boy_manage'])->name('delivery_boy_manage');
Route::get('/delivery/boy/delete/{delivery_boy_id}', [deliverBoyController::class, 'boy_delete'])->name('delivery_boy_delete');
Route::get('/delivery/boy/inactive/{delivery_boy_id}', [deliverBoyController::class, 'boy_inactive'])->name('delivery_boy_inactive');
Route::get('/delivery/boy/active/{delivery_boy_id}', [deliverBoyController::class, 'boy_active'])->name('delivery_boy_active');
Route::post('/delivery/boy/update', [deliverBoyController::class, 'boy_update'])->name('delivery_boy_update');

