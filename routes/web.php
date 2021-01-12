<?php

use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\AdminRingElementsController;
use App\Http\Controllers\BuyController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\DesignController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OrderController;
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


Route::get('/',[HomeController::class,'index'])->name('home');
Route::get('/home',[HomeController::class,'indexlogin'])->name('home.login.ed');



Route::get('/decide',[HomeController::class,'decide'])->name('decide');

Route::prefix('design')->group(function () {
    Route::get('/', [DesignController::class, 'first'])->name('customer.design.first');
    Route::get('second/{id}', [DesignController::class, 'second'])->name('customer.design.second');
    Route::get('third/{id}', [DesignController::class, 'third'])->name('customer.design.third');
});

Route::prefix('buy')->group(function () {
    Route::get('/', [BuyController::class, 'index'])->name('customer.buy.index');
    Route::get('rings/{id}', [BuyController::class, 'cart'])->name('customer.buy.cart');
//    Route::get('rings/{id}', [DesignController::class, 'third'])->name('customer.buy.third');
});

Route::get('cart', [CartController::class, 'index'])->name('customer.cart.index');
Route::delete('cart/{id}', [CartController::class, 'cartdel'])->name('customer.cart.destroy');

Route::get('order', [OrderController::class, 'index'])->name('customer.order.index');


Route::middleware(['auth:sanctum', 'verified'])->prefix('admin')->group(function () {
    Route::get('/', [AdminDashboardController::class, 'index'])->name('admin.dashboard.index');
    Route::get('rings', [AdminRingElementsController::class, 'index'])->name('admin.rings.index');
    Route::get('rings/create', [AdminRingElementsController::class, 'create'])->name('admin.rings.create');
    Route::get('rings/{id}/edit', [AdminRingElementsController::class, 'edit'])->name('admin.rings.edit');
    Route::delete('rings/{id}',[AdminRingElementsController::class,'destroy'])->name('admin.rings.destroy');
    Route::post('rings',[AdminRingElementsController::class,'store'])->name('admin.rings.store');
    Route::patch('rings/{id}',[AdminRingElementsController::class,'update'])->name('admin.rings.update');
});


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
