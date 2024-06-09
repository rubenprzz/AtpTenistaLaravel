<?php

namespace Database\Factories;

use App\Models\Participante;
use App\Models\Tenista;
use App\Models\Torneo;
use Illuminate\Database\Eloquent\Factories\Factory;

class ParticipanteFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Participante::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $tenista = Tenista::inRandomOrder()->first();

        $torneo = Torneo::inRandomOrder()->first();

        return [
            'tenista_id' => $tenista->id,
            'torneo_id' => $torneo->id,
            'tenista_nombre' => $tenista->nombre,
            'tenista_ranking' => $tenista->ranking,
            'tenista_puntos' => $tenista->puntos,
        ];
    }
}
