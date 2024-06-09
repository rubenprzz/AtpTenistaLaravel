<?php

namespace Database\Factories;

use App\Models\Torneo;
use Illuminate\Database\Eloquent\Factories\Factory;

class TorneoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Torneo::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'idSecundario' => $this->faker->unique()->randomNumber(),
            'nombre' => $this->faker->sentence(3),
            'ubicacion' => $this->faker->city(),
            'modo' => $this->faker->randomElement(['INDIVIDUAL', 'DOBLES', 'INDIVIDUAL_DOBLE']),
            'categoria' => $this->faker->randomElement(['ATP_250', 'ATP_500', 'MASTER_1000']),
            'superficie' => $this->faker->randomElement(['HIERBA', 'ARCILLA', 'DURA']),
            'entradas' => $this->faker->numberBetween(100, 1000),
            'premio' => $this->faker->numberBetween(10000, 1000000),
            'puntos' => $this->faker->numberBetween(100, 1000),
            'fechaInicio' => $this->faker->dateTimeBetween('now', '+1 year')->format('Y-m-d'),
            'fechaFinalizacion' => $this->faker->dateTimeBetween('+1 week', '+1 month')->format('Y-m-d'),
            'imagen' => Torneo::$IMAGE_DEFAULT,
        ];
    }
}
