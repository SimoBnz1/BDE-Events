@extends('layouts.student')

@section('title','Student Dashboard')

@section('content')

<div class="flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4 mb-10">
    <div>
        <div class="inline-flex items-center gap-2 glass px-4 py-1.5 rounded-full text-cyan-300 text-xs mb-3">
            <i data-lucide="sparkles" class="w-3.5 h-3.5 text-cyan-400"></i>
            Espace Étudiant
        </div>

        <h1 class="text-3xl sm:text-4xl font-black text-white">
            Bonjour <span class="gradient-text">{{ auth()->user()->name }}</span>
        </h1>

        <p class="text-gray-400 text-sm sm:text-base mt-2">
            Découvrez les prochains événements de votre campus
        </p>
    </div>

    <form action="{{ route('logout') }}" method="POST" class="inline">
        @csrf
        <button type="submit" 
                class="inline-flex items-center gap-2 px-4 py-3 rounded-xl text-sm font-semibold bg-red-500/10 text-red-400 border border-red-500/20 hover:bg-red-500/20 transition-all">
            <i data-lucide="log-out" class="w-4 h-4"></i>
            <span>Déconnexion</span>
        </button>
    </form>
</div>

<div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-12">

    <div class="glass rounded-2xl p-6 hover:border-cyan-500/40 hover:shadow-neon transition-all duration-300 flex items-center justify-between group">
        <div>
            <p class="text-xs font-medium text-gray-400 uppercase tracking-wider">
                Events disponibles
            </p>
            <h2 class="text-4xl font-black mt-2 text-white group-hover:text-cyan-400 transition-colors">
                {{ $availableEvents }}
            </h2>
        </div>
        <div class="w-12 h-12 rounded-xl bg-blue-500/10 border border-blue-500/20 flex items-center justify-center text-blue-400 group-hover:scale-110 transition-transform">
            <i data-lucide="calendar" class="w-6 h-6"></i>
        </div>
    </div>

    <div class="glass rounded-2xl p-6 hover:border-cyan-500/40 hover:shadow-neon transition-all duration-300 flex items-center justify-between group">
        <div>
            <p class="text-xs font-medium text-gray-400 uppercase tracking-wider">
                Mes réservations
            </p>
            <h2 class="text-4xl font-black mt-2 text-white group-hover:text-cyan-400 transition-colors">
                {{ $myReservations }}
            </h2>
        </div>
        <div class="w-12 h-12 rounded-xl bg-cyan-500/10 border border-cyan-500/20 flex items-center justify-center text-cyan-400 group-hover:scale-110 transition-transform">
            <i data-lucide="ticket" class="w-6 h-6"></i>
        </div>
    </div>

    <div class="glass rounded-2xl p-6 hover:border-purple-500/40 hover:shadow-neon transition-all duration-300 flex items-center justify-between group">
        <div>
            <p class="text-xs font-medium text-gray-400 uppercase tracking-wider">
                Mon statut
            </p>
            <h2 class="text-2xl font-black mt-4 text-emerald-400 flex items-center gap-2">
                <span class="w-2.5 h-2.5 rounded-full bg-emerald-400 animate-pulse"></span>
                Active
            </h2>
        </div>
        <div class="w-12 h-12 rounded-xl bg-purple-500/10 border border-purple-500/20 flex items-center justify-center text-purple-400 group-hover:scale-110 transition-transform">
            <i data-lucide="user-check" class="w-6 h-6"></i>
        </div>
    </div>

</div>

<div class="glass rounded-2xl p-6 sm:p-8">
    <div class="flex items-center justify-between mb-6">
        <div>
            <h3 class="text-xl font-bold text-white">Événements populaires</h3>
            <p class="text-xs text-gray-400 mt-0.5">Réservez vos billets avant la fin des places</p>
        </div>
        <a href="#" class="text-xs font-semibold text-cyan-400 hover:underline flex items-center gap-1">
            Voir tout <i data-lucide="arrow-right" class="w-3.5 h-3.5"></i>
        </a>
    </div>

    <div class="text-center py-8 text-gray-500 text-sm">
        <i data-lucide="sparkles" class="w-8 h-8 mx-auto mb-2 text-cyan-500/40"></i>
        Prêt à explorer les événements !
    </div>
</div>

@endsection