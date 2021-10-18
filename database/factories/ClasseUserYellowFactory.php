<?php

namespace Database\Factories;

use App\Models\ClasseUser;
use App\Models\ClasseUserYellow;
use Illuminate\Database\Eloquent\Factories\Factory;

class ClasseUserYellowFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ClasseUserYellow::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $i=20;
    public function definition()
    {

        return [
            "classe_id"=>2,
            "user_id"=>$this->i+=1,
        ];
    }
}
