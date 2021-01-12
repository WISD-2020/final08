<?php

use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\AdminRingElementsController;
use App\Http\Controllers\HomeController;
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
