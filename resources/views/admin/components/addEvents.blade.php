@extends('layouts.app')

@section('title', 'Créer un événement')

@section('content')

<div class="max-w-4xl mx-auto py-6">

    <div class="glass rounded-3xl overflow-hidden border border-white/10 shadow-neon">

        <div class="p-6 sm:p-8 border-b border-white/10 relative overflow-hidden flex items-center justify-between">
            <div class="absolute -right-10 -top-10 w-40 h-40 bg-purple-500/10 rounded-full blur-2xl pointer-events-none"></div>
            
            <div>
                <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full text-xs font-semibold bg-cyan-500/10 text-cyan-400 border border-cyan-500/20 mb-3">
                    <i data-lucide="plus-circle" class="w-3.5 h-3.5"></i>
                    Nouveau contenu
                </div>
                <h1 class="text-2xl sm:text-3xl font-black text-white tracking-tight">
                    Créer un <span class="gradient-text">événement</span>
                </h1>
                <p class="mt-1 text-sm text-gray-400">
                    Complétez les informations ci-dessous pour publier un événement sur BDE Events.
                </p>
            </div>

            <div class="hidden sm:flex w-12 h-12 rounded-2xl bg-white/5 border border-white/10 items-center justify-center text-cyan-400">
                <i data-lucide="calendar-plus" class="w-6 h-6"></i>
            </div>
        </div>

        <form action="{{ route('AddEvents') }}" method="POST" class="p-6 sm:p-8 space-y-8">
            @csrf

            <!-- SECTION 1 : Informations Générales -->
            <div>
                <div class="flex items-center gap-3 pb-3 mb-6 border-b border-white/10">
                    <div class="p-2 rounded-xl bg-cyan-500/10 text-cyan-400 border border-cyan-500/20">
                        <i data-lucide="info" class="w-5 h-5"></i>
                    </div>
                    <div>
                        <h2 class="text-base font-bold text-white">Informations générales</h2>
                        <p class="text-xs text-gray-400">Détails principaux de l'événement</p>
                    </div>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">

                    <!-- Titre -->
                    <div class="sm:col-span-2">
                        <label for="title" class="block text-xs font-semibold text-gray-300 uppercase tracking-wider mb-2">
                            Titre de l'événement <span class="text-cyan-400">*</span>
                        </label>
                        <div class="relative">
                            <i data-lucide="type" class="w-4 h-4 text-gray-500 absolute left-4 top-1/2 -translate-y-1/2"></i>
                            <input 
                                type="text" 
                                id="title" 
                                name="title" 
                                placeholder="ex: Soirée d'intégration, Tournoi E-Sport..." 
                                class="w-full pl-11 pr-4 py-3 rounded-xl bg-black/40 border border-white/10 text-white placeholder-gray-500 text-sm focus:outline-none focus:border-cyan-500 focus:ring-1 focus:ring-cyan-500 transition-all" 
                                required 
                            />
                        </div>
                    </div>

                    <!-- Catégorie -->
                    <div>
                        <label for="category" class="block text-xs font-semibold text-gray-300 uppercase tracking-wider mb-2">
                            Catégorie <span class="text-cyan-400">*</span>
                        </label>
                        <div class="relative">
                            <i data-lucide="tag" class="w-4 h-4 text-gray-500 absolute left-4 top-1/2 -translate-y-1/2 z-10"></i>
                            <select 
                                id="category" 
                                name="category" 
                                class="w-full pl-11 pr-10 py-3 rounded-xl bg-black/40 border border-white/10 text-white text-sm focus:outline-none focus:border-cyan-500 focus:ring-1 focus:ring-cyan-500 transition-all appearance-none cursor-pointer" 
                                required
                            >
                                <option value="" disabled selected class="bg-gray-900 text-gray-400">Sélectionner une catégorie</option>
                                <option value="soiree" class="bg-gray-900 text-white">Soirée</option>
                                <option value="sport" class="bg-gray-900 text-white">Sport</option>
                                <option value="culture" class="bg-gray-900 text-white">Culture</option>
                                <option value="workshop" class="bg-gray-900 text-white">Workshop</option>
                                <option value="conference" class="bg-gray-900 text-white">Conférence</option>
                            </select>
                            <i data-lucide="chevron-down" class="w-4 h-4 text-gray-500 absolute right-4 top-1/2 -translate-y-1/2 pointer-events-none"></i>
                        </div>
                    </div>

                    <!-- Date & Heure -->
                    <div>
                        <label for="date_event" class="block text-xs font-semibold text-gray-300 uppercase tracking-wider mb-2">
                            Date & Heure <span class="text-cyan-400">*</span>
                        </label>
                        <div class="relative">
                            <i data-lucide="calendar" class="w-4 h-4 text-gray-500 absolute left-4 top-1/2 -translate-y-1/2"></i>
                            <input 
                                type="datetime-local" 
                                id="date_event" 
                                name="date_event" 
                                class="w-full pl-11 pr-4 py-3 rounded-xl bg-black/40 border border-white/10 text-white text-sm focus:outline-none focus:border-cyan-500 focus:ring-1 focus:ring-cyan-500 transition-all [color-scheme:dark]" 
                                required 
                            />
                        </div>
                    </div>

                    <!-- Description -->
                    <div class="sm:col-span-2">
                        <label for="description" class="block text-xs font-semibold text-gray-300 uppercase tracking-wider mb-2">
                            Description <span class="text-cyan-400">*</span>
                        </label>
                        <textarea 
                            id="description" 
                            name="description" 
                            rows="4" 
                            placeholder="Décrivez l'événement, le programme, les détails importants..." 
                            class="w-full p-4 rounded-xl bg-black/40 border border-white/10 text-white placeholder-gray-500 text-sm focus:outline-none focus:border-cyan-500 focus:ring-1 focus:ring-cyan-500 transition-all resize-none" 
                            required
                        ></textarea>
                    </div>

                </div>
            </div>

            <!-- SECTION 2 : Logistique -->
            <div>
                <div class="flex items-center gap-3 pb-3 mb-6 border-b border-white/10">
                    <div class="p-2 rounded-xl bg-purple-500/10 text-purple-400 border border-purple-500/20">
                        <i data-lucide="map-pin" class="w-5 h-5"></i>
                    </div>
                    <div>
                        <h2 class="text-base font-bold text-white">Logistique & Tarification</h2>
                        <p class="text-xs text-gray-400">Lieu, capacité d'accueil et tarif</p>
                    </div>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">

                    <!-- Lieu -->
                    <div class="sm:col-span-2">
                        <label for="location" class="block text-xs font-semibold text-gray-300 uppercase tracking-wider mb-2">
                            Emplacement <span class="text-cyan-400">*</span>
                        </label>
                        <div class="relative">
                            <i data-lucide="building" class="w-4 h-4 text-gray-500 absolute left-4 top-1/2 -translate-y-1/2"></i>
                            <input 
                                type="text" 
                                id="location" 
                                name="location" 
                                placeholder="ex: Amphithéâtre A, Hall Central..." 
                                class="w-full pl-11 pr-4 py-3 rounded-xl bg-black/40 border border-white/10 text-white placeholder-gray-500 text-sm focus:outline-none focus:border-cyan-500 focus:ring-1 focus:ring-cyan-500 transition-all" 
                                required 
                            />
                        </div>
                    </div>

                    <!-- Prix -->
                    <div>
                        <label for="price" class="block text-xs font-semibold text-gray-300 uppercase tracking-wider mb-2">
                            Prix (MAD) <span class="text-cyan-400">*</span>
                        </label>
                        <div class="relative">
                            <i data-lucide="banknote" class="w-4 h-4 text-gray-500 absolute left-4 top-1/2 -translate-y-1/2"></i>
                            <input 
                                type="number" 
                                id="price" 
                                name="price" 
                                min="0" 
                                step="0.01" 
                                placeholder="0" 
                                class="w-full pl-11 pr-16 py-3 rounded-xl bg-black/40 border border-white/10 text-white placeholder-gray-500 text-sm focus:outline-none focus:border-cyan-500 focus:ring-1 focus:ring-cyan-500 transition-all" 
                                required 
                            />
                            <span class="absolute right-4 top-1/2 -translate-y-1/2 text-xs font-bold text-cyan-400">DH</span>
                        </div>
                        <p class="mt-1.5 text-[11px] text-gray-500">Mettre 0 pour un accès gratuit.</p>
                    </div>

                    <!-- Capacité -->
                    <div>
                        <label for="capacity" class="block text-xs font-semibold text-gray-300 uppercase tracking-wider mb-2">
                            Capacité Max <span class="text-cyan-400">*</span>
                        </label>
                        <div class="relative">
                            <i data-lucide="users" class="w-4 h-4 text-gray-500 absolute left-4 top-1/2 -translate-y-1/2"></i>
                            <input 
                                type="number" 
                                id="capacity" 
                                name="capacity" 
                                min="1" 
                                placeholder="150" 
                                class="w-full pl-11 pr-4 py-3 rounded-xl bg-black/40 border border-white/10 text-white placeholder-gray-500 text-sm focus:outline-none focus:border-cyan-500 focus:ring-1 focus:ring-cyan-500 transition-all" 
                                required 
                            />
                        </div>
                    </div>

                </div>
            </div>

            <!-- Actions -->
            <div class="pt-6 border-t border-white/10 flex flex-col-reverse sm:flex-row items-center justify-end gap-3">
                <a 
                    href="{{ route('admin.events') }}" 
                    class="w-full sm:w-auto px-6 py-3 rounded-xl bg-white/5 hover:bg-white/10 border border-white/10 text-gray-300 text-sm font-semibold transition-all text-center"
                >
                    Annuler
                </a>
                <button 
                    type="submit" 
                    class="w-full sm:w-auto px-6 py-3 rounded-xl gradient-btn text-white text-sm font-bold shadow-neon hover:opacity-90 transition-all flex items-center justify-center gap-2"
                >
                    <i data-lucide="plus-circle" class="w-4 h-4"></i>
                    Publier l'événement
                </button>
            </div>

        </form>

    </div>

</div>

@endsection