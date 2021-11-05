<?php

namespace Database\Factories;

use App\Models\Heure;
use App\Models\Jour;
use Illuminate\Database\Eloquent\Factories\Factory;

class JourFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Jour::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $tabJour = ["","saturday","sunday","monday","tuesday","woensday","thursday","friday"];
    protected $i = -1;
    public function definition()
    {
        $this->i+=1;
        if($this->i%8===0){
            $this->i = 0;
        }
        return [

            "nom"=>$this->tabJour[$this->i],
            "classe_id"=>null,
            "heure_id"=>$this->faker->numberBetween(1,Heure::all()->count()),
        ];
    }
}
