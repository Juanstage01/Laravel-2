<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Curso;
use Illuminate\Support\Str;

class CursoFactory extends Factory
{

    // the name of the factory

    // @var string

    protected $model = Curso::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $name = $this->faker->sentence();
        return [
            'name' => $name,
            // 'slug' => Str::slug("hola mundo"),
            // 'slug' => Str::slug($this->faker->sentence(), '-'),
            'slug' => Str::slug($name, '-'),
            'descripcion' => $this->faker->paragraph(),
            'categoria' => $this->faker->randomElement(['Desarrollo web','Diseño web'])
        ];
    }
} 
