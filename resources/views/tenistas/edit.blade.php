@extends('main')

@section('content')
    <section class="max-w-4xl p-6 mx-auto bg-white rounded-md shadow-md dark:bg-gray-800 mt-20">
        <h2 class="text-lg font-semibold text-black capitalize dark:text-white">Edit Tenista</h2>
        <form action="{{ route('tenistas.update', $tenista->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="grid grid-cols-1 gap-6 mt-4 sm:grid-cols-2">
                <div>
                    <label class="text-black dark:text-gray-200" for="nombre">Nombre</label>
                    <input id="nombre" name="nombre" type="text" value="{{ $tenista->nombre }}" class="block w-full px-4 py-2 mt-2 text-black bg-white border border-black rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-black focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
                </div>
                <div>
                    <label class="text-black dark:text-gray-200" for="pais">País</label>
                    <input id="pais" name="pais" type="text" value="{{ $tenista->pais }}" class="block w-full px-4 py-2 mt-2 text-black bg-white border border-black rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-black focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
                </div>
                <div>
                    <label class="text-black dark:text-gray-200" for="puntos">Puntos</label>
                    <input id="puntos" name="puntos" type="number" value="{{ $tenista->puntos }}" class="block w-full px-4 py-2 mt-2 text-black bg-white border border-black rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-black focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
                </div>
                <div>
                    <label class="text-black dark:text-gray-200" for="fecha_nacimiento">Fecha de Nacimiento</label>
                    <input id="fecha_nacimiento" name="fecha_nacimiento" type="date" value="{{ $tenista->fecha_nacimiento }}" class="block w-full px-4 py-2 mt-2 text-black bg-white border border-black rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-black focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
                </div>
                <div>
                    <label class="text-black dark:text-gray-200" for="altura">Altura</label>
                    <input id="altura" name="altura" type="number" step="0.01" value="{{ $tenista->altura }}" class="block w-full px-4 py-2 mt-2 text-black bg-white border border-black rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-black focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
                </div>
                <div>
                    <label class="text-black dark:text-gray-200" for="profesional_desde">Profesional Desde</label>
                    <input id="profesional_desde" name="profesional_desde" type="date" value="{{ $tenista->profesional_desde }}" class="block w-full px-4 py-2 mt-2 text-black bg-white border border-black rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-black focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
                </div>
                <div>
                    <label class="text-black dark:text-gray-200" for="mano">Mano</label>
                    <select id="mano" name="mano" class="block w-full px-4 py-2 mt-2 text-black bg-white border border-black rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-black focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
                        <option value="DIESTRO" {{ $tenista->mano == 'DIESTRO' ? 'selected' : '' }}>Diestro</option>
                        <option value="ZURDO" {{ $tenista->mano == 'ZURDO' ? 'selected' : '' }}>Zurdo</option>
                    </select>
                </div>
                <div>
                    <label class="text-black dark:text-gray-200" for="reves">Reves</label>
                    <select id="reves" name="reves" class="block w-full px-4 py-2 mt-2 text-black bg-white border border-black rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-black focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
                        <option value="UNA_MANO" {{ $tenista->reves == 'UNA_MANO' ? 'selected' : '' }}>Una Mano</option>
                        <option value="DOS_MANOS" {{ $tenista->reves == 'DOS_MANOS' ? 'selected' : '' }}>Dos Manos</option>
                    </select>
                </div>
                <div>
                    <label class="text-black dark:text-gray-200" for="modo">Modo</label>
                    <select id="modo" name="modo" class="block w-full px-4 py-2 mt-2 text-black bg-white border border-black rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-black focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
                        <option value="INDIVIDUAL" {{ $tenista->modo == 'INDIVIDUAL' ? 'selected' : '' }}>Individual</option>
                        <option value="DOBLES" {{ $tenista->modo == 'DOBLES' ? 'selected' : '' }}>Dobles</option>
                        <option value="AMBOS" {{ $tenista->modo == 'AMBOS' ? 'selected' : '' }}>Ambos</option>
                    </select>
                </div>
                <div>
                    <label class="text-black dark:text-gray-200" for="wins">Victorias</label>
                    <input id="wins" name="wins" type="number" value="{{ $tenista->wins }}" class="block w-full px-4 py-2 mt-2 text-black bg-white border border-black rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-black focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
                </div>
                <div>
                    <label class="text-black dark:text-gray-200" for="loses">Derrotas</label>
                    <input id="loses" name="loses" type="number" value="{{ $tenista->loses }}" class="block w-full px-4 py-2 mt-2 text-black bg-white border border-black rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-black focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
                </div>
                <div>
                    <label class="text-black dark:text-gray-200" for="imagen">Imagen</label>
                    @if($tenista->imagen)
                        <img src="{{ asset('storage/' . $tenista->imagen) }}" alt="Imagen del tenista" class="w-32 h-32 mb-4">
                    @endif
                    <input id="imagen" name="imagen" type="file" class="block w-full px-4 py-2 mt-2 text-black bg-white border border-black rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-black focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
                </div>
            </div>

            <div class="flex justify-end mt-6">
                <button type="submit" class="px-6 py-2 leading-5 text-white transition-colors duration-200 transform bg-gray-700 rounded-md hover:bg-gray-600 focus:outline-none focus:bg-gray-600">Save</button>
            </div>
        </form>
    </section>
@endsection
