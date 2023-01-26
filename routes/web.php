<?php

use App\Http\Controllers\ContactControlller;
use App\Http\Controllers\SessionController;
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

Route::resource('/contact', ContactControlller::class)->middleware('isLogin');
Route::get('/', function () {
    return redirect('sesi');
});
Route::get('/sesi',[SessionController::class,'index'])->middleware('isLoginSuccess');
Route::post('/sesi/login',[SessionController::class,'login']);
Route::get('/sesi/logout',[SessionController::class,'logout']);
