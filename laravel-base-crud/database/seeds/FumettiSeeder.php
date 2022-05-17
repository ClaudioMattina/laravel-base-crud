<?php

use App\fumetti;
use Doctrine\Inflector\Rules\Word;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class FumettiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
       for ($i=0; $i < 100; $i++) { 
           
            $newFumetto = new Fumetti();
            $newFumetto -> title =$faker -> word();
            $newFumetto -> description =$faker -> text();
            $newFumetto -> thumb =$faker -> imageUrl(300,300,'fumetto',true);
            $newFumetto -> price =$faker -> randomFloat();
            $newFumetto -> series =$faker -> word();
            $newFumetto -> sale_date =$faker -> date();
            $newFumetto -> type =$faker -> word();
            $newFumetto -> save();
       }
    }
}
