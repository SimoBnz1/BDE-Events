<!DOCTYPE html>
<html lang="fr" class="dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BDE-Events | Le Pass Campus Unique</title>

    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/lucide@latest"></script>

    <script>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    colors: {
                        dark: "#050816",
                        surface: "#0F172A",
                        primary: "#3B82F6",
                        neon: "#06B6D4",
                        purple: "#8B5CF6"
                    },
                    boxShadow: {
                        neon: "0 0 30px rgba(6,182,212,.25)"
                    }
                }
            }
        }
    </script>

    <style>
        body {
            background: #050816;
        }

        .grid-bg {
            background-image:
                linear-gradient(rgba(255, 255, 255, .04) 1px, transparent 1px),
                linear-gradient(90deg, rgba(255, 255, 255, .04) 1px, transparent 1px);
            background-size: 30px 30px;
        }

        .glass {
            background: rgba(15, 23, 42, .65);
            backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, .08);
        }

        .gradient-text {
            background: linear-gradient(90deg, #3B82F6, #06B6D4, #8B5CF6);
            -webkit-background-clip: text;
            color: transparent;
        }

        .gradient-btn {
            background: linear-gradient(90deg, #3B82F6, #06B6D4, #8B5CF6);
        }
    </style>
</head>

<body class="bg-dark text-white font-sans antialiased min-h-screen flex flex-col relative selection:bg-neon selection:text-dark">

    <!-- Background Grid -->
    <div class="fixed inset-0 grid-bg opacity-30 pointer-events-none"></div>

    <!-- 1. NAVIGATION BAR -->
    <nav class="sticky top-0 z-50 glass border-b border-white/10">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 h-20 flex items-center justify-between">

            <!-- Logo -->
            <a href="#" class="flex items-center gap-3 group">
                <div class="w-10 h-10 rounded-xl bg-gradient-to-br from-blue-600 to-cyan-400 flex items-center justify-center font-black text-white text-xl shadow-neon group-hover:scale-105 transition-transform">
                    B
                </div>
                <span class="font-extrabold text-xl tracking-tight text-white">
                    BDE<span class="gradient-text">.Events</span>
                </span>
            </a>

            <!-- Navigation Links -->
            <div class="hidden md:flex items-center gap-8 text-sm font-medium text-gray-400">
                <a href="#" class="text-white hover:text-cyan-400 transition-colors">Événements</a>
                <a href="#" class="hover:text-cyan-400 transition-colors">Mes Billets</a>
                <a href="#" class="hover:text-cyan-400 transition-colors">À propos</a>
            </div>

            <!-- Actions / Profile / Admin Link -->
            <div class="flex items-center gap-4">
                <a href="/admin/events" class="hidden sm:inline-flex items-center gap-2 px-3 py-1.5 rounded-lg text-xs font-semibold bg-purple-500/10 text-purple-400 border border-purple-500/20 hover:bg-purple-500/20 transition-all">
                    <span class="w-2 h-2 rounded-full bg-purple-400 animate-pulse"></span>
                    Espace Admin
                </a>

                <a href="{{ route('showLogin')}}" class="px-5 py-2.5 rounded-xl gradient-btn text-white font-bold text-sm hover:opacity-90 transition-all shadow-md transform hover:-translate-y-0.5">
                    Connexion
                </a>
            </div>
        </div>
    </nav>

    <!-- 2. HERO SECTION -->
    <header class="relative overflow-hidden border-b border-white/10 py-12">
        <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[600px] h-[300px] bg-blue-500/10 blur-[120px] rounded-full pointer-events-none"></div>
        <div class="absolute top-1/3 right-1/4 w-[400px] h-[200px] bg-purple-500/10 blur-[100px] rounded-full pointer-events-none"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center">

            <span class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full glass text-xs text-cyan-300 font-mono mb-6">
                <i data-lucide="sparkles" class="w-3.5 h-3.5 text-cyan-400"></i>
                Plateforme officielle du campus 2026
            </span>

            <h1 class="text-4xl sm:text-6xl lg:text-7xl font-black tracking-tight text-white max-w-4xl mx-auto leading-tight">
                Ne rate aucun <span class="gradient-text">événement</span> de ton BDE.
            </h1>

            <p class="mt-6 text-lg sm:text-xl text-gray-400 max-w-2xl mx-auto leading-relaxed">
                Réserve ta place en un clic, obtiens ton Pass numérique unique et vis l'expérience campus à 100%.
            </p>


        </div>
    </header>

    <!-- 3. LISTE DES ÉVÉNEMENTS (SECTION PRINCIPALE) -->
    <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16 flex-1 relative z-10">

        <!-- Section Title -->
        <div class="flex flex-col sm:flex-row justify-between items-start sm:items-end mb-10 gap-4">
            <div>
                <h2 class="text-2xl font-bold text-white tracking-tight">Prochains Événements</h2>
                <p class="text-sm text-gray-400 mt-1">Découvre les activités à venir et réserve tes places</p>
            </div>

            <!-- Category Tabs -->
            <div class="flex items-center gap-2 glass p-1 rounded-xl text-xs font-medium">


                <a href="{{ route('index') }}"
                    class="px-3 py-1.5 rounded-lg bg-blue-600 text-white font-semibold">
                    Tous
                </a>


                <a href="{{ route('events.category','soiree') }}"
                    class="px-3 py-1.5 rounded-lg text-gray-400 hover:text-white">
                    Soirées
                </a>


                <a href="{{ route('events.category','sport') }}"
                    class="px-3 py-1.5 rounded-lg text-gray-400 hover:text-white">
                    Sport
                </a>


                <a href="{{ route('events.category','workshop') }}"
                    class="px-3 py-1.5 rounded-lg text-gray-400 hover:text-white">
                    Workshops
                </a>


                <a href="{{ route('events.category','culture') }}"
                    class="px-3 py-1.5 rounded-lg text-gray-400 hover:text-white">
                    Culture
                </a>


            </div>
        </div>

        <!-- Grid Cards -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

            @foreach($events as $event)
            <div class="glass rounded-2xl overflow-hidden hover:border-cyan-500/50 hover:shadow-neon transition-all duration-300 flex flex-col group">

                <!-- IMAGE -->
                <div class="relative h-48 bg-slate-900 overflow-hidden">
                    <img
                        src="https://images.unsplash.com/photo-1511578314322-379afb476865?auto=format&fit=crop&w=800&q=80"
                        alt="Event"
                        class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-surface via-transparent to-transparent"></div>

                    <!-- PRICE -->
                    <span class="absolute top-4 right-4 bg-cyan-400 text-dark text-xs font-black px-3 py-1 rounded-full uppercase tracking-wider shadow-md">
                        @if($event->price == 0)
                        Gratuit
                        @else
                        {{ $event->price }} DH
                        @endif
                    </span>

                    @if($event->capacity <= 5)
                        <span class="absolute bottom-4 left-4 bg-purple-500/20 border border-purple-500/40 text-purple-300 text-xs font-mono px-2.5 py-1 rounded-lg backdrop-blur-md animate-pulse">
                        🔥 Seulement {{ $event->capacity }} places !
                        </span>
                        @endif
                </div>

                <!-- CONTENT -->
                <div class="p-6 flex-1 flex flex-col justify-between space-y-4">
                    <div>
                        <!-- CATEGORY -->
                        <div class="text-xs font-semibold text-cyan-400 uppercase tracking-wider mb-1">
                            {{ $event->category }}
                        </div>

                        <!-- TITLE -->
                        <h3 class="text-xl font-bold text-white group-hover:text-cyan-400 transition-colors">
                            {{ $event->title }}
                        </h3>

                        <!-- DESCRIPTION -->
                        <p class="text-gray-400 text-sm mt-2 line-clamp-2">
                            {{ $event->description }}
                        </p>
                    </div>

                    <!-- INFO -->
                    <div class="space-y-2 text-xs text-gray-400 border-t border-white/10 pt-4">
                        <div class="flex items-center gap-2">
                            <i data-lucide="calendar" class="w-4 h-4 text-cyan-400"></i>
                            <span>{{ $event->date_event }}</span>
                        </div>

                        <div class="flex items-center gap-2">
                            <i data-lucide="map-pin" class="w-4 h-4 text-cyan-400"></i>
                            <span>{{ $event->location }}</span>
                        </div>
                    </div>

                    <!-- BUTTON -->
                    <a href="{{ route('login')}}" class="w-full text-center py-3 rounded-xl gradient-btn text-white font-extrabold text-sm hover:opacity-90 transition-all shadow-md">
                        S'inscrire
                    </a>
                </div>

            </div>
            @endforeach

        </div>
    </main>

    <!-- 4. FOOTER SIMPLE -->
    <footer class="border-t border-white/10 py-8 glass text-center text-xs text-gray-400 relative z-10">
        <p>© 2026 BDE-Events — Plateforme développée pour le campus.</p>
    </footer>

    <script>
        lucide.createIcons();
    </script>
</body>

</html>