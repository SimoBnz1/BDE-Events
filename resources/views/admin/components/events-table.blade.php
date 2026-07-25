@extends('layouts.app')

@section('title', 'Events')

@section('content')

<!-- HEADER -->
<div class="flex justify-between items-center mb-10">

    <div>
        <h2 class="text-3xl font-bold">Events</h2>
        <p class="text-zinc-400">
            Gestion de tous les événements
        </p>
    </div>

    <a href="{{ route('creatEvenment') }}"
        class="bg-emerald-400 text-black px-5 py-3 rounded-xl font-bold hover:bg-emerald-300 transition">

        + Nouvel événement

    </a>

</div>

<!-- TABLE CARD -->
<div class="bg-card border border-zinc-800 rounded-2xl p-6">

    <div class="flex justify-between items-center mb-6">

        <h3 class="text-xl font-bold">
            Liste des événements
        </h3>

        <span class="text-zinc-400 text-sm">

            {{ $events->count() }} événement(s)

        </span>

    </div>

    <div class="overflow-x-auto">

        <table class="w-full text-left">

            <thead class="border-b border-zinc-800 text-zinc-400">

                <tr>

                    <th class="py-4">Titre</th>

                    <th>Date</th>

                    <th>Lieu</th>

                    <th>Prix</th>

                    <th>Capacité</th>

                    <th>Catégorie</th>

                    <th>Status</th>

                </tr>

            </thead>

            <tbody>

                @forelse($events as $event)

                <tr class="border-b border-zinc-800 hover:bg-zinc-900 transition">

                    <td class="py-4 font-semibold">

                        {{ $event->title }}

                    </td>

                    <td>

                        {{ $event->date_event }}

                    </td>

                    <td>

                        {{ $event->location }}

                    </td>

                    <td>

                        {{ number_format($event->price,2) }} DH

                    </td>

                    <td>

                        {{ $event->capacity }}

                    </td>

                    <td>

                        <span class="capitalize">

                            {{ $event->category }}

                        </span>

                    </td>

                    <td>

                        @if($event->status=='published')

                            <span class="bg-emerald-400/10 text-emerald-400 px-3 py-1 rounded-full text-xs">
                                Publié
                            </span>

                        @elseif($event->status=='draft')

                            <span class="bg-yellow-400/10 text-yellow-400 px-3 py-1 rounded-full text-xs">
                                Draft
                            </span>

                        @else

                            <span class="bg-red-400/10 text-red-400 px-3 py-1 rounded-full text-xs">
                                Cancelled
                            </span>

                        @endif

                    </td>

                </tr>

                @empty

                <tr>

                    <td colspan="7" class="text-center py-10 text-zinc-500">

                        Aucun événement trouvé.

                    </td>

                </tr>

                @endforelse

            </tbody>

        </table>

    </div>

</div>

@endsection