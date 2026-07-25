@extends('layouts.app')

@section('title', 'Events')

@section('content')
<h2 class="text-2xl font-bold mb-6">
    🔥 Events disponibles
</h2>




<div class="grid md:grid-cols-3 gap-6">



    @foreach($events as $event)



    <div class="bg-card border border-zinc-800 rounded-2xl overflow-hidden hover:border-amber-500/40 transition group">



        <div class="h-48 bg-zinc-800 relative">


            <img
                src="https://images.unsplash.com/photo-1511578314322-379afb476865"
                class="w-full h-full object-cover group-hover:scale-105 transition duration-500">


            <span class="absolute top-4 right-4 
bg-emerald-400 text-black 
px-3 py-1 rounded-full text-xs font-bold">


                @if($event->price == 0)

                Gratuit

                @else

                {{$event->price}} DH

                @endif


            </span>


        </div>






        <div class="p-6">


            <p class="text-amber-400 text-xs uppercase">

                {{$event->category}}

            </p>



            <h3 class="text-xl font-bold mt-2">

                {{$event->title}}

            </h3>



            <p class="text-zinc-400 text-sm mt-3 line-clamp-2">

                {{$event->description}}

            </p>




            <div class="mt-5 space-y-2 text-sm text-zinc-400">


                <div>
                    📅 {{$event->date_event}}
                </div>


                <div>
                    📍 {{$event->location}}
                </div>


                <div>
                    👥 {{$event->capacity}} places
                </div>


            </div>




            <form action="{{ route('Reservations')}} " method="POST">
                <button type="submit"
                    class="block text-center mt-6 
                  bg-amber-500 text-black 
                    py-3 rounded-xl font-bold
                  hover:bg-amber-400">


                    S'inscrire


                </button>

            </form>




        </div>


    </div>


    @endforeach


</div>

@endsection