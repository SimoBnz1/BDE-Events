@extends('layouts.app')

@section('title','Mes Réservations')

@section('content')

<div class="mb-10">
    <div class="inline-flex items-center gap-2 glass px-4 py-1.5 rounded-full text-cyan-300 text-xs mb-3">
        <i data-lucide="ticket" class="w-3.5 h-3.5 text-cyan-400"></i>
        Pass & Billets
    </div>

    <h1 class="text-3xl sm:text-4xl font-black text-white">
        Mes <span class="gradient-text">Réservations</span>
    </h1>

    <p class="text-gray-400 text-sm mt-1">
        Retrouvez tous vos billets d'événements et confirmation de places
    </p>
</div>

<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">

    @forelse($reservations as $reservation)

    <div class="glass rounded-2xl p-6 hover:border-cyan-500/40 hover:shadow-neon transition-all duration-300 flex flex-col justify-between group relative overflow-hidden">

        <div class="absolute top-0 right-0 w-24 h-24 bg-cyan-500/5 rounded-bl-full pointer-events-none"></div>

        <div>
            <div class="flex items-center justify-between gap-2 mb-3">
                <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-xs font-semibold bg-emerald-500/10 text-emerald-400 border border-emerald-500/20">
                    <span class="w-1.5 h-1.5 rounded-full bg-emerald-400 animate-pulse"></span>
                    Confirmée
                </span>
                <span class="text-xs font-mono text-gray-500">
                    {{ $reservation->id ?? 'PASS' }}
                </span>
            </div>

            <h3 class="text-xl font-bold text-white group-hover:text-cyan-400 transition-colors">
                {{ $reservation->event->title }}
            </h3>

            <p class="text-gray-400 text-sm mt-2 line-clamp-2">
                {{ $reservation->event->description }}
            </p>
        </div>

        <div class="mt-6 pt-4 border-t border-white/10 space-y-2.5 text-xs text-gray-300">

            <div class="flex items-center gap-2">
                <i data-lucide="calendar" class="w-4 h-4 text-cyan-400"></i>
                <span>{{ $reservation->event->date_event }}</span>
            </div>

            <div class="flex items-center gap-2">
                <i data-lucide="map-pin" class="w-4 h-4 text-cyan-400"></i>
                <span>{{ $reservation->event->location }}</span>
            </div>

            <div class="flex items-center gap-2">
                <i data-lucide="users" class="w-4 h-4 text-cyan-400"></i>
                <span>{{ $reservation->event->capacity }} places</span>
            </div>

        </div>
        <div class="mt-6 flex gap-3">

          
            <a href="{{ route('student.ticket.show', $reservation->id) }}"
                class="flex-1 text-center py-3 rounded-xl bg-cyan-500 hover:bg-cyan-400 text-white font-semibold transition">

                Voir mon ticket

            </a>

           
            <form action="{{ route('student.reservation.destroy', $reservation->id) }}"
                method="POST"
                class="flex-1">

                @csrf
                @method('DELETE')

                <button
                    onclick="return confirm('Voulez-vous vraiment annuler cette réservation ?')"
                    class="w-full py-3 rounded-xl bg-red-500 hover:bg-red-400 text-white font-semibold transition">

                    Annuler

                </button>

            </form>

        </div>

    </div>

    @empty

    <div class="col-span-full glass rounded-2xl p-12 text-center">
        <div class="w-16 h-16 rounded-2xl bg-white/5 border border-white/10 flex items-center justify-center mx-auto mb-4 text-gray-500">
            <i data-lucide="ticket-x" class="w-8 h-8"></i>
        </div>
        <h3 class="text-lg font-bold text-white">Aucune réservation</h3>
        <p class="text-gray-400 text-sm mt-1">Vous n'avez effectué aucune réservation pour le moment.</p>
    </div>

    @endforelse

</div>

@endsection