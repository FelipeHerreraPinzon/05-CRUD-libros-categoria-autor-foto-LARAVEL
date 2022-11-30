<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Autor;
class AutorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $autor = new Autor();
        $autor->nombres = "Gabriel";
        $autor->apellidos = "Garcia Marquez";
        $autor->save();

        $autor2 = new Autor();
        $autor2->nombres = "Jorge";
        $autor2->apellidos = "Isaacs";
        $autor2->save();

        $autor3 = new Autor();
        $autor3->nombres = "Fernando";
        $autor3->apellidos = "Vallejo";
        $autor3->save();
    }
}
