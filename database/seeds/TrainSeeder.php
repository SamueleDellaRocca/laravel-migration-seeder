<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Train;



class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 100; $i++) { 
            
            $trainData = [

                'azienda'                   => $faker->word(),
                'stazione_di_partenza'      => $faker->city(),
                'stazione_di_arrivo'        => $faker->city(),
                'data_di_partenza'          => $faker->date(),
                'data_di_arrivo'            => $faker->date(),
                'orario_di_partenza'        => $faker->time('H:i'),
                'orario_di_arrivo'          => $faker->time('H:i'),
                'codice_treno'              => $faker->randomNumber(5, true),
                'numero_carrozze'           => $faker->randomNumber(2, true),
                'in_orario'                 => $faker->boolean(),
                'cancellato'                => $faker->boolean()

            ];

            $newTrain = new Train();
            $newTrain->fill($trainData);
            $newTrain->save();

        }

    }
}
