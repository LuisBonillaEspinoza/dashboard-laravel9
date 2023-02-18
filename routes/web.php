<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LogoutController;
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

Route::get('/', function () {
    return view('welcome');
});

//Registro
Route::get('/registro',[RegisterController::class,'index'])->name('register.index');
Route::post('/registro/guardar',[RegisterController::class,'store'])->name('register.store');

//Login
Route::get('/login',[LoginController::class,'index'])->name('login.index');
Route::post('/login',[LoginController::class,'login'])->name('login.login');

//Home
Route::get('/home',[HomeController::class,'index'])->name('home.index');

//Logout
Route::get('/logout',[LogoutController::class,'logout'])->name('logout.logout');