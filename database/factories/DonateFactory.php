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
            'donate_first_project__short_title'=> 'Makoko Project',
            'donate_second_project__short_title'=> 'Over ten years we have done medical and education outreaches within the slum coastline community of Makoko, Yaba Local Government area of Lagos. We have provided relief materials, like food and clothing. At a point we had a Good Kitchen, were the poorest of the poor were given meals. We provided Education materials like books, used text books and exercise books.',
            'donate_first_project__long_description'=> 'Agudele Project',
            'donate_second_project__long_description'=> 'In the community at Agudene in Udenu LGA of Nsukka, Enugu State, we provided over 50 plus classroom desks. Used text books, exercise books, including school drum set, school bags, uniforms for both junior and senior primary. We included a scholarship fund for the girl child. These motivated the villagers and the other villages in the locality to release their girls and wards to come to school. In the coming years, what we intend to do is to identify communities in the Nsukka area of Enugu state with huge health and educational gaps and try to fill them up and carry out medical outreaches. In such communities regularly and institutionalize health post in such identified communities regularly to provide primary health care services.',
            'donate_objectives__title'=> 'Our Objectives',
            'donate_first__Objectives__description'=> 'To identify communities with huge health and educational gaps and try to fill them',
            'donate_second__Objectives__description'=> 'To carry out medical outreaches in identified communities regularly',
            'donate_third__Objectives__description'=> 'To institutionalize health posts in such identified communities to provide primary health care services',
            'donate_fourth__Objectives__description'=> 'To support continued training of indigenous community health workers to assist in provision of primary health care services in these communities',
            'donate_fifth__Objectives__description'=> 'To support continued training of indigenous teachers in such communities',
            'donate_sixth__Objectives__description'=> 'To support primary and secondary level education with educational materials of need',
            'donate_values_title'=> 'Our Values',
            'donate_first__Values__description'=> 'Respect',
            'donate_second__Values__description'=> 'Stewardship and Accountability',
            'donate_third__Values__description'=> 'Collaborationy',
            'donate_fourth__Values__description'=> 'Human Dignity',
            'donate_fifth__Values__description'=>'Equal Opportunity'


        ];
    }
}
