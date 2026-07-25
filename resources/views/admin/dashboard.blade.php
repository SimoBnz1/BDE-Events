@extends('layouts.app')

@section('title','Dashboard Admin')

@section('content')

<div class="flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4 mb-10">

    <div>
        <div class="inline-flex items-center gap-2 glass px-4 py-1.5 rounded-full text-purple-300 text-xs mb-3">
            <span class="w-2 h-2 rounded-full bg-purple-400 animate-pulse"></span>
            Administration BDE
        </div>

        <h1 class="text-3xl sm:text-4xl font-black text-white">
            <span class="gradient-text">Dashboard</span> Admin
        </h1>

        <p class="text-gray-400 text-sm mt-1">
            Gestion de la plateforme BDE Events
        </p>
    </div>

    <div class="flex items-center gap-3">
        <a href="{{ route('creatEvenment') }}"
           class="inline-flex items-center gap-2 gradient-btn text-white px-5 py-3 rounded-xl font-bold text-sm hover:opacity-90 transition-all shadow-md transform hover:-translate-y-0.5">
            <i data-lucide="plus-circle" class="w-4 h-4"></i>
            <span>Nouvel événement</span>
        </a>

        <form action="{{ route('logout') }}" method="POST" class="inline">
            @csrf
            <button type="submit" 
                    class="inline-flex items-center gap-2 px-4 py-3 rounded-xl text-sm font-semibold bg-red-500/10 text-red-400 border border-red-500/20 hover:bg-red-500/20 transition-all">
                <i data-lucide="log-out" class="w-4 h-4"></i>
                <span>Déconnexion</span>
            </button>
        </form>
    </div>

</div>

<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">

    <div class="glass rounded-2xl p-6 hover:border-cyan-500/40 hover:shadow-neon transition-all duration-300 flex items-center justify-between group">
        <div>
            <p class="text-xs font-medium text-gray-400 uppercase tracking-wider">
                Events
            </p>
            <h3 class="text-3xl font-black mt-2 text-white group-hover:text-cyan-400 transition-colors">
                {{ $eventsCount }}
            </h3>
        </div>
        <div class="w-12 h-12 rounded-xl bg-blue-500/10 border border-blue-500/20 flex items-center justify-center text-blue-400 group-hover:scale-110 transition-transform">
            <i data-lucide="calendar" class="w-6 h-6"></i>
        </div>
    </div>

    <div class="glass rounded-2xl p-6 hover:border-cyan-500/40 hover:shadow-neon transition-all duration-300 flex items-center justify-between group">
        <div>
            <p class="text-xs font-medium text-gray-400 uppercase tracking-wider">
                Reservations
            </p>
            <h3 class="text-3xl font-black mt-2 text-white group-hover:text-cyan-400 transition-colors">
                {{ $reservations }}
            </h3>
        </div>
        <div class="w-12 h-12 rounded-xl bg-cyan-500/10 border border-cyan-500/20 flex items-center justify-center text-cyan-400 group-hover:scale-110 transition-transform">
            <i data-lucide="ticket" class="w-6 h-6"></i>
        </div>
    </div>

    <div class="glass rounded-2xl p-6 hover:border-purple-500/40 hover:shadow-neon transition-all duration-300 flex items-center justify-between group">
        <div>
            <p class="text-xs font-medium text-gray-400 uppercase tracking-wider">
                Students
            </p>
            <h3 class="text-3xl font-black mt-2 text-white group-hover:text-purple-400 transition-colors">
                {{ $students }}
            </h3>
        </div>
        <div class="w-12 h-12 rounded-xl bg-purple-500/10 border border-purple-500/20 flex items-center justify-center text-purple-400 group-hover:scale-110 transition-transform">
            <i data-lucide="users" class="w-6 h-6"></i>
        </div>
    </div>

    <div class="glass rounded-2xl p-6 hover:border-emerald-500/40 hover:shadow-neon transition-all duration-300 flex items-center justify-between group">
        <div>
            <p class="text-xs font-medium text-gray-400 uppercase tracking-wider">
                Revenue
            </p>
            <h3 class="text-3xl font-black mt-2 text-emerald-400">
                {{ $revenue }}
            </h3>
        </div>
        <div class="w-12 h-12 rounded-xl bg-emerald-500/10 border border-emerald-500/20 flex items-center justify-center text-emerald-400 group-hover:scale-110 transition-transform">
            <i data-lucide="wallet" class="w-6 h-6"></i>
        </div>
    </div>

</div>

@endsection