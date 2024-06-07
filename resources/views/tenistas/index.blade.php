@extends('main')

@section('content')
    <body id="bodyIndexTenista" class="text-align-center" style="background-image: url('https://th.bing.com/th/id/R.9e368d13d05df97f8de0a401a89b3168?rik=nGrPe7np0bxULg&riu=http%3a%2f%2fgetwallpapers.com%2fwallpaper%2ffull%2fe%2f9%2fb%2f1085668-best-simple-backgrounds-2490x1402-notebook.jpg&ehk=VAtr%2bthk46SmqH0MceKsy%2feyt3Kola3GsQZWn97cnuI%3d&risl=&pid=ImgRaw&r=0'); background-size: cover;">
    @foreach($tenistas->chunk(3) as $tenistasChunk)
        <div class="flex flex-wrap justify-center rounded-full pl-40">
            @foreach($tenistasChunk as $tenista)
                <section class="container mx-auto p-10 md:p-20 antialiased w-1/2">
                    <article class="flex flex-wrap md:flex-nowrap shadow-lg mx-auto bg-gray-500 max-w-3xl group cursor-pointer transform duration-500 hover:-translate-y-1">
                        <img class="w-full object-cover md:w-52" src="{{$tenista->imagen}}" alt="">
                        <div class="">
                            <div class="p-5 pb-10">
                                <h1 class="text-2xl font-semibold text-gray-800 mt-4">
                                    {{$tenista->nombre}}
                                </h1>
                                <p class="text-xl text-gray-400 mt-2 leading-relaxed"></p>
                            </div>
                            <div class="bg-blue-50 p-5">
                                <div class="sm:flex sm:justify-between">
                                    <div>
                                        <div class="text-lg text-gray-700">
                                            <span class="text-gray-900 font-bold">Puntos: {{$tenista->puntos}}</span>
                                        </div>
                                        <div class="text-lg text-gray-700">
                                            <span class="text-gray-900 font-bold">WinRate: {{$tenista->winrate}}</span>
                                        </div>
                                    </div>
                                    <a href="{{ route('tenistas.show', $tenista->id) }}">
                                        <button class="ml-5 mt-3 sm:mt-0 py-2 px-5 md:py-3 md:px-6 bg-purple-700 hover:bg-purple-600 font-bold text-white md:text-lg rounded-lg shadow-md">
                                            Ver detalles
                                        </button>
                                    </a>
                                    @auth()
                                        @if(Auth::user()->role === 'admin' || Auth::user()->role === 'adminTenista')
                                            <a href="{{ route('tenistas.edit', $tenista->id) }}">
                                                <button class="ml-5 mt-3 sm:mt-0 py-2 px-5 md:py-3 md:px-6 bg-blue-700 hover:bg-blue-600 font-bold text-white md:text-lg rounded-lg shadow-md">
                                                    Editar tenista
                                                </button>
                                            </a>
                                        @endif
                                    @endauth
                                </div>
                                <div class="mt-3 text-gray-600 text-sm md:text-sm"></div>
                            </div>
                        </div>
                    </article>
                </section>
            @endforeach
        </div>
    @endforeach
    <div class="flex justify-center">
        {{ $tenistas->links() }}
    </div>
    </body>
@endsection
