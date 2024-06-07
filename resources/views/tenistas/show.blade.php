@extends('main')
@section('content')

    <body class="bg-gray-200 mb-10" style="background-image: url('https://th.bing.com/th/id/OIP.A-ofR36EORpOsW-cmuoPrQHaEo?rs=1&pid=ImgDetMain');background-size: cover">
    <section class="container mx-auto p-10 md:py-20 px-0 md:p-10 md:px-0 h-75">
        <section class="relative px-10 md:p-0 transform duration-500 hover:shadow-2xl cursor-pointer hover:-translate-y-1 ">
            <img class="xl:max-w-3xl" src="{{ $tenista->imagen }}" alt="">
            <div class="p-2 md:p-12 pb-12 lg:max-w-lg w-full lg:absolute top-48 right-5">
                <div class="font-bold text-l mt-0">
                    <p>Nombre: {{ $tenista->nombre }}</p>
                    <p>Fecha Nac: {{ $tenista->fechaNacimiento }}</p>
                    <p>Pais: {{ $tenista->pais }}</p>
                    <p>Altura: {{ $tenista->altura }}</p>
                    <p>Peso: {{ $tenista->peso }}</p>
                    <p>Mano: {{ $tenista->mano }}</p>
                    <p>Ranking: {{ $tenista->ranking }}</p>
                </div>
                <div class="justify-content-center font-bold text-l">
                    <p>Entrenador: {{ $tenista->entrenador }}</p>
                    <p>Reves: {{ $tenista->reves }}</p>
                    <p>Modo: {{ $tenista->modo }}</p>
                    <p>Altura: {{ $tenista->altura }}</p>
                    <p>Peso: {{ $tenista->peso }}</p>
                    <p>WinRate: {{ $tenista->winrate }}</p>
                    <p class="text-yellow-500">Dinero ganado: {{ $tenista->dineroGanado }}</p>
                </div>
                <h2 class="text-2xl font-semibold">Puntos: {{ $tenista->puntos }}</h2>
                <a class="btn btn-outline-danger text-white" href="{{ route('generate-pdf', ['id' => $tenista->id]) }}">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-filetype-pdf" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M14 4.5V14a2 2 0 0 1-2 2h-1v-1h1a1 1 0 0 0 1-1V4.5h-2A1.5 1.5 0 0 1 9.5 3V1H4a1 1 0 0 0-1 1v9H2V2a2 2 0 0 1 2-2h5.5zM1.6 11.85H0v3.999h.791v-1.342h.803q.43 0 .732-.173.305-.175.463-.474a1.4 1.4 0 0 0 .161-.677q0-.375-.158-.677a1.2 1.2 0 0 0-.46-.477q-.3-.18-.732-.179m.545 1.333a.8.8 0 0 1-.085.38.57.57 0 0 1-.238.241.8.8 0 0 1-.375.082H.788V12.48h.66q.327 0 .512.181.185.183.185.522m1.217-1.333v3.999h1.46q.602 0 .998-.237a1.45 1.45 0 0 0 .595-.689q.196-.45.196-1.084 0-.63-.196-1.075a1.43 1.43 0 0 0-.589-.68q-.396-.234-1.005-.234zm.791.645h.563q.371 0 .609.152a.9.9 0 0 1 .354.454q.118.302.118.753a2.3 2.3 0 0 1-.068.592 1.1 1.1 0 0 1-.196.422.8.8 0 0 1-.334.252 1.3 1.3 0 0 1-.483.082h-.563zm3.743 1.763v1.591h-.79V11.85h2.548v.653H7.896v1.117h1.606v.638z"/>
                    </svg>
                </a>
            </div>
        </section>
    </section>
    <section class="container mx-auto mt-10">
        <h2 class="text-3xl font-bold text-center mb-10">Torneos en los que ha participado</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8">
            @foreach($tenista->torneos as $torneo)
                <a href="{{route('torneos.show',$torneo->id)}}">
                <article class="relative isolate flex flex-col justify-end overflow-hidden rounded-2xl px-8 pb-8 pt-40 bg-white shadow-lg transform transition-transform duration-500 hover:scale-105">
                    <img src="{{$torneo->imagen}}" alt="{{ $torneo->nombre }}" class="absolute inset-0 h-full w-full object-cover">
                    <div class="absolute inset-0 bg-gradient-to-t from-gray-900 via-gray-900/40"></div>
                    <p class="z-10 mt-3 text-3xl font-bold text-white">{{ $torneo->nombre }}</p>
                    <p class="z-10 mt-3 text-3xl font-bold text-white">{{ $torneo->ubicacion }}</p>
                </article>
                </a>
            @endforeach

        </div>
    </section>
    </body>
@endsection
