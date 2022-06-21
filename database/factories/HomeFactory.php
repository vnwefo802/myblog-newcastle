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
            'video'=>'',
            'button_1'=>'Volunteer',
            'button_2'=>'Donate',

            // box_title_1
            'box_title_1'=>'<h2 class="mb-2 text-lg font-semibold leading-5" style="box-sizing: border-box; --tw-translate-x: 0; --tw-translate-y: 0; --tw-rotate: 0; --tw-skew-x: 0; --tw-skew-y: 0; --tw-scale-x: 1; --tw-scale-y: 1; --tw-scroll-snap-strictness: proximity; --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgb(59 130 246 / 0.5); --tw-ring-offset-shadow: 0 0 #0000; --tw-ring-shadow: 0 0 #0000; --tw-shadow: 0 0 #0000; --tw-shadow-colored: 0 0 #0000; font-size: 1.125rem; margin: 0px 0px 0.5rem; line-height: 1.25rem; font-family: ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont background-color: #ffffff; border: 0px solid #e5e7eb;">Identify</h2>
            <p class="mb-3 text-lg text-gray-900" style="box-sizing: border-box; --tw-translate-x: 0; --tw-translate-y: 0; --tw-rotate: 0; --tw-skew-x: 0; --tw-skew-y: 0; --tw-scale-x: 1; --tw-scale-y: 1; --tw-scroll-snap-strictness: proximity; --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgb(59 130 246 / 0.5); --tw-ring-offset-shadow: 0 0 #0000; --tw-ring-shadow: 0 0 #0000; --tw-shadow: 0 0 #0000; --tw-shadow-colored: 0 0 #0000; margin: 0px 0px 0.75rem; font-size: 1.125rem; line-height: 1.75rem; --tw-text-opacity: 1; color: rgb(17 24 39 / var(--tw-text-opacity)); font-family: ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont,  background-color: #ffffff; border: 0px solid #e5e7eb;">To identify communities with health and educational gaps and try to fill them.</p>',

            // box_title_2
            'box_title_2'=>'<h3 class="mb-2 text-lg font-semibold leading-5" style="box-sizing: border-box; --tw-translate-x: 0; --tw-translate-y: 0; --tw-rotate: 0; --tw-skew-x: 0; --tw-skew-y: 0; --tw-scale-x: 1; --tw-scale-y: 1; --tw-scroll-snap-strictness: proximity; --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgb(59 130 246 / 0.5); --tw-ring-offset-shadow: 0 0 #0000; --tw-ring-shadow: 0 0 #0000; --tw-shadow: 0 0 #0000; --tw-shadow-colored: 0 0 #0000; font-size: 1.125rem; margin: 0px 0px 0.5rem; line-height: 1.25rem; font-family: ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont,  Roboto,  Arial,  sans-serif,   background-color: #ffffff; border: 0px solid #e5e7eb;">Support Communities</h3>
            <p class="mb-3 text-lg text-gray-900" style="box-sizing: border-box; --tw-translate-x: 0; --tw-translate-y: 0; --tw-rotate: 0; --tw-skew-x: 0; --tw-skew-y: 0; --tw-scale-x: 1; --tw-scale-y: 1; --tw-scroll-snap-strictness: proximity; --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgb(59 130 246 / 0.5); --tw-ring-offset-shadow: 0 0 #0000; --tw-ring-shadow: 0 0 #0000; --tw-shadow: 0 0 #0000; --tw-shadow-colored: 0 0 #0000; margin: 0px 0px 0.75rem; font-size: 1.125rem; line-height: 1.75rem; --tw-text-opacity: 1; color: rgb(17 24 39 / var(--tw-text-opacity)); font-family: ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont,  Roboto,  Arial,  sans-serif,     background-color: #ffffff; border: 0px solid #e5e7eb;">To support identifed communities though training of indigenous teachers and community health workers.</p>',

            // box_title_3
            'box_title_3'=>'<h3 class="mb-2 text-lg font-semibold leading-5" style="box-sizing: border-box; --tw-translate-x: 0; --tw-translate-y: 0; --tw-rotate: 0; --tw-skew-x: 0; --tw-skew-y: 0; --tw-scale-x: 1; --tw-scale-y: 1; --tw-scroll-snap-strictness: proximity; --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgb(59 130 246 / 0.5); --tw-ring-offset-shadow: 0 0 #0000; --tw-ring-shadow: 0 0 #0000; --tw-shadow: 0 0 #0000; --tw-shadow-colored: 0 0 #0000; font-size: 1.125rem; margin: 0px 0px 0.5rem; line-height: 1.25rem; font-family: ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont, , Roboto,  Arial,  sans-serif,  background-color: #ffffff; border: 0px solid #e5e7eb;">Support Schools</h3>
            <p class="mb-3 text-lg text-gray-900" style="box-sizing: border-box; --tw-translate-x: 0; --tw-translate-y: 0; --tw-rotate: 0; --tw-skew-x: 0; --tw-skew-y: 0; --tw-scale-x: 1; --tw-scale-y: 1; --tw-scroll-snap-strictness: proximity; --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgb(59 130 246 / 0.5); --tw-ring-offset-shadow: 0 0 #0000; --tw-ring-shadow: 0 0 #0000; --tw-shadow: 0 0 #0000; --tw-shadow-colored: 0 0 #0000; margin: 0px 0px 0.75rem; font-size: 1.125rem; line-height: 1.75rem; --tw-text-opacity: 1; color: rgb(17 24 39 / var(--tw-text-opacity)); font-family: ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont,  Roboto,  Arial,  sans-serif, background-color: #ffffff; border: 0px solid #e5e7eb;">To support primary and secondary schools by providing sprimary and secondary level educational materials.</p>',


// box_title_4
            'box_title_4'=>'<h3 class="mb-2 text-lg font-semibold leading-5" style="box-sizing: border-box; --tw-translate-x: 0; --tw-translate-y: 0; --tw-rotate: 0; --tw-skew-x: 0; --tw-skew-y: 0; --tw-scale-x: 1; --tw-scale-y: 1; --tw-scroll-snap-strictness: proximity; --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgb(59 130 246 / 0.5); --tw-ring-offset-shadow: 0 0 #0000; --tw-ring-shadow: 0 0 #0000; --tw-shadow: 0 0 #0000; --tw-shadow-colored: 0 0 #0000; font-size: 1.125rem; margin: 0px 0px 0.5rem; line-height: 1.25rem; font-family: ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont,  Roboto,  Arial,  sans-serif,  background-color: #ffffff; border: 0px solid #e5e7eb;">Donate</h3>
            <p class="mb-3 text-lg text-gray-900" style="box-sizing: border-box; --tw-translate-x: 0; --tw-translate-y: 0; --tw-rotate: 0; --tw-skew-x: 0; --tw-skew-y: 0; --tw-scale-x: 1; --tw-scale-y: 1; --tw-scroll-snap-strictness: proximity; --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgb(59 130 246 / 0.5); --tw-ring-offset-shadow: 0 0 #0000; --tw-ring-shadow: 0 0 #0000; --tw-shadow: 0 0 #0000; --tw-shadow-colored: 0 0 #0000; margin: 0px 0px 0.75rem; font-size: 1.125rem; line-height: 1.75rem; --tw-text-opacity: 1; color: rgb(17 24 39 / var(--tw-text-opacity)); font-family: ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont,  Roboto,  Arial,  sans-serif,  background-color: #ffffff; border: 0px solid #e5e7eb;">To donate vital<span style="color: rgb(17 24 39 / var(--tw-text-opacity)); font-size: 1.125rem;">&nbsp;materials to the facilities in identified communities.</span><span style="color: rgb(17 24 39 / var(--tw-text-opacity)); font-size: 1.125rem;">&nbsp;</span></p>',






            // 'box_short_description_1'=>'Rem dicta accusantium quaerat maiores aperiam, nostrum quae ducimus recusandae at maiores aperiam, nostrum quae',
            // 'box_short_description_2'=>'Our training courses also provide an enhancement your current career path opportunity for progression.',
            // 'box_short_description_3'=>"If you're feeling unfulfilled in your current role, our training courses provide the perfect opportunity for you.",
            // 'box_short_description_4'=>'including your hobbies can add a lot of value, so why not improve the quality of your hobby by taking our course in it?',
            'project_title'=>'One of our projects',
            'project_image'=>'',

            // project_short_title
            'project_short_title'=>'<h3 class="text-lg font-semibold" style="box-sizing: border-box; --tw-translate-x: 0; --tw-translate-y: 0; --tw-rotate: 0; --tw-skew-x: 0; --tw-skew-y: 0; --tw-scale-x: 1; --tw-scale-y: 1; --tw-scroll-snap-strictness: proximity; --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgb(59 130 246 / 0.5); --tw-ring-offset-shadow: 0 0 #0000; --tw-ring-shadow: 0 0 #0000; --tw-shadow: 0 0 #0000; --tw-shadow-colored: 0 0 #0000; font-size: 1.125rem; margin: 0px; line-height: 1.75rem; font-family: ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont,  Roboto,  Arial,  sans-serif,  background-color: #ffffff; border: 0px solid #e5e7eb;">The Agudele Project</h3>
            <p class="text-lg my-9" style="box-sizing: border-box; --tw-translate-x: 0; --tw-translate-y: 0; --tw-rotate: 0; --tw-skew-x: 0; --tw-skew-y: 0; --tw-scale-x: 1; --tw-scale-y: 1; --tw-scroll-snap-strictness: proximity; --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgb(59 130 246 / 0.5); --tw-ring-offset-shadow: 0 0 #0000; --tw-ring-shadow: 0 0 #0000; --tw-shadow: 0 0 #0000; --tw-shadow-colored: 0 0 #0000; margin: 2.25rem 0px; font-size: 1.125rem; line-height: 1.75rem; font-family: ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont,  Roboto,  Arial,  sans-serif,  background-color: #ffffff; border: 0px solid #e5e7eb;">In the community at Agudene in Udenu LGA of Nsukka, Enugu State, we provided over 50 plus classroom desks. Used text books, exercise books, including school drum set, school bags, uniforms for both junior and senior primary. We included a scholarship fund for the girl child. These motivated the villagers and the other villages in the locality to release their girls and wards to come to school.</p>',

            'project_button'=>'Find out more',

            // difference_title
            'difference_title'=>'<h2 class="text-3xl font-semibold lg:w-10/12" style="box-sizing: border-box; --tw-translate-x: 0; --tw-translate-y: 0; --tw-rotate: 0; --tw-skew-x: 0; --tw-skew-y: 0; --tw-scale-x: 1; --tw-scale-y: 1; --tw-scroll-snap-strictness: proximity; --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgb(59 130 246 / 0.5); --tw-ring-offset-shadow: 0 0 #0000; --tw-ring-shadow: 0 0 #0000; --tw-shadow: 0 0 #0000; --tw-shadow-colored: 0 0 #0000; font-size: 1.875rem; margin: 0px; line-height: 2.25rem; color: #ffffff; font-family: ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont, Roboto,  Arial,  sans-serif,  border: 0px solid #e5e7eb;">Make a Difference</h2>
            <p class="py-6 text-lg" style="box-sizing: border-box; --tw-translate-x: 0; --tw-translate-y: 0; --tw-rotate: 0; --tw-skew-x: 0; --tw-skew-y: 0; --tw-scale-x: 1; --tw-scale-y: 1; --tw-scroll-snap-strictness: proximity; --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgb(59 130 246 / 0.5); --tw-ring-offset-shadow: 0 0 #0000; --tw-ring-shadow: 0 0 #0000; --tw-shadow: 0 0 #0000; --tw-shadow-colored: 0 0 #0000; margin: 0px; padding-top: 1.5rem; padding-bottom: 1.5rem; font-size: 1.125rem; line-height: 1.75rem; color: #ffffff; font-family: ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont,  Roboto,  Arial,  sans-serif,  font-weight: 400; border: 0px solid #e5e7eb;">If youre looking for random facts, youve arrived at the correct webpage. The Random Fact Generator has thousands of facts ready to be revealed with a simple click of a mouse.</p>',

            'difference_button_1'=>'Volunteer',
            'difference_button_2'=>'Donate',
            'difference_image'=>'storage/setting/kidsinschool.jpg',
            'logo'=>'storage/setting/NewcastleLogo.png',
            'favicon'=>'storage/setting/Newcastle-FoundationLogo.jpg',

        ];
    }
}
