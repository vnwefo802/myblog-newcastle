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
            $home_id = 1;

            Home::findOrFail($home_id)->update([
            'title' => $request->title,
            'video' => $request->video,
            'button_1' => $request->button_1,
            'button_2' => $request->button_2,
            'box_title_1' => $request->box_title_1,
            'box_title_1' => $request->box_title_2,
            'box_title_3' => $request->box_title_3,
            'box_title_4' => $request->box_title_4,
            'box_short_description_1' => $request->box_short_description_1,
            'box_short_description_2' => $request->box_short_description_2,
            'box_short_description_3' => $request->box_short_description_3,
            'box_short_description_4' => $request->box_short_description_4,
            'project_title' => $request->project_title,
            'project_image' => $request->project_image,
            'project_short_title' => $request->project_short_title,
            'project_button' => $request->project_button,
            'difference_title' => $request->difference_title,
            'difference_button_1' => $request->difference_button_1,
            'difference_button_2' => $request->difference_button_2,
            'difference_image' => $request->difference_image,
            // 'Logo' => $request->Logo,

                ]);

                      //sweetalert
        Alert::success('success','Home updated successfully');
        return redirect()->route('admin.home.edit');

    }
}
