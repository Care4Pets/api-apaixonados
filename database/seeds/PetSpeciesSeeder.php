<?php

use Illuminate\Database\Seeder;

class PetSpeciesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $date = new \DateTime();
        DB::table('species')->insert([[
                'popular_name' => 'Dog',
                'cientific_name' => 'Canis lupus familiaris',
                'created_at' => $date->format('Y-m-d H:i:s'),
                'updated_at' => $date->format('Y-m-d H:i:s')
            ],
                ['popular_name' => 'Cat',
                    'cientific_name' => 'Felis Catus',
                    'created_at' => $date->format('Y-m-d H:i:s'),
                    'updated_at' => $date->format('Y-m-d H:i:s')

                ],
                ['popular_name' => 'Hamster',
                    'cientific_name' => 'Cricetinae',
                    'created_at' => $date->format('Y-m-d H:i:s'),
                    'updated_at' => $date->format('Y-m-d H:i:s')
                ],
                ['popular_name' => 'Ferret',
                    'cientific_name' => 'Mustela putorius furo',
                    'created_at' => $date->format('Y-m-d H:i:s'),
                    'updated_at' => $date->format('Y-m-d H:i:s')
                ]]

        );
    }
}
