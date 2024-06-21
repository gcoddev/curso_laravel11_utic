<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SeederUsuario extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'nombres' => 'Gary',
            'usuario' => 'gary',
            'password' => bcrypt('gary')
        ]);
        DB::table('users')->insert([
            'nombres' => 'Prueba',
            'usuario' => 'prueba',
            'password' => bcrypt('prueba')
        ]);
    }
}
