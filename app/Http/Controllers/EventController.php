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
        return view('index', compact('events'));
    }
    public function formEvenment(){
        return view('admin.components.addEvents');
    }

    public function show(Event $event){
        return view('events.show', compact('event'));
    }

    public function store(Request $request){
        $validatedData=$request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'date_event' => 'required|date',
            'location' => 'required|string',
            'price' => 'required|numeric|min:0',
            'capacity' => 'required|integer|min:1',
            'category' => 'required|in:soiree,sport,culture,workshop,conference'
        ]);
        $validatedData['user_id'] = Auth::id();
        $validatedData['status'] = 'published';
        Event::create($validatedData);
        return redirect()->route('admin.dashboard')->with('success', 'Event créé avec succès!');
    }
}
