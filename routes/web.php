<?php

use Illuminate\Routing\Route as RoutingRoute;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\deliverBoyController;
use App\Http\Controllers\CouponsController;
use App\Http\Controllers\DishController;

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

// Kupon
Route::get('/coupon/code/add', [couponsController::class, 'index'])->name('show_coupon_table');
Route::post('/coupon/code/store', [couponsController::class, 'code_store'])->name('store_coupun_code');
Route::get('/coupon/code/manage', [couponsController::class, 'code_manage'])->name('manage_coupon_code');
Route::get('/coupon/code/active/{coupon_id}', [couponsController::class, 'code_active'])->name('active_coupon_code');
Route::get('/coupon/code/inactive/{coupon_id}', [couponsController::class, 'code_inactive'])->name('inactive_coupon_code');
Route::get('/coupon/code/delete/{coupon_id}', [couponsController::class, 'code_delete'])->name('delete_coupon_code');
Route::post('/coupon/code/update', [couponsController::class, 'code_update'])->name('update_coupon_code');

//Hidangan
Route::get('/dish/add', [dishController::class, 'index'])->name('show_dish_table');
Route::post('/dish/store', [dishController::class, 'store_dish'])->name('store_dish_table');
Route::get('/dish/manage', [dishController::class, 'manage_dish'])->name('manage_dish_table');
Route::get('/dish/active/{dish_id}', [dishController::class, 'active_dish'])->name('active_dish');
Route::get('/dish/inactive/{dish_id}', [dishController::class, 'inactive_dish'])->name('inactive_dish');
Route::get('/dish/delete/{dish_id}', [dishController::class, 'delete_dish'])->name('dish_delete');
Route::post('/dish/update', [dishController::class, 'update_dish'])->name('update_dish_table');
