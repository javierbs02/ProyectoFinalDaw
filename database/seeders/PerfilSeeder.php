<?php

namespace Database\Seeders;

use App\Models\Perfil;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PerfilSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $usuario = new Perfil();
        $usuario->nombre = "Usuario";
        $usuario->save();

        $admin = new Perfil();
        $admin->nombre = "Admin";
        $admin->save();
    }
}
