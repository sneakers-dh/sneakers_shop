<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('materials')->insert([
        'value' => 'Goma'
      ]);
      DB::table('materials')->insert([
        'value' => 'Gamuza'
      ]);
      DB::table('materials')->insert([
        'value' => 'Cuero'
      ]);
      DB::table('materials')->insert([
        'value' => 'Cuerina'
      ]);
      DB::table('materials')->insert([
        'value' => 'Algodon'
      ]);
      DB::table('materials')->insert([
        'value' => 'Lona'
      ]);
      DB::table('materials')->insert([
        'value' => 'Malla'
      ]);
      DB::table('categories')->insert([
        'value' => 'Zapatillas'
      ]);
      DB::table('categories')->insert([
        'value' => 'Zapatos'
      ]);
      DB::table('categories')->insert([
        'value' => 'Ojotas'
      ]);
      DB::table('categories')->insert([
        'value' => 'Sandalias'
      ]);
      DB::table('categories')->insert([
        'value' => 'Botas'
      ]);
      DB::table('categories')->insert([
        'value' => 'Botines'
      ]);
    }
}
