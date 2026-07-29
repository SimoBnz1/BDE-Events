<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Reservation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EventController extends Controller
{
    
    public function index()
    {
        $events = Event::where('status', 'published')
            ->orderBy('date_event', 'asc')
            ->get();
        return view('index', compact('events'));
    }
    public function formEvenment()
    {
        return view('admin.components.addEvents');
    }

    public function show(Event $event)
    {
        return view('events.show', compact('event'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
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
    public function filter($category)
    {
        $events = Event::where('category', $category)
            ->where('status', 'published')
            ->orderBy('date_event', 'asc')
            ->get();

        return view('index', compact('events'));
    }
    public function edit(Event $event)
{
    return view('admin.components.editEvent', compact('event'));
}

public function update(Request $request, Event $event)
{
    $validated = $request->validate([
        'title' => 'required|string|max:255',
        'description' => 'required|string',
        'date_event' => 'required|date',
        'location' => 'required|string|max:255',
        'price' => 'required|numeric|min:0',
        'capacity' => 'required|integer|min:1',
        'category' => 'required|in:soiree,sport,culture,workshop,conference',
    ]);

    $event->update($validated);

    return redirect()->route('admin.events')
        ->with('success','Evénement modifié avec succès.');
}

public function destroy(Event $event)
{
    $event->delete();

    return redirect()->route('admin.events')
        ->with('success','Evénement supprimé avec succès.');
}

}
