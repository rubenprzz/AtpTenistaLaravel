<?php

namespace Database\Seeders;

use App\Models\Torneo;
use Illuminate\Database\Seeder;
use Carbon\Carbon;
use App\Categoria;

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
                'categoria' => Categoria::MASTER_1000->name,  // Correct enum value
                'superficie' => 'HIERBA',
                'entradas' => 128,
                'premio' => 35400000,
                'puntos' => 2000,
                'fechaInicio' => '2024-06-24',
                'fechaFinalizacion' => '2024-07-07',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'Roland Garros',
                'ubicacion' => 'París, Francia',
                'modo' => 'INDIVIDUAL',
                'categoria' => Categoria::MASTER_1000->name,  // Correct enum value
                'superficie' => 'ARCILLA',
                'entradas' => 128,
                'premio' => 42000000,
                'imagen'=> 'https://th.bing.com/th/id/R.e3d32528e06d972fcb493ba3518afb98?rik=EMKRYgpl70nQJA&riu=http%3a%2f%2fatj.com.mx%2fwp-content%2fuploads%2f2023%2f01%2fCalendario-de-Torneos.jpg&ehk=BIaEj0cPfNaoEqrAhhUoxdS%2f4BL%2bqw7Djn1VsspodRU%3d&risl=&pid=ImgRaw&r=0',
                'puntos' => 2000,
                'fechaInicio' => '2024-05-26',
                'fechaFinalizacion' => '2024-06-09',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'US Open',
                'ubicacion' => 'Nueva York, EE.UU.',
                'modo' => 'INDIVIDUAL',
                'categoria' => Categoria::MASTER_1000->name,  // Correct enum value
                'superficie' => 'DURA',
                'entradas' => 128,
                'premio' => 53000000,
                'puntos' => 2000,
                'fechaInicio' => '2024-08-26',
                'fechaFinalizacion' => '2024-09-08',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'Australian Open',
                'ubicacion' => 'Melbourne, Australia',
                'modo' => 'INDIVIDUAL',
                'categoria' => Categoria::MASTER_1000->name,  // Correct enum value
                'superficie' => 'DURA',
                'entradas' => 128,
                'premio' => 50000000,
                'puntos' => 2000,
                'fechaInicio' => '2024-01-15',
                'fechaFinalizacion' => '2024-01-28',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'ATP Finals',
                'ubicacion' => 'Turín, Italia',
                'modo' => 'INDIVIDUAL',
                'categoria' => Categoria::ATP_500->name,  // Correct enum value
                'superficie' => 'ARCILLA',
                'entradas' => 8,
                'premio' => 9000000,
                'puntos' => 1500,
                'fechaInicio' => '2024-11-10',
                'fechaFinalizacion' => '2024-11-17',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        foreach ($torneos as $torneoData) {
            Torneo::create($torneoData);
        }
    }
}
