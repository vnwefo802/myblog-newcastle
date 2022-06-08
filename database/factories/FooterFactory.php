<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Footer>
 */
class FooterFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title'=>'The highest forms of understanding we can achieve are laughter and human',
            'facebook'=>'',
            'twitter'=>'',
            'instagram'=>'',
            'youtube'=>'',
            'community1'=>'About us',
            'community2'=>'Who We Are',
            'community3'=>'What We Do',
            'community4'=>'How Your Help Inpacts Our Work',
            'community_link_1'=>'',
            'community_link_2'=>'',
            'community_link_3'=>'',
            'community_link_4'=>'',
            'blog1'=>'Our Objective',
            'blog2'=>'Current Post',
            'blog3'=>'Past Posts',
            'blog4'=>'Current Projects',
            'blog5'=>'Past Projects',
            'blog_link_1'=>'',
            'blog_link_2'=>'',
            'blog_link_3'=>'',
            'blog_link_4'=>'',
            'blog_link_5'=>'',
            'contact1'=>'Volunteer',
            'contact2'=>'Donate',
            'contact3'=>'FAQ',
            'contact4'=>'',
            'contact5'=>'',
            'contact_link_1'=>'',
            'contact_link_2'=>'',
            'contact_link_3'=>'',
            'contact_link_4'=>'',
            'contact_link_5'=>'',

        ];
    }
}
