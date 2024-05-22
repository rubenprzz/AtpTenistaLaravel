<?php
namespace Database\Seeders;

use App\Models\Participante;
use App\Models\Tenista;
use App\Models\Torneo;
use Illuminate\Database\Seeder;

class ParticipanteTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tenistas = Tenista::all();
        $torneos = Torneo::pluck('id');

        foreach ($tenistas as $tenista) {
            foreach ($torneos as $torneoId) {
                Participante::create([
                    'tenista_id' => $tenista->id,
                    'torneo_id' => $torneoId,
                    'tenista_nombre' => $tenista->nombre,
                    'tenista_ranking' => $tenista->ranking,
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
            }
        }
    }
}
