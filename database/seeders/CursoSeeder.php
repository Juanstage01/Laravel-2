<?php

namespace Database\Seeders;

use App\Models\Curso;
use Illuminate\Database\Seeder;

class CursoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Curso::factory(50)->create();
        // $curso = new Curso();
        // $curso->name = "Laravel";
        // $curso->descripcion = "El mejor framework";
        // $curso->categoria = "Desarrollo web";
        // $curso->save();

        // $curso2 = new Curso();
        // $curso2->name = "Laravel";
        // $curso2->descripcion = "El mejor framework";
        // $curso2->categoria = "Desarrollo web";
        // $curso2->save();

        // $curso3 = new Curso();
        // $curso3->name = "Laravel";
        // $curso3->descripcion = "El mejor framework";
        // $curso3->categoria = "Desarrollo web";
        // $curso3->save();
    }
}
