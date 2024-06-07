@extends('main')

@section('content')
    <section class="max-w-4xl p-6 mx-auto bg-white rounded-md shadow-md dark:bg-gray-800 mt-20">
        <h2 class="text-lg font-semibold text-black capitalize dark:text-white">Create Torneo</h2>
        <form action="{{ route('torneos.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('POST')
            <div class="grid grid-cols-1 gap-6 mt-4 sm:grid-cols-2">
                <div>
                    <label class="text-black dark:text-gray-200" for="nombre">Nombre</label>
                    <input id="nombre" name="nombre" type="text" class="block w-full px-4 py-2 mt-2 text-black bg-white border border-black rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-black focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
                </div>
                <div>
                    <label class="text-black dark:text-gray-200" for="ubicacion">Ubicación</label>
                    <input id="ubicacion" name="ubicacion" type="text" class="block w-full px-4 py-2 mt-2 text-black bg-white border border-black rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-black focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
                </div>
                <div>
                    <label class="text-black dark:text-gray-200" for="modo">Modo</label>
                    <select id="modo" name="modo" class="block w-full px-4 py-2 mt-2 text-black bg-white border border-black rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-black focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
                        <option value="INDIVIDUAL">Individual</option>
                        <option value="DOBLES">Dobles</option>
                        <option value="INDIVIDUAL_DOBLES">Individual/Dobles</option>
                    </select>
                </div>
                <div>
                    <label class="text-black dark:text-gray-200" for="categoria">Categoría</label>
                    <select id="categoria" name="categoria" class="block w-full px-4 py-2 mt-2 text-black bg-white border border-black rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-black focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
                        <option value="ATP_250">ATP 250</option>
                        <option value="ATP_500">ATP 500</option>
                        <option value="MASTERS_1000">Masters 1000</option>
                    </select>
                </div>
                <div>
                    <label class="text-black dark:text-gray-200" for="superficie">Superficie</label>
                    <select id="superficie" name="superficie" class="block w-full px-4 py-2 mt-2 text-black bg-white border border-black rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-black focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
                        <option value="DURA">Dura</option>
                        <option value="HIERBA">Hierba</option>
                        <option value="ARCILLA">Arcilla</option>
                    </select>
                </div>
                <div>
                    <label class="dark:text-gray-200" for="premio">Premio</label>
                    <input id="premio" name="premio" type="number" class="block w-full px-4 py-2 mt-2 text-black bg-white border border-black rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-black focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
                </div>
                <div>
                    <label class="text-black dark:text-gray-200" for="puntos">Puntos</label>
                    <input id="puntos" name="puntos" type="number" class="block w-full px-4 py-2 mt-2 text-black bg-white border border-black rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-black focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
                </div>
                <div>
                    <label class="text-black dark:text-gray-200" for="puntos">Entradas</label>
                    <input id="entradas" name="entradas" type="number" class="block w-full px-4 py-2 mt-2 text-black bg-white border border-black rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-black focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
                </div>
                <div>
                    <label class="text-black dark:text-gray-200" for="fechaInicio">Fecha de Inicio</label>
                    <input id="fechaInicio" name="fechaInicio" type="date" class="block w-full px-4 py-2 mt-2 text-black bg-white border border-black rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-black focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
                </div>
                <div>
                    <label class="text-black dark:text-gray-200" for="fechaFinalizacion">Fecha de Finalización</label>
                    <input id="fechaFinalizacion" name="fechaFinalizacion" type="date" class="block w-full px-4 py-2 mt-2 text-black bg-white border border-black rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-black focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
                </div>
                <div>
                    <label class="text-black dark:text-gray-200" for="imagen">Imagen</label>
                    <input id="imagen" name="imagen" type="file" class="block w-full px-4 py-2 mt-2 text-black bg-white border border-black rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-black focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
                </div>
            </div>

            <div class="flex justify-end mt-6">
                <button type="submit" class="px-6 py-2 leading-5 text-white transition-colors duration-200 transform bg-gray-700 rounded-md hover:bg-gray-600 focus:outline-none focus:bg-gray-600">Save</button>
            </div>
        </form>
    </section>
@endsection
