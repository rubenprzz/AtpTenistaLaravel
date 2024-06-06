@extends('main')

@section('content')
    <section class="text-gray-400 bg-gray-900 body-font">
        <div class="container px-5 py-24 mx-auto">
            <div class="flex flex-col">
                <div class="h-1 bg-gray-800 rounded overflow-hidden">
                    <div class="w-24 h-full bg-indigo-500"></div>
                </div>
                <div class="flex flex-wrap sm:flex-row flex-col py-6 ">
                    <h1 class="sm:w-2/5 text-white font-medium title-font text-2xl  sm:mb-0">Torneos</h1>
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
                        <a class="text-indigo-400 inline-flex items-center mt-3"
                           href="{{route('torneos.show',$torneo->id)}}">Ver Participantes
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                 stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                                <path d="M5 12h14M12 5l7 7-7 7"></path>
                            </svg>
                        </a>
                        @auth
                            @if(Auth::user()->role === 'admin' || Auth::user()->role === 'adminTorneo')
                                <button onclick="openModal('{{ $torneo->id }}')"
                                        class="text-orange-400 inline-flex items-center mt-3">
                                    Eliminar
                                    <svg fill="none" stroke="currentColor" stroke-linecap="round"
                                         stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2"
                                         viewBox="0 0 24 24">
                                        <path d="M5 12h14M12 5l7 7-7 7"></path>
                                    </svg>
                                </button>
                            @endif
                        @endauth

                    </div>
                @endforeach
            </div>
            <div class="flex justify-center ml-5 d-flex">
                {{$torneos->links()}}
            </div>
        </div>
        <div id="confirmationModal" class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 hidden">
            <div class="bg-white p-6 rounded-lg shadow-lg">
                <h2 class="text-lg text-black font-semibold mb-4">Confirmación</h2>
                <p class="text-gray-700">¿Estás seguro de que deseas eliminar este torneo?</p>
                <div class="mt-6 flex justify-end space-x-4">
                    <button onclick="closeModal()" class="px-4  bg-gray-600 text-white rounded">Cancelar</button>
                    <form id="deleteForm" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="px-4  py-2 bg-red-600 text-white rounded">Eliminar</button>
                    </form>
                </div>
            </div>
        </div>

        <script>
            function openModal(torneoId) {
                document.getElementById('confirmationModal').classList.remove('hidden');
                document.getElementById('deleteForm').action = `/torneos/${torneoId}`;
            }

            function closeModal() {
                document.getElementById('confirmationModal').classList.add('hidden');
            }
        </script>

    </section>

@endsection
