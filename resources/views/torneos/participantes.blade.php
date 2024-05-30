@extends('main')

@section('content')
    @foreach($torneo->participantes->chunk(4) as $participantesChunk)
        <div class="flex flex-wrap justify-center">
            @foreach($participantesChunk as $participante)
                <div class="p-4 m-2 flex-shrink-0 relative overflow-hidden bg-orange-500 rounded-lg w-25 shadow-lg" id="Caja" style="background-image: url('{{ $participante->tenista->imagen ? $participante->tenista->imagen : 'https://cope-cdnmed.agilecontent.com/resources/jpg/1/0/1603465773101.jpg' }}'); background-size: cover; background-position: center;">
                    <div class="relative pt-10 px-10 flex items-center justify-center">
                        <div class="block absolute w-48 h-48 bottom-0 left-0 -mb-24 ml-3" style="background: radial-gradient(black, transparent 60%); transform: rotate3d(0, 0, 1, 20deg) scale3d(1, 0.6, 1); opacity: 0.2;"></div>
                    </div>
                    <div class="relative text-white px-6 pb-6 mt-6">
                        <span class="block opacity-75 -mb-1">{{ $participante->tenista->nombre }}</span>
                        <div class="flex justify-between">
                            <span class="block font-semibold text-xl">Ranking {{ $participante->tenista->ranking }}</span>
                            <span class="block bg-white rounded-full text-orange-500 text-xs font-bold px-3 py-2 leading-none flex items-center">PUNTOS {{ $participante->tenista->puntos }}</span>
                            <span class="block bg-white rounded-full text-blue-500 text-xs font-bold px-3 py-2 leading-none flex items-center">WINRATE {{ $participante->tenista->winrate }}</span>
                            <span class="block bg-white rounded-1 text-green-900 text-xs font-bold px-3 py-2 leading-none flex items-center">VER DETALLES DEL TENISTA</span>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @endforeach
    <div class="flex justify-center">
        {{$participante->links()}}
    </div>
@endsection
