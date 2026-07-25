<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ReservationController;

Route::get('/',[EventController::class, 'index'])->name('index');
Route::get('/login', [AuthController::class, 'showLogin'])->name('showLogin');
Route::post('/login', [AuthController::class, 'login'])->name('login');

Route::middleware(['auth'])->group(function () {
   
    Route::get(
        '/admin/dashboard',
        [HomeController::class, 'dashboard']
    )
        ->name('admin.dashboard');

    Route::get(
        '/admin/events',
        [HomeController::class, 'events']
    )
        ->name('admin.events');
    Route::get(
        '/admin/events',
        [HomeController::class, 'events']
    )
        ->name('student.events');

    Route::get(
        '/admin/reservations',
        [HomeController::class, 'reservations']
    )
        ->name('admin.reservations');
     Route::get(
        '/student/dashboard',
        [HomeController::class, 'dashboardStudent']
    )
        ->name('student.dashboard');

    Route::get('/events', [HomeController::class, 'dashboard'])->name('home');

    Route::get('/formEvenment', [EventController::class, 'formEvenment'])->name('creatEvenment');

    Route::post('/addEvenment', [EventController::class, 'store'])->name('AddEvents');

    Route::get('/Evenments', [EventController::class, 'index'])->name('Evenements');

    Route::get('/addReservation', [ReservationController::class, 'index'])->name('AddReservations');

    Route::post('/Reservation', [ReservationController::class, 'store'])->name('Reservations');

    Route::delete('/DeleteReservation', [ReservationController::class, 'distroy'])->name('deletReservations');

    Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth')->name('logout');
});
