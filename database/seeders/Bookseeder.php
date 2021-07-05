<?php

namespace Database\Seeders;

use App\Models\Book;
use Faker\Factory as f ;
use Illuminate\Database\Seeder;

class Bookseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $faker= f::create();

         for ($i=0; $i <20 ; $i++)
         {
            $book = new Book([
            "title" => $faker->firstNameMale,
            "sub_title" => $faker->title,
            "author" => $faker->firstNameFemale
            ]);
            $book->save();
         }
    }
}
