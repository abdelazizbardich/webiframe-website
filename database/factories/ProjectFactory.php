<?php

namespace Database\Factories;

use App\Models\Project;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProjectFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Project::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "title" => $this->faker->unique()->realText($maxNbChars = 70, $indexSize = 2),
            "slug" => strtolower(str_replace(' ','-',$this->faker->unique()->realText($maxNbChars = 70, $indexSize = 2))),
            "short_description" => $this->faker->realText($maxNbChars = 300, $indexSize = 2),
            "full_description" => $this->faker->realText($maxNbChars = 1200, $indexSize = 2),
            "thumbnail" => "https://img.webdesign-inspiration.com/v7/webdesign-inspiration.com/uploads/design/2013-10/lesson-ly-11052.png",
            "full_thumbnail" => "https://img.webdesign-inspiration.com/v7/webdesign-inspiration.com/uploads/design/2013-10/lesson-ly-11052.png",
            "url" => "https://google.com",
            "category_id" => $this->faker->numberBetween(1,1)
        ];
    }
}
