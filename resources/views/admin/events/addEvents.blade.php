<!DOCTYPE html>
<html lang="fr" class="h-full bg-slate-50">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Créer un nouvel événement | BDE-Events</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        brand: {
                            50: '#eff6ff',
                            100: '#dbeafe',
                            500: '#3b82f6',
                            600: '#2563eb', // Bleu principal
                            700: '#1d4ed8',
                        }
                    }
                }
            }
        }
    </script>
    <!-- Inter Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Inter', sans-serif; }
    </style>
</head>
<body class="min-h-full py-10 px-4 sm:px-6 lg:px-8 bg-slate-50 text-slate-800 antialiased">

    <!-- Container central -->
    <div class="max-w-4xl mx-auto">
        
        <!-- Card principale -->
        <div class="bg-white rounded-2xl border border-slate-200/80 shadow-xl shadow-slate-200/50 overflow-hidden transition-all duration-300">
            
            <!-- Bannière d'illustration -->
            <div class="relative h-48 sm:h-64 w-full bg-gradient-to-r from-brand-600 via-indigo-600 to-purple-600 overflow-hidden">
                <img 
                    src="https://images.unsplash.com/photo-1540575467063-178a50c2df87?auto=format&fit=crop&w=1200&q=80" 
                    alt="Event Cover" 
                    class="w-full h-full object-cover opacity-30 mix-blend-overlay"
                />
                <div class="absolute inset-0 bg-gradient-to-t from-black/40 via-transparent to-transparent"></div>
                <div class="absolute bottom-4 left-6 right-6 text-white flex justify-between items-end">
                    <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-xs font-semibold bg-white/20 backdrop-blur-md border border-white/30 text-white">
                        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"/></svg> 
                        Admin Dashboard
                    </span>
                </div>
            </div>

            <!-- En-tête de la Card -->
            <div class="px-6 sm:px-10 pt-8 pb-6 border-b border-slate-100">
                <h1 class="text-2xl sm:text-3xl font-bold text-slate-900 tracking-tight">
                    Créer un nouvel événement
                </h1>
                <p class="mt-2 text-sm sm:text-base text-slate-500">
                    Complétez les informations ci-dessous pour publier un événement sur la plateforme BDE.
                </p>
            </div>

            <!-- Formulaire -->
            <form class="px-6 sm:px-10 py-8 space-y-10">
                
                <!-- SECTION 1 : Informations générales -->
                <div>
                    <div class="flex items-center gap-2 pb-3 mb-6 border-b border-slate-100">
                        <div class="p-2 bg-brand-50 rounded-lg text-brand-600">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                        </div>
                        <div>
                            <h2 class="text-lg font-semibold text-slate-900">Informations générales</h2>
                            <p class="text-xs text-slate-500">Détails visibles par les étudiants</p>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                        
                        <!-- Titre -->
                        <div class="sm:col-span-2">
                            <label for="title" class="flex items-center gap-2 text-sm font-medium text-slate-700 mb-2">
                                <svg class="w-4 h-4 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h7"/></svg>
                                Titre de l'événement <span class="text-red-500">*</span>
                            </label>
                            <input 
                                type="text" 
                                id="title" 
                                name="title"
                                placeholder="ex: Soirée d'intégration 2026, Tournoi E-Sport..." 
                                class="w-full px-4 py-2.5 rounded-xl border border-slate-200 bg-slate-50/50 text-slate-900 placeholder:text-slate-400 text-sm focus:bg-white focus:outline-none focus:ring-2 focus:ring-brand-600/20 focus:border-brand-600 transition duration-200"
                                required
                            />
                            <!-- Message d'erreur exemple (Design uniquement) -->
                            <!-- <p class="mt-1.5 text-xs text-red-600 flex items-center gap-1"><svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg> Le titre est obligatoire.</p> -->
                        </div>

                        <!-- Catégorie -->
                        <div>
                            <label for="category" class="flex items-center gap-2 text-sm font-medium text-slate-700 mb-2">
                                <svg class="w-4 h-4 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z"/></svg>
                                Catégorie <span class="text-red-500">*</span>
                            </label>
                            <div class="relative">
                                <select 
                                    id="category" 
                                    name="category"
                                    class="w-full px-4 py-2.5 rounded-xl border border-slate-200 bg-slate-50/50 text-slate-900 text-sm appearance-none focus:bg-white focus:outline-none focus:ring-2 focus:ring-brand-600/20 focus:border-brand-600 transition duration-200 pr-10 cursor-pointer"
                                    required
                                >
                                    <option value="" disabled selected>Sélectionner une catégorie</option>
                                    <option value="soirée">Soirée</option>
                                    <option value="sport">Sport</option>
                                    <option value="culture">Culture</option>
                                    <option value="workshop">Workshop</option>
                                    <option value="conférence">Conférence</option>
                                </select>
                                <svg class="w-4 h-4 text-slate-400 absolute right-3.5 top-1/2 -translate-y-1/2 pointer-events-none" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                            </div>
                        </div>

                        <!-- Statut -->
                        <div>
                            <div class="flex items-center justify-between mb-2">
                                <label for="status" class="flex items-center gap-2 text-sm font-medium text-slate-700">
                                    <svg class="w-4 h-4 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>
                                    Statut <span class="text-red-500">*</span>
                                </label>
                                <!-- Badge Statut (Aperçu visuel) -->
                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-amber-50 text-amber-700 border border-amber-200/60">
                                    Brouillon
                                </span>
                            </div>
                            <div class="relative">
                                <select 
                                    id="status" 
                                    name="status"
                                    class="w-full px-4 py-2.5 rounded-xl border border-slate-200 bg-slate-50/50 text-slate-900 text-sm appearance-none focus:bg-white focus:outline-none focus:ring-2 focus:ring-brand-600/20 focus:border-brand-600 transition duration-200 pr-10 cursor-pointer"
                                    required
                                >
                                    <option value="Draft" selected>Draft (Brouillon)</option>
                                    <option value="Published">Published (Publié)</option>
                                    <option value="Cancelled">Cancelled (Annulé)</option>
                                </select>
                                <svg class="w-4 h-4 text-slate-400 absolute right-3.5 top-1/2 -translate-y-1/2 pointer-events-none" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                            </div>
                        </div>

                        <!-- Description -->
                        <div class="sm:col-span-2">
                            <div class="flex items-center justify-between mb-2">
                                <label for="description" class="flex items-center gap-2 text-sm font-medium text-slate-700">
                                    <svg class="w-4 h-4 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h11"/></svg>
                                    Description <span class="text-red-500">*</span>
                                </label>
                                <span class="text-xs text-slate-400 font-mono">Max. 500 caract.</span>
                            </div>
                            <textarea 
                                id="description" 
                                name="description"
                                rows="4"
                                maxlength="500"
                                placeholder="Décrivez l'événement, le programme, les prérequis..." 
                                class="w-full px-4 py-3 rounded-xl border border-slate-200 bg-slate-50/50 text-slate-900 placeholder:text-slate-400 text-sm focus:bg-white focus:outline-none focus:ring-2 focus:ring-brand-600/20 focus:border-brand-600 transition duration-200 resize-none"
                                required
                            ></textarea>
                            <p class="mt-1 text-xs text-slate-400">Rédigez une description claire et incitative pour les étudiants.</p>
                        </div>

                    </div>
                </div>

                <!-- SECTION 2 : Organisation -->
                <div>
                    <div class="flex items-center gap-2 pb-3 mb-6 border-b border-slate-100">
                        <div class="p-2 bg-brand-50 rounded-lg text-brand-600">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                        </div>
                        <div>
                            <h2 class="text-lg font-semibold text-slate-900">Organisation</h2>
                            <p class="text-xs text-slate-500">Lieu, capacité et tarification</p>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                        
                        <!-- Lieu -->
                        <div class="sm:col-span-2">
                            <label for="location" class="flex items-center gap-2 text-sm font-medium text-slate-700 mb-2">
                                <svg class="w-4 h-4 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 14v3m4-3v3m4-3v3M3 21h18M3 10h18M3 7l9-4 9 4M4 10h16v11H4V10z"/></svg>
                                Emplacement <span class="text-red-500">*</span>
                            </label>
                            <input 
                                type="text" 
                                id="location" 
                                name="location"
                                placeholder="ex: Amphithéâtre A, Campus Central, Gymnase..." 
                                class="w-full px-4 py-2.5 rounded-xl border border-slate-200 bg-slate-50/50 text-slate-900 placeholder:text-slate-400 text-sm focus:bg-white focus:outline-none focus:ring-2 focus:ring-brand-600/20 focus:border-brand-600 transition duration-200"
                                required
                            />
                        </div>

                        <!-- Prix -->
                        <div>
                            <label for="price" class="flex items-center gap-2 text-sm font-medium text-slate-700 mb-2">
                                <svg class="w-4 h-4 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                                Prix <span class="text-red-500">*</span>
                            </label>
                            <div class="relative">
                                <input 
                                    type="number" 
                                    id="price" 
                                    name="price"
                                    min="0"
                                    step="0.01"
                                    placeholder="0" 
                                    class="w-full pl-4 pr-12 py-2.5 rounded-xl border border-slate-200 bg-slate-50/50 text-slate-900 placeholder:text-slate-400 text-sm focus:bg-white focus:outline-none focus:ring-2 focus:ring-brand-600/20 focus:border-brand-600 transition duration-200"
                                    required
                                />
                                <div class="absolute right-3.5 top-1/2 -translate-y-1/2 flex items-center pointer-events-none">
                                    <span class="text-xs font-semibold text-slate-400 bg-slate-100 px-2 py-1 rounded-md">DH</span>
                                </div>
                            </div>
                            <p class="mt-1.5 text-xs text-slate-400 flex items-center gap-1">
                                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                                0 = événement gratuit
                            </p>
                        </div>

                        <!-- Capacité -->
                        <div>
                            <label for="capacity" class="flex items-center gap-2 text-sm font-medium text-slate-700 mb-2">
                                <svg class="w-4 h-4 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/></svg>
                                Capacité d'accueil <span class="text-red-500">*</span>
                            </label>
                            <input 
                                type="number" 
                                id="capacity" 
                                name="capacity"
                                min="1"
                                placeholder="ex: 150" 
                                class="w-full px-4 py-2.5 rounded-xl border border-slate-200 bg-slate-50/50 text-slate-900 placeholder:text-slate-400 text-sm focus:bg-white focus:outline-none focus:ring-2 focus:ring-brand-600/20 focus:border-brand-600 transition duration-200"
                                required
                            />
                            <p class="mt-1.5 text-xs text-slate-400 flex items-center gap-1">
                                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                                Nombre maximum de participants
                            </p>
                        </div>

                    </div>
                </div>

                <!-- Actions -->
                <div class="pt-6 border-t border-slate-100 flex flex-col-reverse sm:flex-row items-center justify-end gap-3">
                    <button 
                        type="button" 
                        class="w-full sm:w-auto px-5 py-2.5 rounded-xl border border-slate-200 bg-white text-slate-700 text-sm font-medium hover:bg-slate-50 hover:text-slate-900 focus:outline-none focus:ring-2 focus:ring-slate-200 transition duration-200 shadow-sm text-center"
                    >
                        Annuler
                    </button>
                    <button 
                        type="submit" 
                        class="w-full sm:w-auto px-6 py-2.5 rounded-xl bg-brand-600 hover:bg-brand-700 active:bg-brand-800 text-white text-sm font-medium focus:outline-none focus:ring-2 focus:ring-brand-600/40 shadow-lg shadow-brand-600/25 hover:shadow-brand-600/35 transition duration-200 flex items-center justify-center gap-2"
                    >
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                        Publier l'événement
                    </button>
                </div>

            </form>
        </div>
    </div>

</body>
</html>