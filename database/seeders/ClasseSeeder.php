<?php

namespace Database\Seeders;

use App\Models\Categorie;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
class ClasseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        DB::table('classes')->insert([
            [
                "image"=>"1.jpg",
                "nom"=>"yoga for climbers",
                "package"=>json_encode(['Platinium']),
                "coach_id"=>1,
                "categorie_id"=>3,
                "prioritaire"=>true,
                "validate"=>true,
                "color"=>null,
                "date"=>date_create("2021-11-22"),
            ],
            [
                "image"=>"2.jpg",
                "nom"=>"yoga for climbers",
                "package"=>json_encode(['Platinium','Gold']),
                "coach_id"=>1,
                "categorie_id"=>2,
                "prioritaire"=>true,
                "validate"=>true,
                "color"=>null,
                "date"=>date_create("2021-11-20"),
            ],
            [
                "image"=>"3.jpg",
                "nom"=>"yoga for climbers",
                "package"=>json_encode(['Platinium','Gold','Silver']),
                "coach_id"=>1,
                "categorie_id"=>2,
                "prioritaire"=>true,
                "validate"=>true,
                "color"=>null,
                "date"=>date_create("2021-11-23"),
            ],
            [
                "image"=>$faker->imageUrl($width = 640, $height = 480),
                "nom"=>"yoga for climbers",
                "package"=>json_encode([$faker->randomElement($array = array ('Platinium','Gold','Silver'))]),
                "coach_id"=>1,
                "categorie_id"=>$faker->numberBetween(1,Categorie::all()->count()),
                "prioritaire"=>false,
                "validate"=>true,
                "color"=>null,
                "date"=>date_create("2021-11-22"),
            ],
            [
                "image"=>$faker->imageUrl($width = 640, $height = 480),
                "nom"=>"yoga for climbers",
                "package"=>json_encode([$faker->randomElement($array = array ('Platinium','Gold','Silver'))]),
                "coach_id"=>1,
                "categorie_id"=>$faker->numberBetween(1,Categorie::all()->count()),
                "prioritaire"=>false,
                "validate"=>true,
                "color"=>null,
                "date"=>date_create("2021-11-22"),
            ],
            [
                "image"=>$faker->imageUrl($width = 640, $height = 480),
                "nom"=>"yoga for climbers",
                "package"=>json_encode([$faker->randomElement($array = array ('Platinium','Gold','Silver'))]),
                "coach_id"=>1,
                "categorie_id"=>$faker->numberBetween(1,Categorie::all()->count()),
                "prioritaire"=>false,
                "validate"=>true,
                "color"=>null,
                "date"=>date_create("2021-11-22"),
            ],
            [
                "image"=>$faker->imageUrl($width = 640, $height = 480),
                "nom"=>"yoga for climbers",
                "package"=>json_encode([$faker->randomElement($array = array ('Platinium','Gold','Silver'))]),
                "coach_id"=>1,
                "categorie_id"=>$faker->numberBetween(1,Categorie::all()->count()),
                "prioritaire"=>false,
                "validate"=>true,
                "color"=>null,
                "date"=>date_create("2021-11-22"),
            ],
            [
                "image"=>$faker->imageUrl($width = 640, $height = 480),
                "nom"=>"yoga for climbers",
                "package"=>json_encode([$faker->randomElement($array = array ('Platinium','Gold','Silver'))]),
                "coach_id"=>1,
                "categorie_id"=>$faker->numberBetween(1,Categorie::all()->count()),
                "prioritaire"=>false,
                "validate"=>true,
                "color"=>null,
                "date"=>date_create("2021-11-22"),
            ],
            [
                "image"=>$faker->imageUrl($width = 640, $height = 480),
                "nom"=>"yoga for climbers",
                "package"=>json_encode([$faker->randomElement($array = array ('Platinium','Gold','Silver'))]),
                "coach_id"=>1,
                "categorie_id"=>$faker->numberBetween(1,Categorie::all()->count()),
                "prioritaire"=>false,
                "validate"=>true,
                "color"=>null,
                "date"=>date_create("2021-11-22"),
            ],
            [
                "image"=>$faker->imageUrl($width = 640, $height = 480),
                "nom"=>"yoga for climbers",
                "package"=>json_encode([$faker->randomElement($array = array ('Platinium','Gold','Silver'))]),
                "coach_id"=>1,
                "categorie_id"=>$faker->numberBetween(1,Categorie::all()->count()),
                "prioritaire"=>false,
                "validate"=>true,
                "color"=>null,
                "date"=>date_create("2021-11-22"),
            ],
            [
                "image"=>$faker->imageUrl($width = 640, $height = 480),
                "nom"=>"yoga for climbers",
                "package"=>json_encode([$faker->randomElement($array = array ('Platinium','Gold','Silver'))]),
                "coach_id"=>1,
                "categorie_id"=>$faker->numberBetween(1,Categorie::all()->count()),
                "prioritaire"=>false,
                "validate"=>true,
                "color"=>null,
                "date"=>date_create("2021-11-22"),
            ],

            
        ]);
    }
}
