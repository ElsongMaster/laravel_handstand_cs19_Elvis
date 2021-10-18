<?php

namespace Database\Factories;

use App\Models\ClasseUser;
use Illuminate\Database\Eloquent\Factories\Factory;

class ClasseUserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ClasseUser::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $i=5;
    public function definition()
    {

        return [
            "classe_id"=>3,
            "user_id"=>$this->i+=1,
        ];
    }
}
