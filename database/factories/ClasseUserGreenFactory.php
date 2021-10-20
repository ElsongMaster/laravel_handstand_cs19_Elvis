<?php

namespace Database\Factories;

use App\Models\ClasseUserGreen;
use Illuminate\Database\Eloquent\Factories\Factory;

class ClasseUserGreenFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ClasseUserGreen::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $i=32;
    public function definition()
    {

        return [
            "classe_id"=>1,
            "user_id"=>$this->i+=1,
        ];
    }
}
