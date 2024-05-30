<?php

namespace Database\Seeders;

use App\Models\Tenista;
use Illuminate\Database\Seeder;
use Carbon\Carbon;

class TenistaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tenistas = [
            [
                'ranking' => 1,
                'nombre' => 'Roger Federer',
                'puntos' => 100,
                'pais' => 'Suiza',
                'fechaNacimiento' => '1981-08-08',
                'altura' => 1.85,
                'peso' => 85,
                'profesionalDesde' => '1998-07-29',
                'mano' => 'DIESTRO',
                'reves' => 'UNA_MANO',
                'modo' => 'INDIVIDUAL',
                'entrenador' => 'Ivan Ljubicic',
                'dineroGanado' => 129946544,
                'bestRanking' => 1,

                'wins' => 1242,
                'loses' => 274,
                'isDeleted' => false,
                'torneo_idSecundario' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'ranking' => 2,
                'nombre' => 'Rafael Nadal',
                'puntos' => 1000,
                'pais' => 'España',
                'fechaNacimiento' => '1986-06-03',
                'altura' => 1.85,
                'peso' => 85,
                'profesionalDesde' => '2001-01-01',
                'mano' => 'ZURDO',
                'reves' => 'DOS_MANOS',
                'modo' => 'INDIVIDUAL',
                'entrenador' => 'Carlos Moyá',
                'dineroGanado' => 123843596,
                'bestRanking' => 1,
                'wins' => 1035,
                'loses' => 210,
                'isDeleted' => false,
                'torneo_idSecundario' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'ranking' => 3,
                'nombre' => 'Novak Djokovic',
                'puntos' => 200,
                'pais' => 'Serbia',
                'fechaNacimiento' => '1987-05-22',
                'altura' => 1.88,
                'peso' => 80,
                'profesionalDesde' => '2003-01-01',
                'mano' => 'DIESTRO',
                'reves' => 'DOS_MANOS',
                'modo' => 'INDIVIDUAL',
                'entrenador' => 'Goran Ivanišević',
                'dineroGanado' => 145864135,
                'bestRanking' => 1,
                'wins' => 930,
                'loses' => 190,
                'isDeleted' => false,
                'torneo_idSecundario' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'ranking' => 4,
                'nombre' => 'Andy Murray',
                'pais' => 'Reino Unido',
                'puntos' => 400,
                'fechaNacimiento' => '1987-05-15',
                'altura' => 1.91,
                'peso' => 84,
                'profesionalDesde' => '2005-01-01',
                'mano' => 'DIESTRO',
                'reves' => 'DOS_MANOS',
                'modo' => 'INDIVIDUAL',
                'entrenador' => 'Jamie Delgado',
                'dineroGanado' => 61667859,
                'bestRanking' => 1,
                'wins' => 676,
                'loses' => 203,
                'isDeleted' => false,
                'torneo_idSecundario' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'ranking' => 5,
                'nombre' => 'Pete Sampras',
                'pais' => 'Estados Unidos',
                'puntos' => 500,
                'fechaNacimiento' => '1971-08-12',
                'altura' => 1.85,
                'peso' => 77,
                'profesionalDesde' => '1988-01-01',
                'mano' => 'DIESTRO',
                'reves' => 'UNA_MANO',
                'modo' => 'INDIVIDUAL',
                'entrenador' => 'Paul Annacone',
                'dineroGanado' => 43131464,
                'bestRanking' => 1,
                'wins' => 762,
                'loses' => 222,
                'isDeleted' => false,
                'torneo_idSecundario' => 5,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'ranking' => 6,
                'nombre' => 'Stefanos Tsitsipas',
                'puntos' => 600,
                'pais' => 'Grecia',
                'fechaNacimiento' => '1998-08-12',
                'altura' => 1.93,
                'peso' => 89,
                'profesionalDesde' => '2016-01-01',
                'mano' => 'DIESTRO',
                'reves' => 'UNA_MANO',
                'modo' => 'INDIVIDUAL',
                'entrenador' => 'Patrick Mouratoglou',
                'dineroGanado' => 8317566,
                'bestRanking' => 3,
                'wins' => 215,
                'loses' => 117,
                'isDeleted' => false,
                'torneo_idSecundario' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'ranking' => 7,
                'nombre' => 'Dominic Thiem',
                'puntos' => 700,
                'pais' => 'Austria',
                'fechaNacimiento' => '1993-09-03',
                'altura' => 1.85,
                'peso' => 79,
                'profesionalDesde' => '2011-01-01',
                'mano' => 'DIESTRO',
                'reves' => 'DOS_MANOS',
                'modo' => 'INDIVIDUAL',
                'entrenador' => 'Nicolás Massú',
                'dineroGanado' => 28283016,
                'bestRanking' => 3,
                'wins' => 345,
                'loses' => 165,
                'isDeleted' => false,
                'torneo_idSecundario' => 7,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'ranking' => 8,
                'nombre' => 'Alexander Zverev',
                'puntos' => 800,
                'pais' => 'Alemania',
                'fechaNacimiento' => '1997-04-20',
                'altura' => 1.98,
                'peso' => 90,
                'profesionalDesde' => '2013-01-01',
                'mano' => 'DIESTRO',
                'reves' => 'DOS_MANOS',
                'modo' => 'INDIVIDUAL',
                'entrenador' => 'David Ferrer',
                'dineroGanado' => 25528673,
                'bestRanking' => 3,
                'wins' => 285,
                'loses' => 121,
                'isDeleted' => false,
                'torneo_idSecundario' => 8,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'ranking' => 9,
                'nombre' => 'Daniil Medvedev',
                'puntos' => 900,
                'pais' => 'Rusia',
                'fechaNacimiento' => '1996-02-11',
                'altura' => 1.98,
                'peso' => 83,
                'profesionalDesde' => '2014-01-01',
                'mano' => 'DIESTRO',
                'reves' => 'DOS_MANOS',
                'modo' => 'INDIVIDUAL',
                'entrenador' => 'Gilles Cervara',
                'dineroGanado' => 18651346,
                'bestRanking' => 2,
                'wins' => 287,
                'loses' => 135,
                'isDeleted' => false,
                'torneo_idSecundario' => 9,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'ranking' => 10,
                'nombre' => 'Andrey Rublev',
                'puntos' => 1000,
                'pais' => 'Rusia',
                'fechaNacimiento' => '1997-10-20',
                'altura' => 1.88,
                'peso' => 70,
                'profesionalDesde' => '2014-01-01',
                'mano' => 'DIESTRO',
                'reves' => 'DOS_MANOS',
                'modo' => 'INDIVIDUAL',
                'entrenador' => 'Fernando Vicente',
                'dineroGanado' => 12297776,
                'bestRanking' => 8,
                'wins' => 215,
                'loses' => 97,
                'isDeleted' => false,
                'torneo_idSecundario' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'ranking' => 11,
                'nombre' => 'Matteo Berrettini',
                'puntos' => 1100,
                'pais' => 'Italia',
                'fechaNacimiento' => '1996-04-12',
                'altura' => 1.96,
                'peso' => 95,
                'profesionalDesde' => '2015-01-01',
                'mano' => 'DIESTRO',
                'reves' => 'UNA_MANO',
                'modo' => 'INDIVIDUAL',
                'entrenador' => 'Vincenzo Santopadre',
                'dineroGanado' => 11631276,
                'bestRanking' => 8,
                'wins' => 149,
                'loses' => 67,
                'isDeleted' => false,
                'torneo_idSecundario' => 11,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];
        usort($tenistas, function($a, $b) {
            return $b['puntos'] - $a['puntos'];
        });

        $ranking = 1;
        foreach ($tenistas as &$tenistaData) {
            $tenistaData['ranking'] = $ranking;
            $ranking++;
        }

        foreach ($tenistas as $tenistaData) {
            $tenistaData['edad'] = Carbon::parse($tenistaData['fechaNacimiento'])->age;

            if ($tenistaData['loses'] > 0) {
                $tenistaData['winrate'] = round(($tenistaData['wins'] / ($tenistaData['wins'] + $tenistaData['loses'])) * 100, 2);
            } else {
                $tenistaData['winrate'] = 100;
            }

            Tenista::create($tenistaData);
        }
    }
}

