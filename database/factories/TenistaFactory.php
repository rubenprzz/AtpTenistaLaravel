<?php

namespace Database\Factories;

use App\Models\Tenista;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Carbon\Carbon;

class TenistaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Tenista::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $fechaNacimiento = $this->faker->dateTimeBetween('-40 years', '-18 years');
        $edad = Carbon::parse($fechaNacimiento)->age;

        return [
            'ranking' => $this->faker->numberBetween(1, 1000),
            'nombre' => $this->faker->name,
            'puntos' => $this->faker->numberBetween(0, 10000),
            'pais' => $this->faker->country,
            'fechaNacimiento' => $fechaNacimiento,
            'edad' => $edad,
            'altura' => $this->faker->randomFloat(2, 1.5, 2.2),
            'peso' => $this->faker->randomFloat(2, 50, 110),
            'profesionalDesde' => $this->faker->dateTimeBetween('-20 years', '-1 year'),
            'mano' => $this->faker->randomElement(['DIESTRO', 'ZURDO']),
            'reves' => $this->faker->randomElement(['UNA_MANO', 'DOS_MANOS']),
            'modo' => $this->faker->randomElement(['INDIVIDUAL', 'DOBLE', 'INDIVIDUAL_DOBLE']),
            'entrenador' => $this->faker->name,
            'dineroGanado' => $this->faker->numberBetween(1000, 10000000),
            'bestRanking' => $this->faker->optional()->numberBetween(1, 1000),
            'wins' => $this->faker->numberBetween(0, 500),
            'loses' => $this->faker->numberBetween(0, 500),
            'winrate' => $this->faker->randomFloat(2, 0, 100),
            'imagen' => 'https://cope-cdnmed.agilecontent.com/resources/jpg/1/0/1603465773101.jpg',
            'isDeleted' => false,
            'torneo_idSecundario' => null,
        ];
    }
}
