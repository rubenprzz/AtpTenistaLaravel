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
                'imagen' => 'https://www.sport1.me/wp-content/uploads/2021/05/Wimbledon-2021-Dates.jpg',
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
                'puntos' => 2000,
                'fechaInicio' => '2024-05-26',
                'fechaFinalizacion' => '2024-06-09',
                'imagen' => 'https://upload.wikimedia.org/wikipedia/en/thumb/8/81/Roland_Garros_logo.svg/1200px-Roland_Garros_logo.svg.png',
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
                'imagen' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/0/0b/US_Open_Logo_2018.svg/1200px-US_Open_Logo_2018.svg.png',
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
                'imagen' => 'https://upload.wikimedia.org/wikipedia/en/thumb/0/06/Australian_Open_Logo_2017.svg/1200px-Australian_Open_Logo_2017.svg.png',
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
                'imagen' => 'https://upload.wikimedia.org/wikipedia/en/thumb/0/06/ATP_Finals_Logo_2017.svg/1200px-ATP_Finals_Logo_2017.svg.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        foreach ($torneos as $torneoData) {
            Torneo::create($torneoData);
        }
    }
}
