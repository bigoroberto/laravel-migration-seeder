<?php

use App\House;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class HouseTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {

        for ($i=0; $i < 100; $i++) {
            # code...
            $new_house = new House();
            $new_house->reference = $faker->bothify('??-########');
            $new_house->address = $faker->streetAddress();
            $new_house->postal_code = $faker->postcode();
            $new_house->city = $faker->city();
            $new_house->state = $faker->state();
            $new_house->square_meters = $faker->numberBetween(30,1000);
            $new_house->rooms = $faker->numberBetween(1,20);
            $new_house->type = $this->typeRandom();
            $new_house->price = $faker->randomFloat(2,50000,1000000);
            $new_house->is_available = $faker->boolean();
            $new_house->tv = $faker->boolean();
            $new_house->animals = $faker->boolean();
            $new_house->Wi_Fi=$faker->boolean();
            $new_house->save();
        }
    }

    private function typeRandom(){
        $arr = ['monolocale','bilocale','appartamento','attico','villetta','loft'];
        shuffle($arr);
        return $arr[0];
    }
}
