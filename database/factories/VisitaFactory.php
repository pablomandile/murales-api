<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Visita;
use App\Models\Calificacion;
use App\Models\Mural;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Visita>
 */
class VisitaFactory extends Factory
{

    protected $model = Visita::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'fecha_visita'    => $this->faker->date(),
            'email'           => $this->faker->unique()->safeEmail(),
            // Se asume que hay al menos un registro en "calificaciones" tras correr los seeders
            'calificacion_id' => Calificacion::inRandomOrder()->value('id'),
            'comentarios'     => $this->faker->paragraph(),
            // Se asume que hay al menos un registro en "murales" tras correr los seeders
            'mural_id'        => Mural::inRandomOrder()->value('id'),
        ];
    }
}
