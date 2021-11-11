<?php

namespace Database\Factories;

use App\Models\ClasseTag;
use App\Models\Tag;
use Illuminate\Database\Eloquent\Factories\Factory;

class ClasseTagFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ClasseTag::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $i=3;
    public function definition()
    {

        return [
            "classe_id"=>$this->i+=1,
            "tag_id"=>$this->faker->numberBetween(1, count(Tag::all())),
        ];
    }
}
