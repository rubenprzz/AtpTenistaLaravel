@extends('main')

@section('content')
    <section class="text-gray-400 bg-gray-900 body-font">
        <div class="container px-5 py-24 mx-auto ">
            <div class="flex flex-col">
                <div class="h-1 bg-gray-800 rounded overflow-hidden">
                    <div class="w-24 h-full bg-indigo-500"></div>
                </div>
                <div class="flex flex-wrap sm:flex-row flex-col py-6 mb-12">
                    <h1 class="sm:w-2/5 text-white font-medium title-font text-2xl mb-2 sm:mb-0">Torneos</h1>
                    <p class="sm:w-3/5 leading-relaxed text-base sm:pl-10 pl-0">Aquí puedes ver los torneos activos.</p>
                </div>
            </div>
            <div class="flex flex-wrap sm:-m-4 -mx-4 -mb-10 -mt-4">
                @foreach($torneos as $torneo)
                    <div class="p-4 md:w-1/3 sm:mb-0 mb-6">
                        <div class="rounded-lg h-64 overflow-hidden">
                            <img alt="content" class="object-cover object-justift h-full w-full"
                                 src="{!! isset($torneo->imagen) ? $torneo->imagen : $IMAGEN_DEFAULT !!}">
                        </div>
                        <h2 class="text-xl font-medium title-font text-white mt-5">{{ $torneo->nombre }}</h2>
                        <p class="text-base leading-relaxed mt-2">{{ $torneo->ubicacion }}</p>
                        <a class="text-indigo-400 inline-flex items-center mt-3 " href="{{route('torneos.show',$torneo->id)}}">Ver Participantes
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                 stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24 ">
                                <path d="M5 12h14M12 5l7 7-7 7"></path>
                            </svg>
                        </a>
                    </div>
                @endforeach
            </div>
            <div class="flex justify-center ml-5 d-flex">
                {{$torneos->links()}}
            </div>
        </div>

    </section>
@endsection
