<?php

namespace Database\Factories;

use App\Models\Laboral;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class LaboralFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Laboral::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'description' => $this->faker->text(12),
            'status' => ['ACTIVO', 'INACTIVO'][rand(0, 1)],
            
        ];
    }
}
