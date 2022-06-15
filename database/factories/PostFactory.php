<?php

namespace Database\Factories;

use App\Models\Post;
use App\Models\Category;
use App\Models\User;

use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Post::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => 'Your Challenges Changes Your Futures',
            'slug' => 'organise-your-event',
            'excerpt' => 'FUNDRAISE NEWCASTLE FOUNDATION',
            // body
            'body' => '<p><span style="color: #222221; font-family: lato_regular, sans-serif; font-size: 18px; text-align: center; background-color: #ffffff;">There isnt one size fits all when it comes to fundraising. Whatever you chose to do, we&rsquo;ll be there to support you every step of the way.</span></p>',
            // body end
            'user_id' => '1',
            'category_id' => '1',
        ];
    }
}
