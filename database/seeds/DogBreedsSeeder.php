<?php

use Illuminate\Database\Seeder;

class DogBreedsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('breeds')->insert([[]]);
    }
}
