<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AnnouncementController;
use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\ScheduleController;

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

Route::middleware(['auth'])->group(function () {
    Route::get('/logout', [AuthenticationController::class,'logout'])->name('logout');

    Route::get('/dashboard',[DashboardController::class,'index'])->name('dashboard');

    // Pengumuman
    Route::get('/dashboard/pengumuman/show', [AnnouncementController::class,'show'])->name('pengumuman');

    Route::middleware(['admin'])->group(function () {
        Route::get('/dashboard/pengumuman/create', [AnnouncementController::class,'create'])->name('pengumuman.create');
        Route::post('/dashboard/pengumuman/create', [AnnouncementController::class,'store'])->name('pengumuman.store');
        // Route::resource('dashboard/schedule', ScheduleController::class);
        Route::get('/dashboard/schedule/{id}/edit', [ScheduleController::class,'edit'])->name('schedule.edit');
        Route::put('/dashboard/schedule/', [ScheduleController::class,'update'])->name('schedule.update');
        Route::get('/dashboard/schedule/create', [ScheduleController::class,'create'])->name('schedule.create');
        Route::post('/dashboard/schedule/', [ScheduleController::class,'store'])->name('schedule.store');
    });
    
    Route::get('/dashboard/schedule', [ScheduleController::class,'index'])->name('schedule.index');
    Route::get('/dashboard/schedule/{date}', [ScheduleController::class,'dateShow'])->name('schedule.date.show');
    Route::get('/dashboard/schedule/{id}/detail', [ScheduleController::class,'show'])->name('schedule.show');

    Route::get('/dashboard/pengumuman', [AnnouncementController::class,'index'])->middleware('admin')->name('pengumuman.index');

});