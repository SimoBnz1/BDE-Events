<aside class="w-64 glass border-r border-white/10 hidden md:flex flex-col p-6 min-h-screen">

    <a href="#" class="flex items-center gap-3 mb-10 group">
        <div class="w-10 h-10 rounded-xl bg-gradient-to-br from-blue-600 to-cyan-400 flex items-center justify-center font-black text-white text-xl shadow-neon group-hover:scale-105 transition-transform">
            B
        </div>
        <span class="font-extrabold text-xl tracking-tight text-white">
            BDE<span class="gradient-text">.Events</span>
        </span>
    </a>

    <nav class="space-y-2 flex-1">
        @if(Auth::user()->role == 'admin')
            <a href="{{ route('admin.dashboard') }}"
               class="flex items-center gap-3 px-4 py-3 rounded-xl text-sm font-semibold text-white bg-blue-500/10 border border-blue-500/20 shadow-neon hover:bg-blue-500/20 transition-all">
                <i data-lucide="layout-dashboard" class="w-5 h-5 text-cyan-400"></i>
                <span>Dashboard</span>
            </a>

            <a href="{{ route('admin.events')}}"
               class="flex items-center gap-3 px-4 py-3 rounded-xl text-sm font-medium text-gray-400 hover:text-white hover:bg-white/5 transition-all">
                <i data-lucide="calendar" class="w-5 h-5 text-gray-400 group-hover:text-cyan-400"></i>
                <span>Events</span>
            </a>
        @else
            <a href="{{ route('student.dashboard') }}"
               class="flex items-center gap-3 px-4 py-3 rounded-xl text-sm font-medium text-gray-400 hover:text-white hover:bg-white/5 transition-all">
                <i data-lucide="layout-dashboard" class="w-5 h-5 text-gray-400"></i>
                <span>Dashboard</span>
            </a>

            <a href="{{ route('student.events') }}"
               class="flex items-center gap-3 px-4 py-3 rounded-xl text-sm font-medium text-gray-400 hover:text-white hover:bg-white/5 transition-all">
                <i data-lucide="calendar" class="w-5 h-5 text-gray-400"></i>
                <span>Events</span>
            </a>

            <a href="{{ route('student.reservations') }}"
               class="flex items-center gap-3 px-4 py-3 rounded-xl text-sm font-semibold text-white bg-cyan-500/10 border border-cyan-500/20 shadow-neon hover:bg-cyan-500/20 transition-all">
                <i data-lucide="ticket" class="w-5 h-5 text-cyan-400"></i>
                <span>Reservations</span>
            </a>
        @endif
    </nav>

    <div class="mt-auto glass rounded-2xl p-4 border border-white/10 flex items-center gap-3">
        <div class="w-10 h-10 rounded-xl bg-purple-500/20 border border-purple-500/30 flex items-center justify-center text-purple-300 font-bold text-sm">
            {{ strtoupper(substr(Auth::user()->name, 0, 1)) }}
        </div>
        <div class="overflow-hidden">
            <p class="text-xs text-cyan-400 font-semibold uppercase tracking-wider">
                {{ Auth::user()->role }}
            </p>
            
            <p class="font-bold text-sm text-white truncate">
                {{ Auth::user()->name }}
            </p>
        </div>
    </div>

</aside>