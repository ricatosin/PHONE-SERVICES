<?php

use App\Phone;
use Illuminate\Database\Seeder;

class PhonesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // using faker to create random cases
        $faker = \Faker\Factory::create();
        //Lets Create now 30 name phone and ddd Seeder to populate our table Phone
       foreach(range(1,20) as $index){
            Phone::create([
                'nome' => $faker->name,
                'ddd' => $faker->numberBetween($min = 11, $max = 99),
                'phone_number' => $faker->randomDigit
            ]);
        }




    }
}
