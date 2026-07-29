<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ReservationController;


Route::get('/', [EventController::class, 'index'])->name('index');
Route::get('/login', [AuthController::class, 'showLogin'])->name('showLogin');
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::get('/events/category/{category}', [EventController::class, 'filter'])
    ->name('events.category');


Route::middleware(['auth'])->group(function () {
    Route::middleware(['is_admin'])->group(function () {
        Route::get('/admin/dashboard', [HomeController::class, 'Events'])->name('admin.dashboard');
        Route::get('/admin/events', [HomeController::class, 'eventsAdmin'])->name('admin.events');
        Route::get('/admin/reservations', [HomeController::class, 'reservations'])->name('admin.reservations');
        Route::get('/formEvenment', [EventController::class, 'formEvenment'])->name('creatEvenment');
        Route::post('/addEvenment', [EventController::class, 'store'])->name('AddEvents');

        Route::get('/admin/events/{event}/edit', [EventController::class, 'edit'])
            ->name('events.edit');

        Route::put('/admin/events/{event}', [EventController::class, 'update'])
            ->name('events.update');

        Route::delete('/admin/events/{event}', [EventController::class, 'destroy'])
            ->name('events.destroy');
    });



    Route::get('/student/dashboard', [HomeController::class, 'dashboardStudent'])->name('student.dashboard');
    Route::get('/student/events', [HomeController::class, 'eventsStudent'])->name('student.events');
    Route::get('/Reservation', [ReservationController::class, 'index'])->name('student.reservations');
    Route::post('/Reservation/{event}', [ReservationController::class, 'store'])->name('Reservations');
    Route::delete('/student/reservation/{reservation}', [ReservationController::class, 'destroy'])->name('student.reservation.destroy');
    Route::get('/student/ticket/{reservation}', [ReservationController::class, 'showTicket'])->name('student.ticket.show');


    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});
