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
            'name' => 'Fundrasier For Newcastle Foundation',
            'short_description' => 'Want to get involved in charity Try joining one of our events or set up your own - it could be the most fun you have all year!',
            'slug' => 'events-and-fundraising',
            'user_id' => '3',
        ];
    }
}
