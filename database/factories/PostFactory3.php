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
            'slug' => 'old',
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
            'user_id' => '3',
            'category_id' => '3',
        ];
    }
}
