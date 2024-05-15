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
                'pais' => 'Suiza',
                'fechaNacimiento' => '1981-08-08',
                'edad' => Carbon::parse('1981-08-08')->age,
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
                'winrate' => 81.93,
                'imagen' => 'federer.jpg',
                'isDeleted' => false,
                'torneo_idSecundario' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

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
