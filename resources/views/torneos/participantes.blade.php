@extends('main')

@section('content')
    <body class="bg-cover bg-center" style="background-image: url('https://th.bing.com/th/id/OIP.mr1yFSfM84moAENvhSGfxwHaEi?rs=1&pid=ImgDetMain')">
    <section class="container mx-auto p-10 md:py-20 px-0 md:p-10 md:px-0">
        <section
            class="bg-gray-100 flex flex-col md:flex-row relative px-10 md:p-0 transform duration-500 hover:shadow-2xl cursor-pointer hover:-translate-y-1">
            <img class="xl:max-w-6xl" src="{{ $torneo->imagen ?? \App\Models\Torneo::$IMAGE_DEFAULT }}"
                 alt="{{ $torneo->nombre }}">
            <div class="ml-4 content  p-2 pt-8 md:p-12 pb-12 lg:max-w-lg w-full">
                <div class="flex justify-between font-bold text-sm">
                    <p>{{ $torneo->categoria }}</p>
                    <p class="text-gray-400">{{ $torneo->fechaInicio }} - {{ $torneo->fechaFinalizacion }}</p>
                </div>
                <h2 class="text-3xl font-semibold mt-4 md:mt-10">{{ $torneo->nombre }}</h2>
                <p class="my-3 text-justify font-medium text-gray-700 leading-relaxed">{{ $torneo->ubicacion }}</p>
                <p class="my-3 text-justify font-medium text-gray-700 leading-relaxed">{{ $torneo->modo }}</p>
                <p class="my-3 text-justify font-medium text-gray-700 leading-relaxed">{{ $torneo->superficie }}</p>
                <p class="my-3 text-justify font-medium text-gray-700 leading-relaxed">{{ $torneo->entradas }}</p>
                <p class="my-3 text-justify font-medium text-gray-700 leading-relaxed">{{ $torneo->premio }}</p>
                <p class="my-3 text-justify font-medium text-gray-700 leading-relaxed">{{ $torneo->puntos }}</p>
                <button class="mt-2 md:mt-5 p-3 px-5 bg-black text-white font-bold text-sm hover:bg-purple-800">
                    Participar
                </button>
            </div>
        </section>
    </section>

    <section class="container mx-auto p-10">
        <h2 class="text-2xl font-semibold mb-8">Participantes</h2>
        @foreach($torneo->participantes->chunk(4) as $participantesChunk)
            <div class="flex flex-wrap justify-center">
                @foreach($participantesChunk as $participante)
                    <div
                        class="p-4 m-2 flex-shrink-0 relative overflow-hidden bg-orange-500 rounded-lg w-90 mt-10 shadow-lg"
                        style="background-image: url('{{ $participante->tenista->imagen ?? 'https://cope-cdnmed.agilecontent.com/resources/jpg/1/0/1603465773101.jpg' }}'); background-size: cover; background-position: center;">
                        <div class="relative pt-10 px-10 flex items-center justify-center">
                            <div class="block absolute w-48 h-48 bottom-0 left-0 -mb-24 ml-3"
                                 style="background: radial-gradient(black, transparent 60%); transform: rotate3d(0, 0, 1, 20deg) scale3d(1, 0.6, 1); opacity: 0.2;"></div>
                        </div>
                        <div class="relative text-white px-6 pb-6 mt-6">
                            <span class="block opacity-75 -mb-1">{{ $participante->tenista->nombre }}</span>
                            <div class="flex justify-between items-center">
                                <span
                                    class="block font-semibold text-xl">Ranking {{ $participante->tenista->ranking }}</span>
                                <span
                                    class="block bg-white rounded-full text-orange-500 text-xs font-bold px-3 py-2 leading-none flex items-center">PUNTOS {{ $participante->tenista->puntos }}</span>
                            </div>
                            <div class="flex justify-between items-center mt-2">
                                <span
                                    class="block bg-white rounded-full text-blue-500 text-xs font-bold px-3 py-2 leading-none flex items-center">WINRATE {{ $participante->tenista->winrate }}</span>
                                <a href="{{ route('tenistas.show', $participante->tenista->id) }}"
                                   class="ml-2 block bg-white rounded text-green-900 text-xs font-bold px-3 py-2 leading-none flex items-center">
                                    VER DETALLES
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @endforeach
    </section>
    </body>

@endsection
