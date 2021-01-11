<?php

use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\AdminPostsController;
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

Route::prefix('admin')->group(function () {
    Route::get('/', [AdminDashboardController::class, 'index'])->name('admin.dashboard.index');

    Route::get('posts', [AdminPostsController::class, 'index'])->name('admin.posts.index');
    Route::get('posts/create', [AdminPostsController::class, 'create'])->name('admin.posts.create');
    Route::get('posts/{id}/edit', [AdminPostsController::class, 'edit'])->name('admin.posts.edit');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
