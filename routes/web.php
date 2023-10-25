<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AuthenticationController;

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

Route::get('/about', function () {
    return view('about');
});


Route::get('/login', [AuthenticationController::class,'login'])->middleware('guest')->name('login');
Route::post('/login', [AuthenticationController::class,'auth']);
Route::post('/logout', [AuthenticationController::class,'logout'])->middleware('userAuth')->name('logout');

Route::get('/dashboard',[DashboardController::class,'index'])->middleware('userAuth')->name('dashboard');

