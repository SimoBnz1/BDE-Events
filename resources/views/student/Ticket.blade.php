@extends('layouts.app')

@section('title','Mon Ticket')

@section('content')

<div class="max-w-xl mx-auto py-6">

    <div class="glass rounded-3xl overflow-hidden border border-white/10 shadow-neon relative">
        
        <div class="gradient-btn p-8 relative overflow-hidden flex items-center justify-between border-b border-white/10">
            <div class="absolute -right-6 -top-6 w-32 h-32 bg-white/10 rounded-full blur-xl pointer-events-none"></div>
            
            <div>
                <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-[10px] font-extrabold uppercase tracking-widest bg-black/20 text-white backdrop-blur-md mb-2 border border-white/10">
                    <span class="w-1.5 h-1.5 rounded-full bg-cyan-300 animate-pulse"></span>
                    Pass Officiel
                </span>
                <h1 class="text-3xl font-black text-white tracking-tight">
                    BDE<span class="text-cyan-300">.EVENTS</span>
                </h1>
            </div>

            <div class="w-12 h-12 rounded-2xl bg-white/10 backdrop-blur-md border border-white/20 flex items-center justify-center text-white">
                <i data-lucide="qr-code" class="w-6 h-6"></i>
            </div>
        </div>

        <div class="p-8 space-y-6 relative">

            <div>
                <p class="text-xs font-semibold text-cyan-400 uppercase tracking-wider mb-1">Événement</p>
                <h2 class="text-2xl font-black text-white">
                    {{ $reservation->event->title }}
                </h2>
            </div>

            <div class="grid grid-cols-2 gap-4 p-4 rounded-2xl bg-white/5 border border-white/5">
                <div class="flex items-start gap-3">
                    <div class="p-2 rounded-xl bg-blue-500/10 text-blue-400 mt-0.5">
                        <i data-lucide="calendar" class="w-4 h-4"></i>
                    </div>
                    <div>
                        <p class="text-xs text-gray-400 font-medium">Date</p>
                        <p class="text-sm font-bold text-white mt-0.5">{{ $reservation->event->date_event }}</p>
                    </div>
                </div>

                <div class="flex items-start gap-3">
                    <div class="p-2 rounded-xl bg-purple-500/10 text-purple-400 mt-0.5">
                        <i data-lucide="map-pin" class="w-4 h-4"></i>
                    </div>
                    <div>
                        <p class="text-xs text-gray-400 font-medium">Lieu</p>
                        <p class="text-sm font-bold text-white mt-0.5">{{ $reservation->event->location }}</p>
                    </div>
                </div>
            </div>

            <div class="flex items-center gap-3 p-4 rounded-2xl bg-white/5 border border-white/5">
                <div class="w-10 h-10 rounded-xl bg-cyan-500/10 border border-cyan-500/20 flex items-center justify-center text-cyan-400 font-bold">
                    <i data-lucide="user" class="w-5 h-5"></i>
                </div>
                <div>
                    <p class="text-xs text-gray-400 font-medium">Titulaire du Pass</p>
                    <p class="text-sm font-bold text-white">{{ $reservation->user->name }}</p>
                </div>
            </div>

            <div class="pt-4 border-t border-dashed border-white/10 flex flex-col items-center justify-center text-center">
                <p class="text-xs text-gray-400 font-medium mb-2 uppercase tracking-wider">Code Unique du Billet</p>
                <div class="px-6 py-3 rounded-2xl bg-black/40 border border-cyan-500/30 shadow-inner">
                    <p class="font-mono text-cyan-400 font-extrabold text-xl tracking-widest">
                        {{ $reservation->ticket->ticket_code }}
                    </p>
                </div>
            </div>

        </div>

    </div>

</div>

@endsection