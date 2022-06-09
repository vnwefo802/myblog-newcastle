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

        public function Update(Request $request)
        {
            $allhome_id = 1;

            $file1 = $request->file('difference_image');
            $file2 = $request->file('logo');
            $file3 = $request->file('favicon');



            $updater = [
            'title' => $request->title,
            'video' => $request->video,
            'button_1' => $request->button_1,
            'button_2' => $request->button_2,
            'box_title_1' => $request->box_title_1,
            'box_title_2' => $request->box_title_2,
            'box_title_3' => $request->box_title_3,
            'box_title_4' => $request->box_title_4,
            'project_title' => $request->project_title,
            'project_image' => $request->project_image,
            'project_short_title' => $request->project_short_title,
            'project_button' => $request->project_button,
            'difference_title' => $request->difference_title,
            'difference_button_1' => $request->difference_button_1,
            'difference_button_2' => $request->difference_button_2,
            //'difference_image' => $request->difference_image,
            //'logo' => $request->logo,
            // 'favicon' => $request->favicon,

        ];


            $validated = request()->validate([
                'title'=> 'required|min:10',
            'video' => 'required',
            'button_1' => 'required|min:4',
            'button_2' => 'required|min:4',
            'box_title_1' => 'required|min:4',
            'box_title_2' => 'required|min:4',
            'box_title_3' => 'required|min:4',
            'box_title_4' => 'required|min:4',

            'project_title' => 'required|min:4',
            'project_image' => 'nullable|image',
            'project_short_title' => 'required|min:25',
            'project_button' => 'required|min:4',
            'difference_title' => 'required|min:24',
            'difference_button_1' => 'required|min:4',
            'difference_button_2' => 'required|min:4',
            'difference_image' => 'nullable|image',
            'logo' => 'nullable|image',
            'favicon' => 'nullable|image',
            ]);
            Home::find(1)->update($validated);


        $filesToUpload = [];


        if ($file1 != null) {
            $filesToUpload += ['difference_image' => 'storage/setting/' . $file1->hashName()];
        }

        if ($file2 != null) {
            $filesToUpload += ['logo' => 'storage/setting/' . $file2->hashName()];
        }

        if ($file3 != null) {
            $filesToUpload += ['favicon' => 'storage/setting/' . $file3->hashName()];
        }


        Home::findOrFail($allhome_id)->update($updater += $filesToUpload);


            if(request()->has('difference_image'))
            {
                $difference_image = request()->file('difference_image');
                $path = $difference_image->store('setting', 'public');
                $validated['difference_image'] = $path;
            }

            if(request()->has('logo'))
            {
                $logo = request()->file('logo');
                $path = $logo->store('setting', 'public');
                $validated['logo'] = $path;
            }


            if(request()->has('favicon'))
            {
                $favicon = request()->file('favicon');
                $path = $favicon->store('setting', 'public');
                $validated['favicon'] = $path;
            }





           //sweetalert
        Alert::success('success','Home updated successfully');

        return redirect()->route('admin.home.edit');

    }
}
