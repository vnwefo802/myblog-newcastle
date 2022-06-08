<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Home>
 */
class HomeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title'=>'Filling the gaps in education and health for communities less fortunate',
            'video'=>'',
            'button_1'=>'Volunteer',
            'button_2'=>'Donate',
            'box_title_1'=>'Join',
            'box_title_2'=>'Explore',
            'box_title_3'=>'Get a taste of something new:',
            'box_title_4'=>'Give your hobbies more weight:',
            // 'box_short_description_1'=>'Rem dicta accusantium quaerat maiores aperiam, nostrum quae ducimus recusandae at maiores aperiam, nostrum quae',
            // 'box_short_description_2'=>'Our training courses also provide an enhancement your current career path opportunity for progression.',
            // 'box_short_description_3'=>"If you're feeling unfulfilled in your current role, our training courses provide the perfect opportunity for you.",
            // 'box_short_description_4'=>'including your hobbies can add a lot of value, so why not improve the quality of your hobby by taking our course in it?',
            'project_title'=>'One of our projects',
            'project_image'=>'',
            'project_short_title'=>'The Agudele Project',
            'project_button'=>'find out more',
            'difference_title'=>'Make a Difference',
            'difference_button_1'=>'Volunteer',
            'difference_button_2'=>'Donate',
            'difference_image'=>'',
            'Logo'=>'',
        ];
    }
}
