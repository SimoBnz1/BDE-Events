@extends('layouts.app')

@section('title','Modifier Event')

@section('content')

<div class="max-w-3xl mx-auto bg-card border border-zinc-800 rounded-2xl p-8">

    <h2 class="text-3xl font-bold mb-8">
        Modifier un événement
    </h2>

    <form action="{{ route('events.update',$event->id) }}" method="POST">

        @csrf
        @method('PUT')

        <div class="space-y-5">

            <input
                type="text"
                name="title"
                value="{{ old('title',$event->title) }}"
                placeholder="Titre"
                class="w-full bg-zinc-900 border border-zinc-700 rounded-xl p-3">

            <textarea
                name="description"
                rows="5"
                class="w-full bg-zinc-900 border border-zinc-700 rounded-xl p-3">{{ old('description',$event->description) }}</textarea>

            <input
                type="date"
                name="date_event"
                value="{{ old('date_event',$event->date_event) }}"
                class="w-full bg-zinc-900 border border-zinc-700 rounded-xl p-3">

            <input
                type="text"
                name="location"
                value="{{ old('location',$event->location) }}"
                placeholder="Lieu"
                class="w-full bg-zinc-900 border border-zinc-700 rounded-xl p-3">

            <input
                type="number"
                step="0.01"
                name="price"
                value="{{ old('price',$event->price) }}"
                placeholder="Prix"
                class="w-full bg-zinc-900 border border-zinc-700 rounded-xl p-3">

            <input
                type="number"
                name="capacity"
                value="{{ old('capacity',$event->capacity) }}"
                placeholder="Capacité"
                class="w-full bg-zinc-900 border border-zinc-700 rounded-xl p-3">

            <select
                name="category"
                class="w-full bg-zinc-900 border border-zinc-700 rounded-xl p-3">

                <option value="soiree" @selected($event->category=='soiree')>Soirée</option>

                <option value="sport" @selected($event->category=='sport')>Sport</option>

                <option value="culture" @selected($event->category=='culture')>Culture</option>

                <option value="workshop" @selected($event->category=='workshop')>Workshop</option>

                <option value="conference" @selected($event->category=='conference')>Conférence</option>

            </select>

            <button
                class="w-full bg-emerald-400 text-black py-3 rounded-xl font-bold">

                Enregistrer les modifications

            </button>

        </div>

    </form>

</div>

@endsection