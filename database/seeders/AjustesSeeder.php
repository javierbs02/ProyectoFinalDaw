<?php

namespace Database\Seeders;

use App\Models\Ajuste;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AjustesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $ajustes1 = new Ajuste();
        $ajustes1->usuarioId = 1;
        $ajustes1->sonidos = true;
        $ajustes1->efectos = true;
        $ajustes1->save();

        $ajustes2 = new Ajuste();
        $ajustes2->usuarioId = 2;
        $ajustes2->sonidos = true;
        $ajustes2->efectos = true;
        $ajustes2->save();
    }
}
