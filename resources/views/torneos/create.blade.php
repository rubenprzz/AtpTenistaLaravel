@extends('main')

@section('title', 'Crear Torneo')

@section('content')
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    @if (session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif
    <div class="min-h-screen p-6 bg-gray-100 flex items-center justify-center">
        <div class="container max-w-screen-lg mx-auto">
            <div>
                <h2 class="font-semibold text-xl text-gray-600">Crear Torneo</h2>
                <p class="text-gray-500 mb-6">Complete todos los campos para crear un nuevo torneo.</p>

                <div class="bg-white rounded shadow-lg p-4 px-4 md:p-8 mb-6">
                    <form action="{{ route('torneos.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 lg:grid-cols-3">
                            <div class="text-gray-600">
                                <p class="font-medium text-lg">Detalles del Torneo</p>
                                <p>Complete todos los campos.</p>
                            </div>

                            <div class="lg:col-span-2">
                                <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 md:grid-cols-5">
                                    <div class="md:col-span-5">
                                        <label for="nombre">Nombre del Torneo</label>
                                        <input type="text" name="nombre" id="nombre"
                                               class="h-10 border mt-1 rounded px-4 w-full bg-gray-50"
                                               value="{{ old('nombre') }}" required/>
                                    </div>

                                    <div class="md:col-span-5">
                                        <label for="ubicacion">Ubicación</label>
                                        <input type="text" name="ubicacion" id="ubicacion"
                                               class="h-10 border mt-1 rounded px-4 w-full bg-gray-50"
                                               value="{{ old('ubicacion') }}" required/>
                                    </div>

                                    <div class="md:col-span-3">
                                        <label for="categoria">Categoría</label>
                                        <select name="categoria" id="categoria"
                                                class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" required>
                                            <option value="" disabled selected> -</option>
                                            <option value="ATP_250">ATP 250</option>
                                            <option value="ATP_500">ATP 500</option>
                                            <option value="MASTERS_1000">MASTERS 1000</option>
                                        </select>
                                    </div>

                                    <div class="md:col-span-2">
                                        <label for="modo">Modo</label>
                                        <select name="modo" id="modo"
                                                class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" required>
                                            <option value="" disabled selected> -</option>
                                            <option value="INDIVIDUAL">INDIVIDUAL</option>
                                            <option value="DOBLES">DOBLES</option>
                                            <option value="INDIVIDUAL_DOBLES">INDIVIDUAL Y DOBLES</option>
                                        </select>
                                    </div>

                                    <div class="md:col-span-2">
                                        <label for="superficie">Superficie</label>
                                        <select name="superficie" id="superficie"
                                                class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" required>
                                            <option value="" disabled selected> -</option>
                                            <option value="ARCILLA">ARCILLA</option>
                                            <option value="DURA">DURA</option>
                                            <option value="HIERBA">HIERBA</option>
                                        </select>
                                    </div>

                                    <div class="md:col-span-1">
                                        <label for="entradas">Entradas</label>
                                        <input type="number" name="entradas" id="entradas"
                                               class="h-10 border mt-1 rounded px-4 w-full bg-gray-50"
                                               value="{{ old('entradas') }}" required/>
                                    </div>

                                    <div class="md:col-span-2">
                                        <label for="premio">Premio</label>
                                        <input type="number" name="premio" id="premio"
                                               class="h-10 border mt-1 rounded px-4 w-full bg-gray-50"
                                               value="{{ old('premio') }}" required/>
                                    </div>

                                    <div class="md:col-span-1">
                                        <label for="puntos">Puntos</label>
                                        <input type="number" name="puntos" id="puntos"
                                               class="h-10 border mt-1 rounded px-4 w-full bg-gray-50"
                                               value="{{ old('puntos') }}" required/>
                                    </div>

                                    <div class="md:col-span-5">
                                        <label for="imagen">Imagen</label>
                                        <input type="file" name="imagen" id="imagen"
                                               class="h-10 border mt-1 rounded px-4 w-full bg-gray-50"
                                               value="{{ old('imagen') }}"/>
                                    </div>

                                    <div class="md:col-span-2">
                                        <label for="fechaInicio">Fecha de Inicio</label>
                                        <input type="date" name="fechaInicio" id="fechaInicio"
                                               class="h-10 border mt-1 rounded px-4 w-full bg-gray-50"
                                               value="{{ old('fechaInicio') }}" required/>
                                    </div>

                                    <div class="md:col-span-2">
                                        <label for="fechaFinalizacion">Fecha de Finalización</label>
                                        <input type="date" name="fechaFinalizacion" id="fechaFinalizacion"
                                               class="h-10 border mt-1 rounded px-4 w-full bg-gray-50"
                                               value="{{ old('fechaFinalizacion') }}" required/>
                                    </div>

                                    <div class="md:col-span-5 text-right">
                                        <div class="inline-flex items-end">
                                            <button type="submit"
                                                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                                                Crear Torneo
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
