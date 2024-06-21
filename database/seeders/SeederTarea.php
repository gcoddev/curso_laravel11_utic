<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SeederTarea extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tareas')->insert([
            'titulo' => 'Tarea 1',
            'descripcion' => 'Descripcion de tarea 1'
        ]);
        DB::table('tareas')->insert([
            'titulo' => 'Tarea 2',
            'descripcion' => 'Descripcion de tarea 2',
            'estado' => '0'
        ]);
    }
}
