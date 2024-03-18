<?php

namespace Database\Seeders;

use App\Models\Usuario;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $usuario1 = new Usuario();
        $usuario1->user = "admin";
        $usuario1->email = "admin@email.com";
        $usuario1->password = "admin";
        $usuario1->bestScore = 0;
        $usuario1->perfilId = 2;
        $usuario1->save();

        $usuario2 = new Usuario();
        $usuario2->user = "usuario";
        $usuario2->email = "usuario@email.com";
        $usuario2->password = "usuario";
        $usuario2->bestScore = 100;
        $usuario2->perfilId = 1;
        $usuario2->save();
    }
}
