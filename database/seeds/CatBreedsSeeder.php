<?php

use Illuminate\Database\Seeder;

class CatBreedsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $breed = new \stdClass();
        $breed->cientific_group = "SRD";
        $breed->base_name = "GRAND";
        $breed->name = "vira-lata";
        DB::table('breeds')->insert([
            [
                'specie_id' => 2,
                'meta_data' => \json_encode($breed)
            ]
        ]);
    }
}
