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
            'body' => '<p><span style="color: #222221; font-family: lato_regular, sans-serif; font-size: 18px; text-align: center; background-color: #ffffff;">There isnt one size fits all when it comes to fundraising. Whatever you chose to do, we&rsquo;ll be there to support you every step of the way.</span></p>
            <p>&nbsp;</p>
            <p>&nbsp;</p>
            <h3 style="text-rendering: optimizelegibility; font-family: font-size: 22px; letter-spacing: 0.1em; line-height: 1.55em; text-transform: uppercase; color: #e37263; margin-top: 0px; background-color: #ffffff; white-space: pre-wrap;">MAKE A DONATION</h3>
            <p>&nbsp;</p>
            <p class="" style="margin-bottom: 0px; overflow-wrap: break-word; color: #4a4a4a; font-family: font-size: 18px; letter-spacing: 0.36px; background-color: #ffffff; white-space: pre-wrap;"><em style="overflow-wrap: break-word;">By supporting our work, a little really can go a long way. A &pound;9 donation, will provide 100 children with a porridge meal that means they go to school rather than having to work, scavenge or beg on the streets.</em></p>
            <p class="" style="margin-bottom: 0px; overflow-wrap: break-word; color: #4a4a4a; font-family: font-size: 18px; letter-spacing: 0.36px; background-color: #ffffff; white-space: pre-wrap;">&nbsp;</p>
            <p class="" style="margin-bottom: 0px; overflow-wrap: break-word; color: #4a4a4a; font-family: font-size: 18px; letter-spacing: 0.36px; background-color: #ffffff; white-space: pre-wrap;">&nbsp;</p>
            <h3 style="text-rendering: optimizelegibility; font-family: font-size: 22px; letter-spacing: 0.1em; line-height: 1.55em; text-transform: uppercase; color: #e37263; margin-top: 0px; background-color: #ffffff; white-space: pre-wrap;">GET INVOLVED</h3>
            <p class="" style="margin-bottom: 0px; overflow-wrap: break-word; color: #4a4a4a; font-family: font-size: 18px; letter-spacing: 0.36px; background-color: #ffffff; white-space: pre-wrap;">&nbsp;</p>
            <p class="" style="margin-bottom: 0px; overflow-wrap: break-word; color: #4a4a4a; font-family: font-size: 18px; letter-spacing: 0.36px; background-color: #ffffff; white-space: pre-wrap;"><em style="overflow-wrap: break-word;"><span style="color: #4a4a4a; font-family: Open Sans;"><span style="font-size: 18px; letter-spacing: 0.36px; white-space: pre-wrap;">Whether you would like to donate money, time, skills or goods, there are lots of ways you can get involved with African Children&rsquo;s Fund to give children in Nigeria hope for a bright future.</span></span></em></p>
            <p class="" style="margin-bottom: 0px; overflow-wrap: break-word; color: #4a4a4a; font-family: font-size: 18px; letter-spacing: 0.36px; background-color: #ffffff; white-space: pre-wrap;">&nbsp;</p>
            <h3 style="text-rendering: optimizelegibility; font-family: font-size: 22px; letter-spacing: 0.1em; line-height: 1.55em; text-transform: uppercase; color: #e37263; background-color: #ffffff; white-space: pre-wrap;"><strong style="overflow-wrap: break-word;">VOLUNTEER</strong></h3>
            <p class="" style="overflow-wrap: break-word; color: #4a4a4a; font-family: font-size: 18px; letter-spacing: 0.36px; background-color: #ffffff; white-space: pre-wrap;">If you have a few hours a week to spare, become a volunteer! It&rsquo;s great fun and a good way to make new friends as well as helping us support children in Nigeria. Simply pop into one of the shops or <a style="background-color: transparent; color: #e7680d; text-decoration-line: none; padding-bottom: 0.05em; border-bottom: 1px solid rgba(231, 104, 13, 0.3); transition: border-color 0.15s ease-out 0s, color 0.15s ease-out 0s; overflow-wrap: break-word;" href="mailto:Newcastle-Edumed-Fundation@gmail.com">email us</a> to find out more.</p>
            <p class="" style="margin-bottom: 0px; overflow-wrap: break-word; color: #4a4a4a; font-family: font-size: 18px; letter-spacing: 0.36px; background-color: #ffffff; white-space: pre-wrap;">&nbsp;</p>
            <p class="" style="overflow-wrap: break-word; color: #4a4a4a; font-family: font-size: 18px; letter-spacing: 0.36px; background-color: #ffffff; white-space: pre-wrap;">All our shops also need a supply of good quality donations to sell. If you find yourself with spare clothing, accessories, linen, toys, books, records, CDs, DVDs, small electrical items or general bric-a-brac, please do drop it into one of our shops.</p>
            <p class="" style="overflow-wrap: break-word; color: #4a4a4a; font-family: font-size: 18px; letter-spacing: 0.36px; background-color: #ffffff; white-space: pre-wrap;">&nbsp;</p>
            <p class="" style="overflow-wrap: break-word; color: #4a4a4a; font-family: font-size: 18px; letter-spacing: 0.36px; background-color: #ffffff; white-space: pre-wrap;">&nbsp;</p>
            <p class="" style="overflow-wrap: break-word; color: #4a4a4a; font-family: font-size: 18px; letter-spacing: 0.36px; background-color: #ffffff; white-space: pre-wrap;">&nbsp;</p>
            <p class="" style="overflow-wrap: break-word; color: #4a4a4a; font-family: font-size: 18px; letter-spacing: 0.36px; background-color: #ffffff; white-space: pre-wrap;">&nbsp;</p>
            <div id="block-b0bab484361f08b2d297" class="sqs-block html-block sqs-block-html" style="position: relative; height: auto; padding: 0px 17px 17px; clear: none; box-sizing: border-box; margin-right: auto; margin-left: auto; color: #4a4a4a; font-family:  font-size: 18px; letter-spacing: 0.36px; background-color: #ffffff;" data-block-type="2">
            <div class="sqs-block-content" style="outline: none;">
            <h1 style="font-size: 51px; margin: 0px; text-rendering: optimizelegibility; letter-spacing: 0em; line-height: 0.75em; color: #ae5929; white-space: pre-wrap;">Nigeria | Projects</h1>
            </div>
            </div>
            <div class="row sqs-row" style="color: #4a4a4a; font-family:  font-size: 18px; letter-spacing: 0.36px; background-color: #ffffff; width: auto !important;">
            <div class="col sqs-col-8 span-8" style="float: left;">
            <div id="block-yui_3_17_2_1_1531217309792_11622" class="sqs-block html-block sqs-block-html sqs-col-4 span-4 float float-left" style="float: left; position: relative; height: auto; padding: 17px; clear: none; box-sizing: border-box; z-index: 10 !important; margin-right: 17px; background-color: #fffce2;" data-block-type="2">
            <div class="sqs-block-content" style="outline: none;">
            <h2 style="text-rendering: optimizelegibility; font-size: 40px; letter-spacing: 0em; line-height: 1.2em; margin-top: 0px; text-align: center; white-space: pre-wrap;">49%</h2>
            <h3 style="text-rendering: optimizelegibility; font-size: 22px; letter-spacing: 0.1em; line-height: 1.55em; text-transform: uppercase; color: #e37263; margin-top: 15px; margin-bottom: 0px; text-align: center; white-space: pre-wrap;"><em style="overflow-wrap: break-word;">OF CHILDREN DO NOT COMPLETE THEIR PRIMARY EDUCATION.</em></h3>
            </div>
            </div>
            <div id="block-yui_3_17_2_1_1531217309792_15551" class="sqs-block html-block sqs-block-html" style="position: relative; height: auto; padding: 17px; clear: none; background-color: #fffce2;" data-block-type="2">
            <div class="sqs-block-content" style="outline: none;">
            <h2 style="text-rendering: optimizelegibility; font-size: 40px; letter-spacing: 0em; line-height: 1.2em; margin-top: 0px; text-align: center; white-space: pre-wrap;">20 million</h2>
            <h3 style="text-rendering: optimizelegibility; font-size: 22px; letter-spacing: 0.1em; line-height: 1.55em; text-transform: uppercase; color: #e37263; margin-top: 15px; margin-bottom: 0px; text-align: center; white-space: pre-wrap;"><em style="overflow-wrap: break-word;">NIGERIA LIVE ON A WAGE OF LESS THAN $1 PER DAY</em></h3>
            </div>
            </div>
            </div>
            <div class="col sqs-col-4 span-4" style="float: left; padding-right: 0px;">
            <div id="block-yui_3_17_2_1_1531217309792_13055" class="sqs-block html-block sqs-block-html" style="position: relative; height: auto; padding: 17px; clear: none; background-color: #fffce2;" data-block-type="2">
            <div class="sqs-block-content" style="outline: none;">
            <h2 style="text-rendering: optimizelegibility; font-size: 40px; letter-spacing: 0em; line-height: 1.2em; margin-top: 0px; text-align: center; white-space: pre-wrap;">61%</h2>
            <h3 style="text-rendering: optimizelegibility; font-size: 22px; letter-spacing: 0.1em; line-height: 1.55em; text-transform: uppercase; color: #e37263; margin-top: 15px; margin-bottom: 0px; text-align: center; white-space: pre-wrap;"><em style="overflow-wrap: break-word;">OF CITY-DWELLING </em><em style="overflow-wrap: break-word;">NIGERIA </em><em style="overflow-wrap: break-word;">LIVE IN SLUM COMMUNITIES.</em></h3>
            </div>
            </div>
            </div>
            </div>
            <div id="block-yui_3_17_2_1_1533033643423_16494" class="sqs-block spacer-block sqs-block-spacer" style="position: relative; height: auto; padding: 17px; clear: both; box-sizing: border-box; margin-right: auto; margin-left: auto; color: #4a4a4a; font-family: font-size: 18px; letter-spacing: 0.36px; background-color: #ffffff;" data-aspect-ratio="0.12254901960784313" data-block-type="21">
            <div id="yui_3_17_2_1_1655379554711_259" class="sqs-block-content sqs-intrinsic" style="position: relative !important; visibility: hidden; padding-bottom: 1px;"></div>
            </div>
            <div id="block-yui_3_17_2_1_1531217309792_9558" class="sqs-block html-block sqs-block-html" style="position: relative; height: auto; padding: 17px; clear: none; box-sizing: border-box;  margin-right: auto; margin-left: auto; color: #4a4a4a; font-family:  font-size: 18px; letter-spacing: 0.36px; background-color: #ffffff;" data-block-type="2">
            <div class="sqs-block-content" style="outline: none;">
            <h3 style="text-rendering: optimizelegibility; font-size: 22px; letter-spacing: 0.1em; line-height: 1.55em; text-transform: uppercase; color: #e37263; margin-top: 0px; white-space: pre-wrap;"><strong style="overflow-wrap: break-word;">PORRIDGE CLUBS </strong></h3>
            <p class="" style="overflow-wrap: break-word; white-space: pre-wrap;">Nigeria was the first country African Children&rsquo;s Fund worked in and since 2006, our name has become synonymous with our Porridge Clubs. These now run in 10 primary schools in and around the town of Thika, and enable 2,000 children to go to school every day instead of working, begging or scavenging for food on the street.</p>
            <p class="" style="overflow-wrap: break-word; white-space: pre-wrap;">Through Nigeria - we provide participating schools with a basic kitchen, water and cooking utensils. After that, the schools receive a supply of Uji &ndash; a vitamin supplemented porridge &ndash; so the children can receive a school meal each day.</p>
            <p class="" style="overflow-wrap: break-word; white-space: pre-wrap;">A daily mug of porridge has led Watoto Nigeria to report that:</p>
            <ul style="overflow-wrap: break-word;" data-rte-list="default">
            <li style="list-style-type: none; overflow-wrap: break-word;">
            <p class="" style="margin-top: 0.5em; margin-bottom: 0.5em; overflow-wrap: break-word; white-space: pre-wrap;">Absenteeism has reduced by over 80%</p>
            </li>
            <li style="list-style-type: none; overflow-wrap: break-word;">
            <p class="" style="margin-top: 0.5em; margin-bottom: 0.5em; overflow-wrap: break-word; white-space: pre-wrap;">There are fewer cases of children falling ill due to better nutrition.</p>
            </li>
            <li style="list-style-type: none; overflow-wrap: break-word;">
            <p class="" style="margin-top: 0.5em; margin-bottom: 0.5em; overflow-wrap: break-word; white-space: pre-wrap;">Children&rsquo;s participation in games and physical education activities has improved.</p>
            </li>
            <li style="list-style-type: none; overflow-wrap: break-word;">
            <p class="" style="margin-top: 0.5em; margin-bottom: 0.5em; overflow-wrap: break-word; white-space: pre-wrap;">Enrolment within participating schools has increased.</p>
            </li>
            <li style="list-style-type: none; overflow-wrap: break-word;">
            <p class="" style="margin-top: 0.5em; margin-bottom: 0.5em; overflow-wrap: break-word; white-space: pre-wrap;">Children are achieving better results in their examinations.</p>
            </li>
            </ul>
            <p class="" style="margin-bottom: 0px; overflow-wrap: break-word; white-space: pre-wrap;">More students are continuing their education with over 90% choosing to enrol into secondary school upon completion of their primary school examinations, presenting yet more opportunities for a prosperous future.</p>
            </div>
            </div>',

            // body end
            'user_id' => '1',
            'category_id' => '1',
        ];
    }
}
