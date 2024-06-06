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
