<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/register',[AuthController::class,'register'])->name('user.register');
Route::get('/login',[AuthController::class,'formLogin'])->name('users.login');
Route::post('/login',[AuthController::class,'login'])->name('login');
Route::post('/logout',[AuthController::class,'logout'])->name('post.logout');

Route::middleware('auth')->prefix('users')->name('users.')->controller(UserController::class)->group(function(){
    Route::post('/register','store')->name('store')->withoutMiddleware('auth');
    Route::get('/','index')->name('index');

});

