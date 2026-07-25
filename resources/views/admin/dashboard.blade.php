@extends('layouts.app')

@section('title','Dashboard')

@section('content')


<div class="flex justify-between items-center mb-10">

    <div>
        <h2 class="text-3xl font-bold">
            Dashboard
        </h2>

        <p class="text-zinc-400">
            Gestion de la plateforme BDE
        </p>
    </div>


    <a href="{{ route('creatEvenment') }}"
    class="bg-emerald-400 text-black px-5 py-3 rounded-xl font-bold">

        + Nouvel événement

    </a>


</div>



<!-- STATS -->

<div class="grid md:grid-cols-4 gap-6">


<div class="bg-card border border-zinc-800 rounded-2xl p-6">

<p class="text-zinc-400">
Events
</p>

<h3 class="text-4xl font-black mt-3">
    {{$eventsCount}}
</h3>

</div>



<div class="bg-card border border-zinc-800 rounded-2xl p-6">

<p class="text-zinc-400">
Reservations
</p>

<h3 class="text-4xl font-black mt-3">
{{$reservations}}
</h3>

</div>




<div class="bg-card border border-zinc-800 rounded-2xl p-6">

<p class="text-zinc-400">
Students
</p>

<h3 class="text-4xl font-black mt-3">
{{$students}}
</h3>

</div>




<div class="bg-card border border-zinc-800 rounded-2xl p-6">

<p class="text-zinc-400">
Revenue
</p>

<h3 class="text-4xl font-black mt-3">
{{$revenue}}
</h3>

</div>


</div>



@endsection