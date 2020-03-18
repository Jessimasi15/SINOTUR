<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ColorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('colors')->insert([
        	'nom_color' => 'AZUL',
        ]);
        DB::table('colors')->insert([
        	'nom_color' => 'VERDE',
        ]);
        DB::table('colors')->insert([
        	'nom_color' => 'ROJO',
        ]);
        DB::table('colors')->insert([
        	'nom_color' => 'AMARILLO',
        ]);
        DB::table('colors')->insert([
        	'nom_color' => 'PLATA',
        ]);
        DB::table('colors')->insert([
        	'nom_color' => 'NEGRO',
        ]);
        DB::table('colors')->insert([
        	'nom_color' => 'BLANCO',
        ]);
        DB::table('colors')->insert([
        	'nom_color' => 'GRIS',
        ]);
        DB::table('colors')->insert([
        	'nom_color' => 'NARANJA',
        ]);
        DB::table('colors')->insert([
        	'nom_color' => 'ROSADO',
        ]);
        DB::table('colors')->insert([
        	'nom_color' => 'DORADO',
        ]);
        DB::table('colors')->insert([
        	'nom_color' => 'VINOTINTO',
        ]);
        DB::table('colors')->insert([
        	'nom_color' => 'MARRON',
        ]);
        DB::table('colors')->insert([
        	'nom_color' => 'BEIGE',
        ]);
        DB::table('colors')->insert([
        	'nom_color' => 'CHAMPAÑA',
        ]);
    }
}
