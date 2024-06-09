@extends('main')

@section('content')
    <section class="max-w-4xl p-6 mx-auto bg-white rounded-md shadow-md dark:bg-gray-800 mt-20">
        <h2 class="text-lg font-semibold text-black capitalize dark:text-white">Añadir Participante al Torneo</h2>
        <form action="{{ route('torneos.addParticipante', $torneo->id) }}" method="POST">
            @csrf

            <div class="grid grid-cols-1 gap-6 mt-4 sm:grid-cols-2">
                <div>
                    <label class="text-black dark:text-gray-200" for="tenista_id">Seleccionar Tenista</label>
                    <select id="tenista_id" name="tenista_id" class="block w-full px-4 py-2 mt-2 text-black bg-white border border-black rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-black focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
                        @foreach($tenistas as $tenista)
                            <option value="{{ $tenista->id }}">{{ $tenista->nombre }}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="flex justify-end mt-6">
                <button type="submit" {{redirect('torneos.index')}} class="px-6 py-2 leading-5 text-white transition-colors duration-200 transform bg-gray-700 rounded-md hover:bg-gray-600 focus:outline-none focus:bg-gray-600">Añadir Participante</button>
            </div>
        </form>
    </section>
@endsection

