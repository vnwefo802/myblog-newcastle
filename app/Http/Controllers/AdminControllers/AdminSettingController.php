<?php

namespace App\Http\Controllers\AdminControllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Setting;

class AdminSettingController extends Controller
{
    public function edit()
    {
        $setting = Setting::find(1);

        return view('admin_dashboard.about.edit', compact('setting'));

    }

    public function update()
    {

        $setting_id = 1;
        Setting::findOrFail($setting_id)->update([
                'about_text' => $request->donate_title,
        'donate_first_short_title' => $request->donate_first_short_title,
        'donate_second_short_title' => $request->donate_second_short_title,
        'donate_project_title' => $request->donate_project_title,
        'donate_objectives__title' => $request->donate_objectives__title,
        'donate_values_title' => $request->donate_values_title,


            ]);



        $validated = request()->validate([
            'about_first_text' => 'required|min:50,max:500',
            'about_second_text' => 'required|min:50,max:500',
            'about_our_vision' => 'required',
            'about_our_mission' => 'required',
            'about_services' => 'required',
            'about_first_image' => 'nullable|image',
            'about_second_image' => 'nullable|image',
        ]);



        if(request()->has('about_first_image'))
        {
            $about_first_image = request()->file('about_first_image');
            $path = $about_first_image->store('setting', 'public');
            $validated['about_first_image'] = $path;
        }

        if(request()->has('about_second_image'))
        {
            $about_second_image = request()->file('about_second_image');
            $path = $about_second_image->store('setting', 'public');
            $validated['about_second_image'] = $path;
        }


        if(request()->has('about_third_image'))
        {
            $about_second_image = request()->file('about_third_image');
            $path = $about_second_image->store('setting', 'public');
            $validated['about_third_image'] = $path;
        }

        if(request()->has('about_fourth_image'))
        {
            $about_second_image = request()->file('about_fourth_image');
            $path = $about_second_image->store('setting', 'public');
            $validated['about_fourth_image'] = $path;
        }

        if(request()->has('about_fifth_image'))
        {
            $about_second_image = request()->file('about_fifth_image');
            $path = $about_second_image->store('setting', 'public');
            $validated['about_fifth_image'] = $path;
        }


        Setting::find(1)->update($validated);
        return redirect()->route('admin.setting.edit')->with('success', 'Setting has been Updated.');
    }
}
