<?php

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

Route::get('/localization/{language}',[App\Http\Controllers\LocalizationController::class, 'switch'])->name('localization.switch');

Route::get('/', function () {
    return view('welcome');
});


Auth::routes([
    //agar register tidak dapat diakses
    'register' => false 
]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['prefix' => 'dashboard', 'middleware'=> ['auth']], function(){
    //dashboard
    Route::get('/', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard.index');
    //categories
    Route::get('/categories/select',[App\Http\Controllers\CategoryController::class, 'select'])->name('categories.select');
    Route::resource('/categories', App\Http\Controllers\CategoryController::class);
    Route::resource('/posts', App\Http\Controllers\PostController::class);
    Route::resource('/users', App\Http\Controllers\UserController::class);
});