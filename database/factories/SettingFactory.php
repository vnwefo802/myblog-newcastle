<?php

namespace Database\Factories;

use App\Models\Setting;
use Illuminate\Database\Eloquent\Factories\Factory;

class SettingFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Setting::class;

    public function definition()
    {
        return [
            // about_text
            'about_text' => '<h3 class="py-10 ml-4 text-4xl font-bold leading-6 text-gray-900" style="box-sizing: border-box; --tw-translate-x: 0; --tw-translate-y: 0; --tw-rotate: 0; --tw-skew-x: 0; --tw-skew-y: 0; --tw-scale-x: 1; --tw-scale-y: 1; --tw-scroll-snap-strictness: proximity; --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgb(59 130 246 / 0.5); --tw-ring-offset-shadow: 0 0 #0000; --tw-ring-shadow: 0 0 #0000; --tw-shadow: 0 0 #0000; --tw-shadow-colored: 0 0 #0000; font-size: 2.25rem; margin: 0px 0px 0px 1rem; padding-top: 2.5rem; padding-bottom: 2.5rem; line-height: 1.5rem; --tw-text-opacity: 1; color: rgb(17 24 39 / var(--tw-text-opacity)); font-family: ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont,  Roboto,  Arial,  sans-serif,  background-color: #e5e7eb; border: 0px solid #e5e7eb;">About Us</h3>
            <p class="px-4 mt-6 font-semibold leading-6 text-gray-700 text-l" style="box-sizing: border-box; --tw-translate-x: 0; --tw-translate-y: 0; --tw-rotate: 0; --tw-skew-x: 0; --tw-skew-y: 0; --tw-scale-x: 1; --tw-scale-y: 1; --tw-scroll-snap-strictness: proximity; --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgb(59 130 246 / 0.5); --tw-ring-offset-shadow: 0 0 #0000; --tw-ring-shadow: 0 0 #0000; --tw-shadow: 0 0 #0000; --tw-shadow-colored: 0 0 #0000; margin: 1.5rem 0px 0px; padding-left: 1rem; padding-right: 1rem; font-weight: 600; line-height: 1.5rem; --tw-text-opacity: 1; color: rgb(55 65 81 / var(--tw-text-opacity)); font-family: ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont,  Roboto,  Arial,  sans-serif, background-color: #e5e7eb; border: 0px solid #e5e7eb;">We engage in ceaseless and coordinated efforts to improve the living standard and dignity of significantly marginalised rural and urban dwellers. We believe and are committed to the welfare and equal opportunity of communities that have lagged far behind in educational and health infrastructure. We leverage on collaborations and partnership with other organisations and individuals who share our values of dignified living, mutual opportunity and welfare for community dwellers. We have been around for ten years but got duly registered on November 2019. We have consistently used our outreaches to bring medical intervention in these areas by bringing in medical consultants in different areas of general medicine, gynaecology, ophthalmology. Our volunteer specialists prescribe and administer drugs and also refer to higher levels of care if the cases cannot be handled in the days we are in the community.</p>',

            'about_first_image' => 'setting/about-img-1.jpg',
            'about_second_image' => 'setting/about-img-2.jpg',
            'about_third_image'=> 'setting/about-img-3.jpg',
            'about_fourth_image'=> 'setting/about-img-4.jpg',
            'about_fifth_image'=> 'setting/about-img-5.jpg',
            'about_our_vision' => $this->faker->paragraph(),
            'about_our_mission' => $this->faker->paragraph(),



            'about_first_member_name' => $this->faker->paragraph(),
            'about_second_member_name' => $this->faker->paragraph(),
            'about_third_member_name' => $this->faker->paragraph(),
            'about_fourth_member_name' => $this->faker->paragraph(),
            'about_fifth_member_name' => $this->faker->paragraph(),


        ];
    }
}
