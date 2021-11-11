<?php

namespace Database\Factories;

use App\Models\Categorie;
use App\Models\classe;
use Illuminate\Database\Eloquent\Factories\Factory;

class ClasseFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = classe::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
                "image"=>$this->faker->imageUrl($width = 640, $height = 480),
                "nom"=>"yoga for climbers",
                "package"=>json_encode([$this->faker->randomElement($array = array ('Platinium','Gold','Silver'))]),
                "coach_id"=>1,
                "categorie_id"=>$this->faker->numberBetween(1,Categorie::all()->count()),
                "prioritaire"=>false,
                "color"=>null,
                "date"=>date_create("2021-11-22"),
        ];
    }
}
