@extends('layouts.app')

@section('title', 'Events')

@section('content')

@if (session("messg"))
    <div class="mb-6 glass p-4 rounded-xl border border-cyan-500/30 text-cyan-300 text-sm flex items-center gap-3">
        <i data-lucide="check-circle" class="w-5 h-5 text-cyan-400"></i>
        <span>{{ session("messg") }}</span>
    </div>
@endif

<div class="flex items-center justify-between mb-8">
    <div>
        <div class="inline-flex items-center gap-2 glass px-4 py-1.5 rounded-full text-cyan-300 text-xs mb-3">
            <i data-lucide="sparkles" class="w-3.5 h-3.5 text-cyan-400"></i>
            Événements
        </div>
        <h2 class="text-3xl font-black text-white">
            <span class="gradient-text">Events</span> disponibles
        </h2>
    </div>
</div>

<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
    @foreach($events as $event)
    <div class="glass rounded-2xl overflow-hidden hover:border-cyan-500/50 hover:shadow-neon transition-all duration-300 flex flex-col group">
        
        <div class="relative h-48 bg-slate-900 overflow-hidden">
            <img 
                src="https://images.unsplash.com/photo-1511578314322-379afb476865" 
                class="w-full h-full object-cover group-hover:scale-105 transition duration-500"
                alt="{{ $event->title }}"
            >
            <div class="absolute inset-0 bg-gradient-to-t from-surface via-transparent to-transparent"></div>

            <span class="absolute top-4 right-4 bg-cyan-400 text-dark text-xs font-black px-3 py-1 rounded-full uppercase tracking-wider shadow-md">
                @if($event->price == 0)
                    Gratuit
                @else
                    {{ $event->price }} DH
                @endif
            </span>
        </div>

        <div class="p-6 flex-1 flex flex-col justify-between space-y-4">
            <div>
                <p class="text-xs font-semibold text-cyan-400 uppercase tracking-wider mb-1">
                    {{ $event->category }}
                </p>

                <h3 class="text-xl font-bold text-white group-hover:text-cyan-400 transition-colors">
                    {{ $event->title }}
                </h3>

                <p class="text-gray-400 text-sm mt-2 line-clamp-2">
                    {{ $event->description }}
                </p>
            </div>

            <div class="space-y-2 text-xs text-gray-400 border-t border-white/10 pt-4">
                <div class="flex items-center gap-2">
                    <i data-lucide="calendar" class="w-4 h-4 text-cyan-400"></i>
                    <span>{{ $event->date_event }}</span>
                </div>

                <div class="flex items-center gap-2">
                    <i data-lucide="map-pin" class="w-4 h-4 text-cyan-400"></i>
                    <span>{{ $event->location }}</span>
                </div>

                <div class="flex items-center gap-2">
                    <i data-lucide="users" class="w-4 h-4 text-cyan-400"></i>
                    <span>{{ $event->capacity }} places</span>
                </div>
            </div>

            <form action="{{ route('Reservations', $event) }}" method="POST" class="w-full pt-2">
                @csrf
                <button type="submit" class="w-full py-3 rounded-xl gradient-btn text-white font-extrabold text-sm hover:opacity-90 transition-all shadow-md">
                    S'inscrire
                </button>
            </form>
        </div>

    </div>
    @endforeach
</div>

@endsection