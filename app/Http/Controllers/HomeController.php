<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Reservation;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function dashboard()
    {
        $students = User::where('role', 'student')->count();
        $reservations = Reservation::count();
        $eventsCount = Event::count();
        $revenue = Event::sum('price');
        return view('admin.dashboard', compact('eventsCount', 'reservations', 'students', 'revenue'));
    }

    public function dashboardStudent()
    {
        $events = Event::where('status', 'published')
            ->orderBy('date_event', 'asc')
            ->get();
        $myReservations = Reservation::where('user_id', Auth::id())
            ->count();
        $availableEvents = Event::where('status', 'published')
            ->count();
        return view(
            'student.dashboard',
            compact(
                'events',
                'myReservations',
                'availableEvents'
            )
        );
    }
    

    public function events()
    {
        $events = Event::latest()->get();

        return view('student.events', compact('events'));
    }

    public function reservations()
    {
        return view('admin.reservations.index');
    }
}
