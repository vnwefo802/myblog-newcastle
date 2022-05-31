<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Donate>
 */
class DonateFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'donate_title'=> 'Help Us Out',
            'donate_first_short_title'=> 'Donate to our cause and help people in need.',
            'donate_second_short_title'=> 'To enhance the quality of life of communities by the instrumentality of education, welfare interventions and health services.',
            'donate_project_title'=> 'OUR MISSION PROJECTS',
          
            'donate_objectives__title'=> 'Our Objectives',
       
            'donate_values_title'=> 'Our Values',
           


        ];
    }
}
