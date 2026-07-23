<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ReservationController;

Route::get('/',[HomeController::class,'index'])->name('home');
    Route::get('/login', [AuthController::class, 'showLogin'])->name('showLogin');
    Route::post('/login', [AuthController::class, 'login'])->name('login');

Route::middleware(['auth'])->group(function () {
Route::post('/addEvenment',[EventController::class,'store'])->name('AddEvents');
Route::get('/Evenments',[EventController::class,'index'])->name('Evenements');
Route::get('/addReservation',[ReservationController::class,'index'])->name('Reservations');
Route::post('/Reservation',[ReservationController::class,'store'])->name('Reservations');
Route::delete('/DeleteReservation',[ReservationController::class,'distroy'])->name('deletReservations');

Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth')->name('logout');
});