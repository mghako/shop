<?php

use App\Http\Controllers\Admin\Auth\LoginController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\DashboardController;
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


Route::get('/', function() {
    return view('components.frontend.shop');
})->name('home');

Route::get('/shop', function() {
    return view('components.frontend.shop');
})->name('shop');

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');


Route::prefix('admin')->name('admin.')->group(function() {
    // Auth
    Route::get('login', [LoginController::class, 'index'])->name('auth.login')->middleware('guest');
    Route::post('login',[LoginController::class, 'login'])->name('auth.login')->middleware('guest');
    Route::post('logout',[LoginController::class, 'logout'])->name('auth.logout')->middleware('auth');
    // Resource Controller
    Route::resource('categories', CategoryController::class);
    Route::resource('products', ProductController::class);
});
