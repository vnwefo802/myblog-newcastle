<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

use App\Models\User;

class CategoryFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Category::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => 'Change Their Future',
            'short_description' => 'The early years of life are a time of immense hope and possibility for young children and their families and for nations as a whole.  Conversely it is also a time of particular risk for children living in the most adverse circumstances. The ever-evolving science of early development tells us that the brain of the infant is primed to develop faster in the first 1,000 days than at any other time during their lifetime. 

            A combination of biological processes and early experiences influence this early development.  Giving every child a good start in life so that they thrive and reach their full potential depends on how their needs for nurturance, good nutrition, health care, opportunities to play and learn, and protection from violence are met right from the start. It follows that early adversities such as neglect, nutritional deficiencies, toxic stress like violence, conflict and poverty, can have long term consequences lasting over a lifespan.',
            'slug' => 'change-their-future',
            'user_id' => '2',
        ];
    }
}
