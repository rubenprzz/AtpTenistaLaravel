@extends('main')
@section('content')
    <section class="max-w-4xl p-6 mx-auto bg-indigo-600 rounded-md shadow-md dark:bg-gray-800 mt-20">
        <h1 class="text-xl font-bold text-white capitalize dark:text-white">Crear Tenista</h1>
        <form action="{{ route('tenistas.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="grid grid-cols-1 gap-6 mt-4 sm:grid-cols-2">
                <div>
                    <label class="text-white dark:text-black" for="ranking">Ranking:</label>
                    <input id="ranking" name="ranking" type="number" class="block w-full px-4 py-2 mt-2 text-black bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring" required>
                </div>
                <div>
                    <label class="text-white dark:text-black" for="nombre">Nombre:</label>
                    <input id="nombre" name="nombre" type="text" class="block w-full px-4 py-2 mt-2 text-black bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring" required>
                </div>
                <div>
                    <label class="text-white dark:text-black" for="pais">País:</label>
                    <input id="pais" name="pais" type="text" class="block w-full px-4 py-2 mt-2 text-black bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring" required>
                </div>
                <div>
                    <label class="text-white dark:text-black" for="entrenador">Entrenador:</label>
                    <input id="entrenador" name="entrenador" type="text" class="block w-full px-4 py-2 mt-2 text-black bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring" required>
                </div>
                <div>
                    <label class="text-white dark:text-black" for="puntos">Puntos:</label>
                    <input id="puntos" name="puntos" type="number" class="block w-full px-4 py-2 mt-2 text-black bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring" required>
                </div>
                <div>
                    <label class="text-white dark:text-black" for="fechaNacimiento">Fecha de Nacimiento:</label>
                    <input id="fechaNacimiento" name="fechaNacimiento" type="date" class="block w-full px-4 py-2 mt-2 text-black bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring" required>
                </div>
                <div>
                    <label class="text-white dark:text-black" for="edad">Edad:</label>
                    <input id="edad" name="edad" type="number" class="block w-full px-4 py-2 mt-2 text-black bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring" readonly>
                </div>
                <div>
                    <label class="text-white dark:text-black" for="altura">Altura:</label>
                    <input id="altura" name="altura" type="number" class="block w-full px-4 py-2 mt-2 text-black bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring" required>
                </div>
                <div>
                    <label class="text-white dark:text-black" for="peso">Peso:</label>
                    <input id="peso" name="peso" type="number" class="block w-full px-4 py-2 mt-2 text-black bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring" required>
                </div>
                <div>
                    <label class="text-white dark:text-black" for="dineroGanado">Dinero ganado:</label>
                    <input id="dineroGanado" name="dineroGanado" type="number" class="block w-full px-4 py-2 mt-2 text-black bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring" required>
                </div>
                <div>
                    <label class="text-white dark:text-black" for="profesionalDesde">Profesional Desde:</label>
                    <input id="profesionalDesde" name="profesionalDesde" type="date" class="block w-full px-4 py-2 mt-2 text-black bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring" required>
                </div>
                <div>
                    <label class="text-white dark:text-black" for="mano">Mano:</label>
                    <select id="mano" name="mano" class="block w-full px-4 py-2 mt-2 text-black bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring" required>
                        <option value="DIESTRO">Diestro</option>
                        <option value="ZURDO">Zurdo</option>
                    </select>
                </div>
                <div>
                    <label class="text-white dark:text-black" for="reves">Revés:</label>
                    <select id="reves" name="reves" class="block w-full px-4 py-2 mt-2 text-black bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring" required>
                        <option value="UNA_MANO">Una mano</option>
                        <option value="DOS_MANOS">Dos manos</option>
                    </select>
                </div>
                <div>
                    <label class="text-white dark:text-black" for="modo">Modo:</label>
                    <select id="modo" name="modo" class="block w-full px-4 py-2 mt-2 text-black bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring" required>
                        <option value="INDIVIDUAL">Individual</option>
                        <option value="DOBLES">Dobles</option>
                        <option value="AMBOS">Ambos</option>
                    </select>
                </div>
                <div>
                    <label class="text-white dark:text-black" for="wins">Wins:</label>
                    <input id="wins" name="wins" type="number" class="block w-full px-4 py-2 mt-2 text-black bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring" required>
                </div>
                <div>
                    <label class="text-white dark:text-black" for="loses">Loses:</label>
                    <input id="loses" name="loses" type="number" class="block w-full px-4 py-2 mt-2 text-black bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring" required>
                </div>
                <div>
                    <label class="text-white dark:text-black" for="winrate">Winrate:</label>
                    <input id="winrate" name="winrate" type="text" class="block w-full px-4 py-2 mt-2 text-black bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring" readonly>
                </div>
            </div>

            <div class="flex justify-end mt-6">
                <button type="submit" class="px-6 py-2 leading-5 text-white transition-colors duration-200 transform bg-gray-700 rounded-md hover:bg-gray-600 focus:outline-none focus:bg-gray-600">Save</button>
            </div>
        </form>
        <script>
            document.getElementById('wins').addEventListener('input', updateWinrate);
            document.getElementById('loses').addEventListener('input', updateWinrate);
            document.getElementById('fechaNacimiento').addEventListener('input', calculateAge);

            function updateWinrate() {
                var wins = parseInt(document.getElementById('wins').value);
                var loses = parseInt(document.getElementById('loses').value);
                if (!isNaN(wins) && !isNaN(loses) && (wins + loses) > 0) {
                    var winrate = (wins / (wins + loses)) * 100;
                    document.getElementById('winrate').value = winrate.toFixed(2);
                } else {
                    document.getElementById('winrate').value = 0;
                }
            }

            function calculateAge() {
                var fechaNacimiento = document.getElementById('fechaNacimiento').value;
                if (fechaNacimiento) {
                    var today = new Date();
                    var birthDate = new Date(fechaNacimiento);
                    var age = today.getFullYear() - birthDate.getFullYear();
                    var monthDifference = today.getMonth() - birthDate.getMonth();
                    if (monthDifference < 0 || (monthDifference === 0 && today.getDate() < birthDate.getDate())) {
                        age--;
                    }
                    document.getElementById('edad').value = age;
                } else {
                    document.getElementById('edad').value = 0;
                }
            }
        </script>
    </section>
@endsection
