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
            'title'=>'The highest forms of understanding we can achieve are laughter and human compassion',
            'facebook'=>'https://www.facebook.com/',
            'twitter'=>'https://www.twitter.com/',
            'instagram'=>'https://www.instagram.com/',
            'youtube'=>'https://www.youtube.com/',
            'contact_info' => '07723817654',
            'email'=> 'Newcastle-Edumed-Fundation@gmail.com',

            // community_section
            'community_section'=>'<p><a href="../about" target="_blank" rel="noopener">About<span style="color: #000000;"> </span>us</a></p>
            <p>&nbsp;</p>
            <p>&nbsp;</p>
            <p>Who We Are</p>
            <p>&nbsp;</p>
            <p>&nbsp;</p>
            <p>What We Do</p>
            <p>&nbsp;</p>
            <p>&nbsp;</p>
            <p>How Your Help Inpacts Our Work</p>',


            // blog_section
            'blog_section'=>'<p>Current Post</p>
            <p>&nbsp;</p>
            <p>&nbsp;</p>
            <p>Past Posts</p>
            <p>&nbsp;</p>
            <p>&nbsp;</p>
            <p>Current Projects</p>
            <p>&nbsp;</p>
            <p>&nbsp;</p>
            <p>Past Projects</p>',

            // contact_us_section
            'contact_us_section'=>'<p>Donate</p>',


        ];
    }
}
