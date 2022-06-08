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
            'title'=>'',
            'facebook'=>'https://www.facebook.com/',
            'twitter'=>'https://www.twitter.com/',
            'instagram'=>'https://www.instagram.com/',
            'youtube'=>'https://www.youtube.com/',

            'community_section'=>'About us',
            // 'community1'=>'About us',
            // 'community2'=>'Who We Are',
            // 'community3'=>'What We Do',
            // 'community4'=>'How Your Help Inpacts Our Work',

            'blog_section'=>'Our Objective',
            // 'blog2'=>'Current Post',
            // 'blog3'=>'Past Posts',
            // 'blog4'=>'Current Projects',
            // 'blog5'=>'Past Projects',

            'contact_us_section'=>'Volunteer',
            // 'contact2'=>'Donate',
            // 'contact3'=>'FAQ',


        ];
    }
}
