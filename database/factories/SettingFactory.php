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
            'about_text' => $this->faker->paragraph(),
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
