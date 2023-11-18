<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReserveController;
use App\Http\Controllers\ScheduleController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AnnouncementController;
use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\LandingpageController;
use App\Http\Controllers\ProjectController;

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


// Auth
Route::get('/login', [AuthenticationController::class, 'login'])->middleware('guest')->name('login');
Route::post('/login', [AuthenticationController::class, 'auth']);
Route::get('/login', [AuthenticationController::class, 'login'])->middleware('guest')->name('login');
Route::post('/login', [AuthenticationController::class, 'auth']);

Route::middleware(['auth'])->group(function () {
    // Auth
    Route::get('/logout', [AuthenticationController::class, 'logout'])->name('logout');
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/logout', [AuthenticationController::class, 'logout'])->name('logout');
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    // Announcement
    Route::get('/dashboard/announcement', [AnnouncementController::class, 'index'])->middleware('admin')->name('announcement.index');
    Route::get('/dashboard/announcement/show', [AnnouncementController::class, 'show'])->name('announcement');
    Route::get('/dashboard/announcement', [AnnouncementController::class, 'index'])->middleware('admin')->name('announcement.index');
    Route::get('/dashboard/announcement/show', [AnnouncementController::class, 'show'])->name('announcement');

    Route::middleware(['admin'])->group(function () {
        // Announcement Laboran
        Route::get('/dashboard/announcement/create', [AnnouncementController::class, 'create'])->name('announcement.create');
        Route::post('/dashboard/announcement/create', [AnnouncementController::class, 'store'])->name('announcement.store');
        Route::get('/dashboard/announcement/create', [AnnouncementController::class, 'create'])->name('announcement.create');
        Route::post('/dashboard/announcement/create', [AnnouncementController::class, 'store'])->name('announcement.store');

        // Schedule Laboran
        Route::get('/dashboard/schedule/{id}/edit', [ScheduleController::class, 'edit'])->name('schedule.edit');
        Route::put('/dashboard/schedule/{id}', [ScheduleController::class, 'update'])->name('schedule.update');
        Route::get('/dashboard/schedule/{date}/create', [ScheduleController::class, 'create'])->name('schedule.create');
        Route::post('/dashboard/schedule/', [ScheduleController::class, 'store'])->name('schedule.store');
        Route::get('/dashboard/schedule/{id}/edit', [ScheduleController::class, 'edit'])->name('schedule.edit');
        Route::put('/dashboard/schedule/{id}', [ScheduleController::class, 'update'])->name('schedule.update');
        Route::get('/dashboard/schedule/{date}/create', [ScheduleController::class, 'create'])->name('schedule.create');
        Route::post('/dashboard/schedule/', [ScheduleController::class, 'store'])->name('schedule.store');

        //Reservasi Laboran
        Route::get('/dashboard/reserve', [ReserveController::class, 'index'])->name('reserve.index');
        Route::get('/dashboard/reserve/reject/{reserve}', [ReserveController::class, 'reject'])->name('reserve.reject');
        Route::get('/dashboard/reserve/accept/{reserve}', [ReserveController::class, 'accept'])->name('reserve.accept');
        Route::get('/dashboard/reserve/{id}/detail', [ReserveController::class, 'show'])->name('reserve.show');
        Route::get('/dashboard/reserve/doc/{reserve}', [ReserveController::class, 'doc'])->name('reserve.doc');

        // Project Laboran
        Route::get('/dashboard/project/{id}/edit',[ProjectController::class,'edit'])->name('project.edit');
        Route::put('/dashboard/project/{id}',[ProjectController::class,'update'])->name('project.update');
        Route::delete('/dashboard/project/{id}',[ProjectController::class,'destroy'])->name('project.destroy');
        Route::get('/dashboard/project/{id}/publish',[ProjectController::class,'publish'])->name('project.publish');
        Route::get('/dashboard/project/{id}/reject',[ProjectController::class,'reject'])->name('project.reject');
        Route::get('/dashboard/project/{id}/archive',[ProjectController::class,'archive'])->name('project.archive');
    });

    // Schedule
    Route::get('/dashboard/schedule', [ScheduleController::class, 'index'])->name('schedule.index');
    Route::get('/dashboard/schedule/{date}', [ScheduleController::class, 'dateShow'])->name('schedule.date.show');
    Route::get('/dashboard/schedule/{id}/detail', [ScheduleController::class, 'show'])->name('schedule.show');
    Route::get('/dashboard/schedule', [ScheduleController::class, 'index'])->name('schedule.index');

    Route::middleware(['user'])->group(function () {
        // Reservasi User
        Route::get('/dashboard/reserve/history', [ReserveController::class, 'history'])->name('reserve.history');
        Route::get('/dashboard/reserve/create', [ReserveController::class, 'create'])->name('reserve.create');
        Route::get('/dashboard/reserve/create/{reserve}', [ReserveController::class, 'createDate'])->name('reserve.create.date');
        Route::post('/dashboard/reserve/history', [ReserveController::class, 'store'])->name('reserve.store');

        // Project User
        Route::get('/dashboard/project/create',[ProjectController::class,'create'])->name('project.create');
    });

  
    // Project
    Route::get('/dashboard/project',[ProjectController::class,'index'])->name('project.index');
    Route::post('/dashboard/project/',[ProjectController::class,'store'])->name('project.store');
    Route::get('/dashboard/project/{id}/detail',[ProjectController::class,'show'])->name('project.show');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/', [LandingpageController::class, 'index']);
Route::get('/about', [LandingpageController::class, 'about']);
