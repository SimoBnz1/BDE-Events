<aside class="w-64 bg-card border-r border-zinc-800 hidden md:flex flex-col p-6">

    <h1 class="text-2xl font-black mb-10">
        BDE<span class="text-emerald-400">.Events</span>
    </h1>

    <nav class="space-y-3">
@if(Auth::user()->role =='admin')
        <a href="{{ route('admin.dashboard') }}"
            class="flex items-center gap-3 px-4 py-3 rounded-xl hover:bg-emerald-400/10 hover:text-emerald-400 transition">

            <i data-lucide="layout-dashboard"></i>

            Dashboard

        </a>
        
        
        <a href="{{ route('admin.events') }}"
            class="flex items-center gap-3 text-zinc-400 hover:text-white px-4 py-3 rounded-xl transition">
            <i data-lucide="calendar"></i>
            Events
        </a>
        @else
        <a href="{{ route('student.dashboard') }}"
            class="flex items-center gap-3 text-zinc-400 hover:text-white px-4 py-3 rounded-xl transition">
            <i data-lucide="calendar"></i>
            Dashboard
        </a>
        <a href="{{ route('student.events') }}"
            class="flex items-center gap-3 text-zinc-400 hover:text-white px-4 py-3 rounded-xl transition">
            <i data-lucide="calendar"></i>
            Events
        </a>

        <a href="{{ route('admin.reservations') }}"
            class="flex items-center gap-3 px-4 py-3 rounded-xl hover:bg-emerald-400/10 hover:text-emerald-400 transition">
            <i data-lucide="ticket"></i>
            Reservations

        </a>
        @endif

    </nav>

    <div class="mt-auto bg-zinc-900 rounded-2xl p-4">

        <p class="text-sm text-zinc-400">
            Admin
        </p>

        <p class="font-bold">

            {{ Auth::user()->name }}

        </p>

    </div>

</aside>