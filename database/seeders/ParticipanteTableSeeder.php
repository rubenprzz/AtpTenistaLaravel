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
        $torneoIds = Torneo::pluck('id');

        foreach ($tenistas as $tenista) {
            foreach ($torneoIds as $torneoId) {
                Participante::create([
                    'tenista_id' => $tenista->id,
                    'tenista_nombre' => $tenista->nombre,
                    'tenista_ranking' => $tenista->ranking,

                    'torneo_id' => $torneoId,
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
            }
        }
    }
}
