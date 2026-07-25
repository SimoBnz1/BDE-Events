<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Reservation;
use App\Models\Ticket;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class ReservationController extends Controller
{
    public function index()
    {
        $reservations = Reservation::with('event')
            ->where('user_id', Auth::id())
            ->latest()
            ->get();
        return view('student.Reservations.Reser', compact('reservations'));
    }

    public function store(Request $request, Event $event)
    {
        $userId = Auth::id();
        $exestReservation = Reservation::where('user_id', $userId)
            ->where('event_id', $event->id)
            ->exists();

        if ($exestReservation) {
            return redirect()->back()->with('error', 'Vous avez déjà réservé pour cet événement!');
        }

        if ($event->reservations()->count() >= $event->capacity) {
            return redirect()->back()->with('error', 'Désolé, cet événement est complet!');
        }

        $reservation = Reservation::create([
            'user_id' => $userId,
            'event_id' => $event->id,
            'status' => 'confirmed'
        ]);


        Ticket::create([
            'reservation_id' => $reservation->id,
            'ticket_code' => 'TICK-' . strtoupper(Str::random(8)),
            'is_used' => false,
        ]);

        
        return back()->with("messg", "reservation effucter avec succes");
    }

    public function showTicket(Reservation $reservation)
    {

        $reservation->load('event', 'ticket', 'user');

        return view('student.ticket', compact('reservation'));
    }

    public function destroy(Reservation $reservation)
    {
        if (Auth::id() !== $reservation->user_id && Auth::user()->role !== 'admin') {
            abort(403, 'Action non autorisée');
        }
        $reservation->delete();
        return redirect()->back()->with('succes', 'Reservation Annule');
    }
}
