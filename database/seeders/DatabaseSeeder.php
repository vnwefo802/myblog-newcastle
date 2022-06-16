<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

use Illuminate\Support\Facades\Route;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Disable foreign key constraints for users and enable it again.
        Schema::disableForeignKeyConstraints();

        \App\Models\User::truncate();
        \App\Models\Role::truncate();
        \App\Models\Category::truncate();
        \App\Models\Post::truncate();
        \App\Models\Tag::truncate();
        \App\Models\Comment::truncate();
        \App\Models\Image::truncate();

        Schema::enableForeignKeyConstraints();

        // Create roles and users
        \App\Models\Role::factory(1)->create();
        \App\Models\Role::factory(1)->create(['name' => 'admin']);

        $blog_routes = Route::getRoutes();
        $permissions_ids = [];
        foreach($blog_routes as $route)
        {
            if(strpos($route->getName(), 'admin') !== false) {
                $permission = \App\Models\Permission::create(['name' => $route->getName()]);
                $permissions_ids[] = $permission->id;
            }
        }

        \App\Models\Role::where('name', 'admin')->first()->permissions()->sync( $permissions_ids );

        $users = \App\Models\User::factory(10)->create();
        \App\Models\User::factory()->create([
            'name' => 'newcastle-edumed-foundation',
        'email' => 'newcastle-edumed-foundation@gmail.com',
            'role_id' => 2
        ]);

        foreach ($users as $user) {
            $user->image()->save( \App\Models\Image::factory()->make() );
        }

        \App\Models\Category::factory()->create(
            [
                'name' => 'Fundrasier For Newcastle Foundation',
                'short_description' => 'Want to get involved in charity events or charity fundraising? Try joining one of our events or set up your own - it could be the most fun you have all year!',
                'slug' => 'events-and-fundraising',
                'user_id' => '1',
            ]
        );
        \App\Models\Category::factory()->create([
            'name' => 'Fundrasier For Newcastle Foundation',
            'short_description' => 'Want to get involved in charity events or charity fundraising? Try joining one of our events or set up your own - it could be the most fun you have all year!',
            'slug' => 'gooo',
            'user_id' => '2',
        ]);
        \App\Models\Category::factory()->create(
            [
                'name' => 'Fundrasier ',
                'short_description' => 'Want to get involved in charity Try joining one of our events or set up your own - it could be the most fun you have all year!',
                'slug' => 'homepage',
                'user_id' => '3',
            ]
        );

        $posts = \App\Models\Post::factory()->create(
            [
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
                <div id="block-b0bab484361f08b2d297" class="sqs-block html-block sqs-block-html" style="position: relative; height: auto; padding: 0px 17px 17px; clear: none; box-sizing: border-box; width: 850.438px; margin-right: auto; margin-left: auto; color: #4a4a4a; font-family:  font-size: 18px; letter-spacing: 0.36px; background-color: #ffffff;" data-block-type="2">
                <div class="sqs-block-content" style="outline: none;">
                <h1 style="font-size: 51px; margin: 0px; text-rendering: optimizelegibility; letter-spacing: 0em; line-height: 0.75em; color: #ae5929; white-space: pre-wrap;">Nigeria | Projects</h1>
                </div>
                </div>
                <div class="row sqs-row" style="color: #4a4a4a; font-family:  font-size: 18px; letter-spacing: 0.36px; background-color: #ffffff; width: auto !important;">
                <div class="col sqs-col-8 span-8" style="float: left; width: 756px;">
                <div id="block-yui_3_17_2_1_1531217309792_11622" class="sqs-block html-block sqs-block-html sqs-col-4 span-4 float float-left" style="float: left; width: 378px; position: relative; height: auto; padding: 17px; clear: none; box-sizing: border-box; z-index: 10 !important; margin-right: 17px; background-color: #fffce2;" data-block-type="2">
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
                <div class="col sqs-col-4 span-4" style="float: left; width: 377.987px; padding-right: 0px;">
                <div id="block-yui_3_17_2_1_1531217309792_13055" class="sqs-block html-block sqs-block-html" style="position: relative; height: auto; padding: 17px; clear: none; background-color: #fffce2;" data-block-type="2">
                <div class="sqs-block-content" style="outline: none;">
                <h2 style="text-rendering: optimizelegibility; font-size: 40px; letter-spacing: 0em; line-height: 1.2em; margin-top: 0px; text-align: center; white-space: pre-wrap;">61%</h2>
                <h3 style="text-rendering: optimizelegibility; font-size: 22px; letter-spacing: 0.1em; line-height: 1.55em; text-transform: uppercase; color: #e37263; margin-top: 15px; margin-bottom: 0px; text-align: center; white-space: pre-wrap;"><em style="overflow-wrap: break-word;">OF CITY-DWELLING </em><em style="overflow-wrap: break-word;">NIGERIA </em><em style="overflow-wrap: break-word;">LIVE IN SLUM COMMUNITIES.</em></h3>
                </div>
                </div>
                </div>
                </div>
                <div id="block-yui_3_17_2_1_1533033643423_16494" class="sqs-block spacer-block sqs-block-spacer" style="position: relative; height: auto; padding: 17px; clear: both; box-sizing: border-box; width: 850.438px; margin-right: auto; margin-left: auto; color: #4a4a4a; font-family: font-size: 18px; letter-spacing: 0.36px; background-color: #ffffff;" data-aspect-ratio="0.12254901960784313" data-block-type="21">
                <div id="yui_3_17_2_1_1655379554711_259" class="sqs-block-content sqs-intrinsic" style="position: relative !important; visibility: hidden; padding-bottom: 1px;"></div>
                </div>
                <div id="block-yui_3_17_2_1_1531217309792_9558" class="sqs-block html-block sqs-block-html" style="position: relative; height: auto; padding: 17px; clear: none; box-sizing: border-box; width: 850.438px; margin-right: auto; margin-left: auto; color: #4a4a4a; font-family:  font-size: 18px; letter-spacing: 0.36px; background-color: #ffffff;" data-block-type="2">
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
            ]
        );

        $posts2 = \App\Models\Post::factory()->create(
            [
                'title' => 'Your Challenges Changes Your Futures',
                'slug' => 'me',
                'excerpt' => 'FUNDRAISE NEWCASTLE FOUNDATION',
                // body
                'body' => '<div id="yui_3_17_2_1_1655382978198_145" class="row sqs-row" style="color: #4a4a4a; font-family:  font-size: 18px; letter-spacing: 0.36px; background-color: #ffffff; width: auto !important;">
                <div class="col sqs-col-9 span-9" style="float: left; width: 850.5px; padding-right: 0px;">
                <div id="block-yui_3_17_2_1_1523893776895_21402" class="sqs-block html-block sqs-block-html" style="position: relative; height: auto; padding: 17px; clear: none;" data-block-type="2">
                <div class="sqs-block-content" style="outline: none;">
                <h3 style="text-rendering: optimizelegibility; font-size: 22px; letter-spacing: 0.1em; line-height: 1.55em; text-transform: uppercase; color: #e37263; margin-top: 15px; margin-bottom: 0px; white-space: pre-wrap;"><strong style="overflow-wrap: break-word;">EDUCATION ALL MONTH, EVERY MONTH </strong></h3>
                <div id="block-yui_3_17_2_1_1526293097071_12739" class="sqs-block html-block sqs-block-html" style="position: relative; height: auto; padding: 17px; clear: none; box-sizing: border-box; width: 850.438px; margin-right: auto; margin-left: auto; letter-spacing: 0.36px;" data-block-type="2">
                <div class="sqs-block-content" style="outline: none;">
                <p class="" style="margin-top: 0px; overflow-wrap: break-word; white-space: pre-wrap;">African girls miss school every month &ndash; just because they are girls. The problem is a lack of affordable sanitary towels. Poor families cannot afford sanitary towels or even underwear and feeding their children takes priority. Many girls are forced to use unsanitary rags, animal skins and even chicken feathers as protection while they menstruate. We have even heard of young women digging holes in the ground to sit over in isolation all day.</p>
                <p class="" style="overflow-wrap: break-word; white-space: pre-wrap;">This makes the prospect of going to school while menstruating impossible. Missing a week&rsquo;s schooling each month has a massive detrimental impact on a child&rsquo;s progress and girls fall so far behind that they drop out of school completely, often before they have completed Primary School.</p>
                <p class="" style="overflow-wrap: break-word; white-space: pre-wrap;"><strong style="overflow-wrap: break-word;"><em style="overflow-wrap: break-word;">The result: a lack of education, hope and future &ndash; for girls and their families.</em></strong></p>
                <p class="" style="overflow-wrap: break-word; white-space: pre-wrap;">Education All Month, Every Month offers a solution: it provides girls with sanitary protection, underwear and a monthly social education programme at school, enabling them to attend school all month, every month.</p>
                <p class="" style="overflow-wrap: break-word; white-space: pre-wrap;">Through this scheme, Watoto Kwanza &ndash; African Children&rsquo;s Fund&rsquo;s Kenyan NGO partner:</p>
                <ul style="overflow-wrap: break-word; margin-bottom: 0px;" data-rte-list="default">
                <li style="list-style-type: none; overflow-wrap: break-word;">
                <p class="" style="margin-top: 0.5em; margin-bottom: 0.5em; overflow-wrap: break-word; white-space: pre-wrap;">Provides sanitary towels to 400 girls in eight schools on a four-weekly basis.</p>
                </li>
                <li style="list-style-type: none; overflow-wrap: break-word;">
                <p class="" style="margin-top: 0.5em; margin-bottom: 0.5em; overflow-wrap: break-word; white-space: pre-wrap;">Provides five pairs of locally sourced underwear to each girl annually.</p>
                </li>
                <li style="list-style-type: none; overflow-wrap: break-word;">
                <p class="" style="margin-top: 0.5em; margin-bottom: 0.5em; overflow-wrap: break-word; white-space: pre-wrap;">Runs a monthly health and social education programme and discussion forum so girls understand what to expect during puberty.</p>
                </li>
                </ul>
                </div>
                </div>
                <p>&nbsp;</p>
                <div id="block-yui_3_17_2_1_1523893776895_28808" class="sqs-block quote-block sqs-block-quote null" style="position: relative; height: auto; padding: 17px 17px 0.5em; font-weight: 600; font-style: italic; font-size: 25px; letter-spacing: 0em; line-height: 1.4em; margin: -25px auto; text-align: center; clear: both; box-sizing: border-box; width: 850.438px;" data-block-type="31">
                <div class="sqs-block-content">
                <figure class="block-animation-none" style="display: block; margin: 1em 0px;">
                <blockquote style="margin: 0px;" data-animation-role="quote">&ldquo;Your programme has really made us improve academically since there is no absenteeism like the previous years. The sanitary towels are really helping us.&rdquo;</blockquote>
                </figure>
                </div>
                </div>
                </div>
                </div>
                </div>
                </div>
                <div id="block-yui_3_17_2_1_1525962388471_8709" class="sqs-block video-block sqs-block-video sqs-col-6 span-6 float float-right" style="float: right; width: 567px; position: relative; height: auto; padding: 17px; box-sizing: border-box; clear: both; margin-left: 17px; color: #4a4a4a; font-family: font-size: 18px; letter-spacing: 0.36px; background-color: #ffffff; z-index: 10 !important;" data-block-json="{&quot;blockAnimation&quot;:&quot;none&quot;,&quot;layout&quot;:&quot;caption-hidden&quot;,&quot;overlay&quot;:false,&quot;description&quot;:{&quot;html&quot;:&quot;&lt;p&gt;The amount allocated for provision of free sanitary towels was slashed by 99 million shillings in the financial year 2013/2014, this is from the 300 million shillings allocated previously to the ministry of education for the provision of sanitary towels to 568,925 needy girls between class 6 and 8, a fraction of the 2.5 million in need of the towels.&lt;/p&gt;&quot;,&quot;raw&quot;:false},&quot;hSize&quot;:6,&quot;floatDir&quot;:&quot;right&quot;,&quot;html&quot;:&quot;&lt;iframe src=\&quot;//www.youtube.com/embed/1hn822TrKXo?start=4&amp;amp;wmode=opaque&amp;amp;enablejsapi=1\&quot; height=\&quot;480\&quot; width=\&quot;854\&quot; scrolling=\&quot;no\&quot; frameborder=\&quot;0\&quot; allowfullscreen=\&quot;\&quot;&gt;\n&lt;/iframe&gt;&quot;,&quot;url&quot;:&quot;https://www.youtube.com/watch?v=1hn822TrKXo&amp;t=4s&quot;,&quot;thumbnailUrl&quot;:&quot;https://i.ytimg.com/vi/1hn822TrKXo/hqdefault.jpg&quot;,&quot;resolvedBy&quot;:&quot;youtube&quot;}" data-block-type="32">
                <div id="yui_3_17_2_1_1655382978198_69" class="sqs-block-content">
                <div id="yui_3_17_2_1_1655382978198_76" class="sqs-video-wrapper video-none" style="position: relative;" data-provider-name="" data-html="&lt;iframe src=&quot;//www.youtube.com/embed/1hn822TrKXo?start=4&amp;wmode=opaque&amp;enablejsapi=1&quot; height=&quot;480&quot; width=&quot;854&quot; scrolling=&quot;no&quot; frameborder=&quot;0&quot; allowfullscreen=&quot;&quot;&gt;&lt;br/&gt;&lt;/iframe&gt;">
                <div class="intrinsic" style="max-width: 100%; position: relative;">&nbsp;</div>
                </div>
                </div>
                </div>
               ',

                // body end
                'user_id' => '2',
                'category_id' => '2',
            ]
        );


        $posts3 = \App\Models\Post::factory()->create(
            [
                'title' => 'Your Challenges Changes Your Futures',
                'slug' => 'old',
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
                <div id="block-b0bab484361f08b2d297" class="sqs-block html-block sqs-block-html" style="position: relative; height: auto; padding: 0px 17px 17px; clear: none; box-sizing: border-box; width: 850.438px; margin-right: auto; margin-left: auto; color: #4a4a4a; font-family:  font-size: 18px; letter-spacing: 0.36px; background-color: #ffffff;" data-block-type="2">
                <div class="sqs-block-content" style="outline: none;">
                <h1 style="font-size: 51px; margin: 0px; text-rendering: optimizelegibility; letter-spacing: 0em; line-height: 0.75em; color: #ae5929; white-space: pre-wrap;">Nigeria | Projects</h1>
                </div>
                </div>
                <div class="row sqs-row" style="color: #4a4a4a; font-family:  font-size: 18px; letter-spacing: 0.36px; background-color: #ffffff; width: auto !important;">
                <div class="col sqs-col-8 span-8" style="float: left; width: 756px;">
                <div id="block-yui_3_17_2_1_1531217309792_11622" class="sqs-block html-block sqs-block-html sqs-col-4 span-4 float float-left" style="float: left; width: 378px; position: relative; height: auto; padding: 17px; clear: none; box-sizing: border-box; z-index: 10 !important; margin-right: 17px; background-color: #fffce2;" data-block-type="2">
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
                <div class="col sqs-col-4 span-4" style="float: left; width: 377.987px; padding-right: 0px;">
                <div id="block-yui_3_17_2_1_1531217309792_13055" class="sqs-block html-block sqs-block-html" style="position: relative; height: auto; padding: 17px; clear: none; background-color: #fffce2;" data-block-type="2">
                <div class="sqs-block-content" style="outline: none;">
                <h2 style="text-rendering: optimizelegibility; font-size: 40px; letter-spacing: 0em; line-height: 1.2em; margin-top: 0px; text-align: center; white-space: pre-wrap;">61%</h2>
                <h3 style="text-rendering: optimizelegibility; font-size: 22px; letter-spacing: 0.1em; line-height: 1.55em; text-transform: uppercase; color: #e37263; margin-top: 15px; margin-bottom: 0px; text-align: center; white-space: pre-wrap;"><em style="overflow-wrap: break-word;">OF CITY-DWELLING </em><em style="overflow-wrap: break-word;">NIGERIA </em><em style="overflow-wrap: break-word;">LIVE IN SLUM COMMUNITIES.</em></h3>
                </div>
                </div>
                </div>
                </div>
                <div id="block-yui_3_17_2_1_1533033643423_16494" class="sqs-block spacer-block sqs-block-spacer" style="position: relative; height: auto; padding: 17px; clear: both; box-sizing: border-box; width: 850.438px; margin-right: auto; margin-left: auto; color: #4a4a4a; font-family: font-size: 18px; letter-spacing: 0.36px; background-color: #ffffff;" data-aspect-ratio="0.12254901960784313" data-block-type="21">
                <div id="yui_3_17_2_1_1655379554711_259" class="sqs-block-content sqs-intrinsic" style="position: relative !important; visibility: hidden; padding-bottom: 1px;"></div>
                </div>
                <div id="block-yui_3_17_2_1_1531217309792_9558" class="sqs-block html-block sqs-block-html" style="position: relative; height: auto; padding: 17px; clear: none; box-sizing: border-box; width: 850.438px; margin-right: auto; margin-left: auto; color: #4a4a4a; font-family:  font-size: 18px; letter-spacing: 0.36px; background-color: #ffffff;" data-block-type="2">
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
                'user_id' => '2',
                'category_id' => '3',
            ]
        );



        $posts->image()->save( \App\Models\Image::factory()->make() );
        $posts2->image()->save( \App\Models\Image::factory()->make() );
        $posts3->image()->save( \App\Models\Image::factory()->make() );

        \App\Models\Comment::factory(100)->create();

        \App\Models\Tag::factory()->create([
            'name' => 'Challenges',
    ]);
        \App\Models\Tag::factory()->create();
        \App\Models\Tag::factory()->create();

        // foreach($posts as $post)
        // {
        //     $tags_ids = [];
        //     $tags_ids[] = \App\Models\Tag::all()->random()->id;
        //     $tags_ids[] = \App\Models\Tag::all()->random()->id;
        //     $tags_ids[] = \App\Models\Tag::all()->random()->id;

        //     $post->tags()->sync( $tags_ids );
        //     $post->image()->save( \App\Models\Image::factory()->make() );
        // }

        \App\Models\Setting::factory(1)->create();
        \App\Models\Donate::factory()->create();
        \App\Models\Home::factory()->create();
        \App\Models\Footer::factory()->create();
        // \App\Models\About::factory(1)->create();


    }
}
