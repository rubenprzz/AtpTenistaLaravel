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
        $tenistas = Tenista::pluck('id');
        $torneos = Torneo::pluck('id');


        foreach ($tenistas as $tenistaId) {
            foreach ($torneos as $torneoId) {
                Participante::create([
                    'tenista_id' => $tenistaId,
                    'torneo_id' => $torneoId,
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
            }
        }
    }
}
