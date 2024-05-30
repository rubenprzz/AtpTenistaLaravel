@extends('main')
@section('content')

    <body class="bg-gray-200 mb-10" style="background-image: url('https://th.bing.com/th/id/OIP.A-ofR36EORpOsW-cmuoPrQHaEo?rs=1&pid=ImgDetMain');background-size: cover">
    <section class="container mx-auto p-10 md:py-20 px-0 md:p-10 md:px-0 h-75">
        <section class="relative px-10 md:p-0 transform duration-500 hover:shadow-2xl cursor-pointer hover:-translate-y-1 ">
            <img class="xl:max-w-3xl" src="{{$tenista->imagen}}" alt="">
            <div class="  p-2   md:p-12 pb-12 lg:max-w-lg w-full lg:absolute top-48 right-5">
                <div class="  font-bold text-l mt-0"> <!-- Ajuste aquí -->
                    <p>Nombre: {{$tenista->nombre}}</p>
                    <p >Fecha Nac: {{$tenista->fechaNacimiento}}</p>
                    <p>Pais: {{$tenista->pais}}</p>
                    <p>Altura: {{$tenista->altura}}</p>
                    <p>Peso: {{$tenista->peso}}</p>
                    <p>Mano: {{$tenista->mano}}</p>
                    <p>Ranking: {{$tenista->ranking}}</p>

                </div>
                <div class=" justify-content-center font-bold text-l">
                    <p>Entrenador: {{$tenista->entrenador}}</p>
                    <p>Reves: {{$tenista->reves}}</p>
                    <p>Modo: {{$tenista->modo}}</p>
                    <p>Altura: {{$tenista->altura}}</p>
                    <p>Peso: {{$tenista->peso}}</p>
                    <p>WinRate:{{$tenista->winrate}}</p>
                    <p class="text-yellow-500">Dinero ganado: {{$tenista->dineroGanado}}</p>
                </div>
                <h2 class="text-2xl font-semibold ">Puntos: {{$tenista->puntos}}</h2>
            </div>
        </section>
    </section>
    </body>
@endsection
