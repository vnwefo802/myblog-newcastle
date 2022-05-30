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
            'short_title'=>'Our goal is to make sure that everyone has access to health services and educational material. We are committed to making it easier for communities in need and would appreciate any support that you would like to give.',
            'video'=>'',
            'button_1'=>'Volunteer',
            'button_2'=>'Donate',
            'box_title_1'=>'Join',
            'box_title_2'=>'Explore',
            'box_title_3'=>'Get a taste of something new:',
            'box_title_4'=>'Give your hobbies more weight:',
            'box_short_description_1'=>'Rem dicta accusantium quaerat maiores aperiam, nostrum quae ducimus recusandae at maiores aperiam, nostrum quae',
            'box_short_description_2'=>'Our training courses also provide an enhancement your current career path opportunity for progression.',
            'box_short_description_3'=>"If you're feeling unfulfilled in your current role, our training courses provide the perfect opportunity for you.",
            'box_short_description_4'=>'including your hobbies can add a lot of value, so why not improve the quality of your hobby by taking our course in it?',
            'project_title'=>'One of our projects',
            'project_image'=>'',
            'project_short_title'=>'The Agudele Project',
            'project_long_description'=>'In the community at Agudene in Udenu LGA of Nsukka, Enugu State, we provided over 50 plus classroom desks. Used text books, exercise books, including school drum set, school bags, uniforms for both junior and senior primary. We included a scholarship fund for the girl child. These motivated the villagers and the other villages in the locality to release their girls and wards to come to school.',
            'project_button'=>'find out more',
            'difference_title'=>'Make a Difference',
            'difference_short_description'=>"If you're looking for random facts, you've arrived at the correct webpage. The Random Fact Generator has thousands of facts ready to be revealed with a simple click of a mouse.",
            'difference_button_1'=>'Volunteer',
            'difference_button_2'=>'Donate',
            'difference_image'=>'',
        ];
    }
}
