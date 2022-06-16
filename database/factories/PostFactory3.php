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
            'title' => 'Charity Runs',
            'slug' => 'how-can-you-help',
            'excerpt' => '2022 virtual Newcastle Marathon',
            // body
            '<h3 style="text-rendering: optimizelegibility; font-family: 'Open Sans'; font-size: 22px; letter-spacing: 0.1em; line-height: 1.55em; text-transform: uppercase; color: #e37263; margin-top: 0px; background-color: #ffffff; white-space: pre-wrap;">CHALLENGE HIGHLIGHTS:</h3>
            <ul id="yui_3_17_2_1_1655385883316_199" style="overflow-wrap: break-word; color: #4a4a4a; font-family: 'Open Sans'; font-size: 18px; letter-spacing: 0.36px; background-color: #ffffff;" data-rte-list="default">
            <li style="list-style-type: none; overflow-wrap: break-word;">
            <p class="" style="margin-top: 0.5em; margin-bottom: 0.5em; overflow-wrap: break-word; white-space: pre-wrap;">African Children&rsquo;s Fund technical t-shirt</p>
            </li>
            <li id="yui_3_17_2_1_1655385883316_198" style="list-style-type: none; overflow-wrap: break-word;">
            <p id="yui_3_17_2_1_1655385883316_197" class="" style="margin-top: 0.5em; margin-bottom: 0.5em; overflow-wrap: break-word; white-space: pre-wrap;">Official Newcastle Foundation t-shirt and medal for all finishers</p>
            </li>
            <li style="list-style-type: none; overflow-wrap: break-word;">
            <p class="" style="margin-top: 0.5em; margin-bottom: 0.5em; overflow-wrap: break-word; white-space: pre-wrap;">Full fundraising support</p>
            </li>
            </ul>
            <h3 style="text-rendering: optimizelegibility; font-family: 'Open Sans'; font-size: 22px; letter-spacing: 0.1em; line-height: 1.55em; text-transform: uppercase; color: #e37263; background-color: #ffffff; white-space: pre-wrap;">FUNDRAISING TARGETS:</h3>
            <p class="" style="margin-bottom: 0px; overflow-wrap: break-word; color: #4a4a4a; font-family: 'Open Sans'; font-size: 18px; letter-spacing: 0.36px; background-color: #ffffff; white-space: pre-wrap;"><span style="color: #111111; font-family: Roboto, sans-serif; font-size: 16px; font-weight: bold;">&nbsp;</span><span style="color: #111111; font-family: Roboto, sans-serif; font-size: 16px; font-weight: bold;">₦1000</span> registration fee + <span style="color: #111111; font-family: Roboto, sans-serif; font-size: 16px; font-weight: bold;">&nbsp;</span><span style="color: #111111; font-family: Roboto, sans-serif; font-size: 16px; font-weight: bold;">₦4000</span><span style="letter-spacing: 0.36px;"> minimum sponsorship</span></p>
            <p class="" style="margin-bottom: 0px; overflow-wrap: break-word; color: #4a4a4a; font-family: 'Open Sans'; font-size: 18px; letter-spacing: 0.36px; background-color: #ffffff; white-space: pre-wrap;">&nbsp;</p>
            <div id="block-yui_3_17_2_1_1649669533537_55953" class="sqs-block html-block sqs-block-html" style="position: relative; height: auto; padding: 17px; clear: none; color: #4a4a4a; font-family: 'Open Sans'; font-size: 18px; letter-spacing: 0.36px; background-color: #ffffff;" data-block-type="2">
            <div class="sqs-block-content" style="outline: none;">
            <h3 style="text-rendering: optimizelegibility; font-size: 22px; letter-spacing: 0.1em; line-height: 1.55em; text-transform: uppercase; color: #e37263; margin-top: 0px; white-space: pre-wrap;">TELL ME MORE:</h3>
            <p class="" style="overflow-wrap: break-word; white-space: pre-wrap;">Be part of the World&rsquo;s biggest marathon on Sunday 2nd October 2022! The virtual Newcastle Foundation will give participants the opportunity to take on a 26.2 mile course of their choice at any time from 00:00:00 to 23:59:59. Participants in the virtual event will participate on the same day up to 4,000 people will also run the traditional Newcastle Foundation.</p>
            <p class="" style="overflow-wrap: break-word; white-space: pre-wrap;">Unlike the traditional event, runners and walkers in the virtual event will have 23 hours, 59 minutes and 59 seconds to complete their Newcastle Foundation. You can complete your marathon in one go, or in several parts throughout the day. Once results are uploaded, all finishers will receive a coveted Newcastle Foundation medal and t-shirt!</p>
            <p class="" style="overflow-wrap: break-word; white-space: pre-wrap;">Children&rsquo;s Fund has three charity places in the 2022 event and we would love you to represent #TeamNCF!</p>
            <h3 style="text-rendering: optimizelegibility; font-size: 22px; letter-spacing: 0.1em; line-height: 1.55em; text-transform: uppercase; color: #e37263; margin-bottom: 0px; white-space: pre-wrap;">SIGN UP NOW:</h3>
            </div>
            </div>
            <div id="block-57daa44e120f484610c1" class="sqs-block button-block sqs-block-button" style="position: relative; height: auto; padding: 17px; clear: both; color: #4a4a4a; font-family: 'Open Sans'; font-size: 18px; letter-spacing: 0.36px; background-color: #ffffff;" data-block-type="53">
            <div id="yui_3_17_2_1_1655385883316_110" class="sqs-block-content">
            <div id="yui_3_17_2_1_1655385883316_109" class="sqs-block-button-container sqs-block-button-container--center" style="text-align: center;" data-animation-role="button" data-alignment="center" data-button-size="medium" data-button-type="primary"><a class="sqs-block-button-element--medium sqs-button-element--primary sqs-block-button-element" style="background-color: #e37263; color: #eef7ef; text-decoration-line: none; display: inline-block; width: auto; height: auto; padding: 21px 34px; border-width: 0px; font-family: sofia-pro; font-size: 16.5px; font-weight: 600; letter-spacing: 0em; cursor: pointer; appearance: none; line-height: normal; border-color: #e37263;" href="mailto:tamsyn@africanchildrensfund.org?subject=I%20want%20to%20represent%20%23TeamACF%20-%20Virtual%20TCS%20London%20Marathon%202022" data-initialized="true">I want to represent #NewcastleFoundation</a></div>
            </div>
            </div>
            <div id="block-5acca3dab4803a69fbad" class="sqs-block html-block sqs-block-html" style="position: relative; height: auto; padding: 17px; clear: none; color: #4a4a4a; font-family: 'Open Sans'; font-size: 18px; letter-spacing: 0.36px; background-color: #ffffff;" data-block-type="2">
            <div class="sqs-block-content" style="outline: none;">
            <p class="" style="margin-top: 0px; margin-bottom: 0px; overflow-wrap: break-word; white-space: pre-wrap;">We will be offering these places on a first-come-first-served basis. Your place is only secured once payment of the registration fee has been made. Please <a style="background-color: transparent; color: #e7680d; text-decoration-line: none; padding-bottom: 0.05em; border-bottom: 1px solid rgba(231, 104, 13, 0.3); transition: border-color 0.15s ease-out 0s, color 0.15s ease-out 0s; overflow-wrap: break-word;" href="https://docs.google.com/forms/d/e/1FAIpQLSembNxdwco-IynGPj7Z76rdvA4AXLTFFxclKPXvxjZ6lnsziQ/viewform">click</a><a style="background-color: transparent; color: #e7680d; text-decoration-line: none; padding-bottom: 0.05em; border-bottom: 1px solid rgba(231, 104, 13, 0.3); transition: border-color 0.15s ease-out 0s, color 0.15s ease-out 0s; overflow-wrap: break-word;" href="mailto:tamsyn@africanchildrensfund.org?subject=I%20want%20to%20represent%20%23TeamACF%20-%20Virtual%20TCS%20London%20Marathon%202022"> </a><a style="background-color: transparent; color: #e7680d; text-decoration-line: none; padding-bottom: 0.05em; border-bottom: 1px solid rgba(231, 104, 13, 0.3); transition: border-color 0.15s ease-out 0s, color 0.15s ease-out 0s; overflow-wrap: break-word;" href="https://docs.google.com/forms/d/e/1FAIpQLSembNxdwco-IynGPj7Z76rdvA4AXLTFFxclKPXvxjZ6lnsziQ/viewform">here</a> to sign up and join #TeamNCF!<br style="overflow-wrap: break-word;" /><br style="overflow-wrap: break-word;" />All entrants must be aged 18 or over on Sunday 2nd October 2022. All 26.2 miles must be completed on Sunday 3rd October and logged in the Newcastle Foundtion for your finishers&rsquo; medal and t-shirt to be sent.</p>
            </div>
            </div>
           ',

            // body end
            'user_id' => '3',
            'category_id' => '3',
        ];
    }
}
