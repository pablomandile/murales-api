<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CalificacionesSeeder extends Seeder
{
    public function run()
    {
        DB::table('calificaciones')->insert([
            ['calificacion' => '1 Estrella'],
            ['calificacion' => '2 Estrellas'],
            ['calificacion' => '3 Estrellas'],
            ['calificacion' => '4 Estrellas'],
            ['calificacion' => '5 Estrellas'],
        ]);
    }
}
