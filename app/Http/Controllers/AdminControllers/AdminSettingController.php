<?php

namespace App\Http\Controllers\AdminControllers;

use App\Models\Setting;
use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;

class AdminSettingController extends Controller
{
    public function edit()
    {
        $allabout = Setting::find(1);

        return view('admin_dashboard.about.edit', compact('allabout'));

    }

    public function update(Request $request)
    {

        $about_id = 1;
        Setting::findOrFail($about_id)->update([
         'about_text' => $request->about_text,
        'about_our_vision' => $request->about_our_vision,
        'about_our_mission' => $request->about_our_mission,
        'about_first_member_name' => $request->about_first_member_name,
        'about_second_member_name' => $request->about_second_member_name,
        'about_third_member_name' => $request->about_third_member_name,
        'about_fourth_member_name' => $request->about_fourth_member_name,
        'about_fifth_member_name' => $request->about_fifth_member_name,
            ]);



        // $validated = request()->validate([
        //     'about_first_text' => 'required|min:50,max:500',
        //     'about_second_text' => 'required|min:50,max:500',
        //     'about_our_vision' => 'required',
        //     'about_our_mission' => 'required',
        //     'about_services' => 'required',
        //     'about_first_image' => 'nullable|image',
        //     'about_second_image' => 'nullable|image',
        // ]);



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


        // Setting::find(1)->update($validated);
          //sweetalert
          Alert::success('success','About updated successfully');
        return redirect()->route('admin.setting.edit')->with('success', 'Setting has been Updated.');
    }
}
