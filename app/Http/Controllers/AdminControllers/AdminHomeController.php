<?php

namespace App\Http\Controllers\AdminControllers;

use App\Models\Home;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use RealRashid\SweetAlert\Facades\Alert;


class AdminHomeController extends Controller
{
    // Admin.home.edit
    public function edit ()
    {
        $allhome = Home::find(1);

        return view('admin_dashboard.home.edit', compact('allhome'));
    }
    // public function update(Request $request, Home $allhome)
    // {

        public function Update(Request $request)
        {

            $validated = request()->validate([
                'title'=> 'required|min:10,max:500',
            'video' => 'required',
            'button_1' => 'required|min:4,max:150',
            'button_2' => 'required|min:4,max:150',
            'box_title_1' => 'required|min:4,max:800',
            'box_title_1' => 'required|min:4,max:800',
            'box_title_3' => 'required|min:4,max:800',
            'box_title_4' => 'required|min:4,max:800',
            'box_short_description_1' => 'required|min:4,max:800',
            'box_short_description_2' => 'required|min:4,max:800',
            'box_short_description_3' => 'required|min:4,max:800',
            'box_short_description_4' => 'required|min:4,max:800',
            'project_title' => 'required|min:4,max:800',
            'project_image' => 'nullable|image',
            'project_short_title' => 'required|min:4,max:800',
            'project_button' => 'required|min:4,max:800',
            'difference_title' => 'required|min:4,max:800',
            'difference_button_1' => 'required|min:4,max:800',
            'difference_button_2' => 'required|min:4,max:800',
            'difference_image' => 'nullable|image',
            'logo' => 'nullable|image',
            'favicon' => 'nullable|image',
            ]);


            if(request()->has('about_first_image'))
            {
                $project_image = request()->file('project_image');
                $path = $project_image->store('setting', 'public');
                $validated['project_image'] = $path;
            }
    
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
    
            Home::find(1)->update($validated);


            // $home_id = 1;

            // Home::findOrFail($home_id)->update([
            // 'title' => $request->title,
            // 'video' => $request->video,
            // 'button_1' => $request->button_1,
            // 'button_2' => $request->button_2,
            // 'box_title_1' => $request->box_title_1,
            // 'box_title_1' => $request->box_title_2,
            // 'box_title_3' => $request->box_title_3,
            // 'box_title_4' => $request->box_title_4,
            // 'box_short_description_1' => $request->box_short_description_1,
            // 'box_short_description_2' => $request->box_short_description_2,
            // 'box_short_description_3' => $request->box_short_description_3,
            // 'box_short_description_4' => $request->box_short_description_4,
            // 'project_title' => $request->project_title,
            // 'project_image' => $request->project_image,
            // 'project_short_title' => $request->project_short_title,
            // 'project_button' => $request->project_button,
            // 'difference_title' => $request->difference_title,
            // 'difference_button_1' => $request->difference_button_1,
            // 'difference_button_2' => $request->difference_button_2,
            // 'difference_image' => $request->difference_image,
            // 'logo' => 'nullable|image',
            // 'favicon' => 'nullable|image',

            //     ]);

                      //sweetalert
        Alert::success('success','Home updated successfully');
        return redirect()->route('admin.home.edit');

    }
}
