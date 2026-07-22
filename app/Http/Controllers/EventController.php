<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EventController extends Controller
{
    public function index(){
        $events=Event::where('status','published')
                ->orderBy('date_event','asc')
                ->get();
        return view('events.index',compact($events));
    }

}
