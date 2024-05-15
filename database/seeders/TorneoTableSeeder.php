<?php
namespace Database\Seeders;

use App\Models\Torneo;
use Illuminate\Database\Seeder;
use Carbon\Carbon;

class TorneoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $torneos = [
            [
                'nombre' => 'Wimbledon',
                'ubicacion' => 'Londres, Reino Unido',
                'modo' => 'INDIVIDUAL',
                'categoria' => 'MASTERS_1000',
                'superficie' => 'HIERBA',
                'entradas' => 128,
                'premio' => 35400000,
                'puntos' => 2000,
                'fechaInicio' => '2024-06-24',
                'fechaFinalizacion' => '2024-07-07',
                'imagen' => 'wimbledon.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        foreach ($torneos as $torneoData) {
            Torneo::create($torneoData);
        }
    }
}
