<!DOCTYPE html>
<html lang="fr" class="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BDE-Events | Le Pass Campus Unique</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    colors: {
                        brand: {
                            neon: '#34d399', // Emerald 400
                            dark: '#09090b', // Zinc 950
                            card: '#18181b', // Zinc 900
                            accent: '#6366f1', // Indigo 500
                        }
                    }
                }
            }
        }
    </script>
</head>
<body class="bg-brand-dark text-zinc-100 font-sans antialiased selection:bg-brand-neon selection:text-brand-dark min-h-screen flex flex-col">

    <!-- 1. NAVIGATION BAR -->
    <nav class="sticky top-0 z-50 bg-brand-dark/80 backdrop-blur-md border-b border-zinc-800/80">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 h-20 flex items-center justify-between">
            
            <!-- Logo -->
            <a href="#" class="flex items-center gap-3 group">
                <div class="w-10 h-10 rounded-xl bg-gradient-to-tr from-brand-neon to-brand-accent flex items-center justify-center font-black text-brand-dark text-xl shadow-[0_0_15px_rgba(52,211,153,0.3)] group-hover:scale-105 transition-transform">
                    B
                </div>
                <span class="font-extrabold text-xl tracking-tight text-white">
                    BDE<span class="text-brand-neon">.Events</span>
                </span>
            </a>

            <!-- Navigation Links -->
            <div class="hidden md:flex items-center gap-8 text-sm font-medium text-zinc-400">
                <a href="#" class="text-white hover:text-brand-neon transition-colors">Événements</a>
                <a href="#" class="hover:text-brand-neon transition-colors">Mes Billets</a>
                <a href="#" class="hover:text-brand-neon transition-colors">À propos</a>
            </div>

            <!-- Actions / Profile / Admin Link -->
            <div class="flex items-center gap-4">
                <!-- Lien visible uniquement si Admin (Protection par Middleware/Role côté Backend) -->
                <a href="/admin/events" class="hidden sm:inline-flex items-center gap-2 px-3 py-1.5 rounded-lg text-xs font-semibold bg-indigo-500/10 text-indigo-400 border border-indigo-500/20 hover:bg-indigo-500/20 transition-all">
                    <span class="w-2 h-2 rounded-full bg-indigo-400 animate-pulse"></span>
                    Espace Admin
                </a>

                <a href="{{ route('showLogin')}}" class="px-5 py-2.5 rounded-xl bg-brand-neon text-brand-dark font-bold text-sm hover:shadow-[0_0_20px_rgba(52,211,153,0.4)] transition-all transform hover:-translate-y-0.5">
                    Connexion
                </a>
            </div>
        </div>
    </nav>

    <!-- 2. HERO SECTION -->
    <header class="relative overflow-hidden  border-b border-zinc-800/50">
        <!-- Effet Glow en arrière-plan -->
        <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[600px] h-[300px] bg-brand-neon/10 blur-[120px] rounded-full pointer-events-none"></div>
        <div class="absolute top-1/3 right-1/4 w-[400px] h-[200px] bg-brand-accent/10 blur-[100px] rounded-full pointer-events-none"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center">
            
            <span class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-zinc-900 border border-zinc-800 text-xs text-brand-neon font-mono mb-6">
                <span class="w-2 h-2 rounded-full bg-brand-neon animate-ping"></span>
                Plateforme officielle du campus 2026
            </span>

            <h1 class="text-4xl sm:text-6xl lg:text-7xl font-extrabold tracking-tight text-white max-w-4xl mx-auto leading-tight">
                Ne rate aucun <span class="text-transparent bg-clip-text bg-gradient-to-r from-brand-neon via-teal-300 to-brand-accent">événement</span> de ton BDE.
            </h1>

            <p class="mt-6 text-lg sm:text-xl text-zinc-400 max-w-2xl mx-auto leading-relaxed">
                Rerve ta place en un clic, obtiens ton Pass numérique unique et vis l'expérience campus à 100%.
            </p>

            <!-- Search & Filters Bar -->
            <div class="mt-10 max-w-2xl mx-auto bg-brand-card/90 backdrop-blur-xl border border-zinc-800 p-2 rounded-2xl shadow-2xl flex flex-col sm:flex-row gap-2">
                <div class="flex-1 flex items-center px-4 bg-zinc-950/50 rounded-xl border border-zinc-800/50">
                    <svg class="w-5 h-5 text-zinc-500 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/></svg>
                    <input type="text" placeholder="Rechercher un événement (Soirée, Tournoi, Conférence)..." class="w-full bg-transparent py-3 text-sm text-zinc-200 placeholder-zinc-500 focus:outline-none">
                </div>
                <button class="px-6 py-3 bg-zinc-800 hover:bg-zinc-700 text-white font-semibold rounded-xl text-sm transition-colors flex items-center justify-center gap-2">
                    Filtrer
                </button>
            </div>
        </div>
    </header>

    <!-- 3. LISTE DES ÉVÉNEMENTS (SECTION PRINCIPALE) -->
    <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16 flex-1">
        
        <!-- Section Title -->
        <div class="flex flex-col sm:flex-row justify-between items-start sm:items-end mb-10 gap-4">
            <div>
                <h2 class="text-2xl font-bold text-white tracking-tight">Prochains Événements</h2>
                <p class="text-sm text-zinc-400 mt-1">Découvre les activités à venir et réserve tes places</p>
            </div>
            
            <!-- Category Tabs -->
            <div class="flex items-center gap-2 bg-zinc-900/80 p-1 rounded-xl border border-zinc-800 text-xs font-medium">
                <button class="px-3 py-1.5 rounded-lg bg-zinc-800 text-white font-semibold">Tous</button>
                <button class="px-3 py-1.5 rounded-lg text-zinc-400 hover:text-white transition-colors">Soirées</button>
                <button class="px-3 py-1.5 rounded-lg text-zinc-400 hover:text-white transition-colors">Sport</button>
                <button class="px-3 py-1.5 rounded-lg text-zinc-400 hover:text-white transition-colors">Workshops</button>
            </div>
        </div>

        <!-- Grid Cards -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

            <!-- EVENT CARD 1: Disponible (Gratuit) -->
            <div class="bg-brand-card border border-zinc-800/80 rounded-2xl overflow-hidden hover:border-brand-neon/40 transition-all duration-300 hover:shadow-[0_0_30px_rgba(52,211,153,0.1)] flex flex-col group">
                
                <!-- Image Header -->
                <div class="relative h-48 bg-zinc-800 overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1516450360452-9312f5e86fc7?auto=format&fit=crop&w=800&q=80" alt="Event" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-brand-card via-transparent to-transparent"></div>
                    
                    <!-- Price Tag -->
                    <span class="absolute top-4 right-4 bg-brand-neon text-brand-dark text-xs font-black px-3 py-1.0 rounded-full uppercase tracking-wider">
                        Gratuit
                    </span>

                    <!-- Places Badge -->
                    <span class="absolute bottom-4 left-4 bg-zinc-950/80 backdrop-blur-md text-emerald-400 border border-emerald-500/20 text-xs font-mono px-2.5 py-1 rounded-lg">
                        ⚡ 42 places restantes
                    </span>
                </div>

                <!-- Content -->
                <div class="p-6 flex-1 flex flex-col justify-between space-y-4">
                    <div>
                        <div class="text-xs font-semibold text-brand-neon uppercase tracking-wider mb-1">Soirée BDE</div>
                        <h3 class="text-xl font-bold text-white group-hover:text-brand-neon transition-colors">Welcome Party 2026</h3>
                        <p class="text-zinc-400 text-sm mt-2 line-clamp-2">
                            La grande soirée d'intégration du campus. DJ sets, animations et surprises tout au long de la nuit.
                        </p>
                    </div>

                    <!-- Event Details -->
                    <div class="space-y-2 text-xs text-zinc-400 border-t border-zinc-800/60 pt-4">
                        <div class="flex items-center gap-2">
                            <svg class="w-4 h-4 text-zinc-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 002-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                            <span>Vendredi 25 Oct • 21:00</span>
                        </div>
                        <div class="flex items-center gap-2">
                            <svg class="w-4 h-4 text-zinc-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                            <span>Grand Hall Campus</span>
                        </div>
                    </div>

                    <!-- Action Button (US 2.1) -->
                    <button class="w-full py-3 rounded-xl bg-brand-neon text-brand-dark font-extrabold text-sm hover:shadow-[0_0_15px_rgba(52,211,153,0.3)] transition-all">
                        S'inscrire en 1 Clic
                    </button>
                </div>
            </div>

            <!-- EVENT CARD 2: Presque complet (Alerte Visuelle) -->
            <div class="bg-brand-card border border-zinc-800/80 rounded-2xl overflow-hidden hover:border-amber-500/40 transition-all duration-300 flex flex-col group">
                <div class="relative h-48 bg-zinc-800 overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1511578314322-379afb476865?auto=format&fit=crop&w=800&q=80" alt="Event" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-brand-card via-transparent to-transparent"></div>
                    
                    <span class="absolute top-4 right-4 bg-brand-neon text-brand-dark text-xs font-black px-3 py-1 rounded-full uppercase tracking-wider">
                        Gratuit
                    </span>

                    <span class="absolute bottom-4 left-4 bg-amber-500/10 border border-amber-500/30 text-amber-400 text-xs font-mono px-2.5 py-1 rounded-lg animate-pulse">
                        🔥 Seulement 3 places !
                    </span>
                </div>

                <div class="p-6 flex-1 flex flex-col justify-between space-y-4">
                    <div>
                        <div class="text-xs font-semibold text-amber-400 uppercase tracking-wider mb-1">Gaming</div>
                        <h3 class="text-xl font-bold text-white group-hover:text-amber-400 transition-colors">Tournoi LAN FIFA & Valorant</h3>
                        <p class="text-zinc-400 text-sm mt-2 line-clamp-2">
                            Affronte les meilleurs joueurs de l'école. Cashprize et lots à gagner pour les finalistes.
                        </p>
                    </div>

                    <div class="space-y-2 text-xs text-zinc-400 border-t border-zinc-800/60 pt-4">
                        <div class="flex items-center gap-2">
                            <svg class="w-4 h-4 text-zinc-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 002-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                            <span>Mardi 29 Oct • 18:00</span>
                        </div>
                        <div class="flex items-center gap-2">
                            <svg class="w-4 h-4 text-zinc-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                            <span>Salle Informatique B2</span>
                        </div>
                    </div>

                    <button class="w-full py-3 rounded-xl bg-amber-500 text-zinc-950 font-extrabold text-sm hover:bg-amber-400 transition-all">
                        S'inscrire d'urgence
                    </button>
                </div>
            </div>

            <!-- EVENT CARD 3: Complet (Bouton Désactivé) -->
            <div class="bg-brand-card border border-zinc-800/50 rounded-2xl overflow-hidden opacity-75 flex flex-col">
                <div class="relative h-48 bg-zinc-800 overflow-hidden grayscale">
                    <img src="https://images.unsplash.com/photo-1475721027785-f74eccf877e2?auto=format&fit=crop&w=800&q=80" alt="Event" class="w-full h-full object-cover">
                    <div class="absolute inset-0 bg-gradient-to-t from-brand-card via-transparent to-transparent"></div>
                    
                    <span class="absolute top-4 right-4 bg-rose-500/20 border border-rose-500/30 text-rose-400 text-xs font-bold px-3 py-1 rounded-full uppercase tracking-wider">
                        Complet
                    </span>
                </div>

                <div class="p-6 flex-1 flex flex-col justify-between space-y-4">
                    <div>
                        <div class="text-xs font-semibold text-zinc-500 uppercase tracking-wider mb-1">Conférence</div>
                        <h3 class="text-xl font-bold text-zinc-300">Masterclass AI & Web3</h3>
                        <p class="text-zinc-500 text-sm mt-2 line-clamp-2">
                            Une immersion complète dans le futur du développement web avec des experts de l'industrie.
                        </p>
                    </div>

                    <div class="space-y-2 text-xs text-zinc-500 border-t border-zinc-800/60 pt-4">
                        <div class="flex items-center gap-2">
                            <svg class="w-4 h-4 text-zinc-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 002-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                            <span>Jeudi 05 Nov • 14:00</span>
                        </div>
                    </div>

                    <button disabled class="w-full py-3 rounded-xl bg-zinc-800 text-zinc-500 font-bold text-sm cursor-not-allowed">
                        Victime de son succès (Complet)
                    </button>
                </div>
            </div>

        </div>
    </main>

    <!-- 4. FOOTER SIMPLE -->
    <footer class="border-t border-zinc-800/60 py-8 bg-brand-dark text-center text-xs text-zinc-500">
        <p>© 2026 BDE-Events — Plateforme développée pour le campus.</p>
    </footer>

</body>
</html>