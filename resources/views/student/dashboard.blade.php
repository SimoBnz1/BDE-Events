@extends('layouts.student')

@section('title','Student Dashboard')


@section('content')


<div class="mb-10">


<h1 class="text-3xl font-black">
Bonjour {{auth()->user()->name}} 👋
</h1>


<p class="text-zinc-400 mt-2">
Découvrez les prochains événements de votre campus
</p>


</div>



<!-- STATS -->

<div class="grid md:grid-cols-3 gap-6 mb-10">


<div class="bg-card border border-zinc-800 rounded-2xl p-6">

<p class="text-zinc-400">
Events disponibles
</p>

<h2 class="text-4xl font-black mt-3">
{{$availableEvents}}
</h2>


</div>




<div class="bg-card border border-zinc-800 rounded-2xl p-6">

<p class="text-zinc-400">
Mes réservations
</p>

<h2 class="text-4xl font-black mt-3">
{{$myReservations}}
</h2>


</div>




<div class="bg-card border border-zinc-800 rounded-2xl p-6">

<p class="text-zinc-400">
Mon statut
</p>

<h2 class="text-2xl font-black mt-3 text-emerald-400">
Active
</h2>


</div>


</div>



@endsection