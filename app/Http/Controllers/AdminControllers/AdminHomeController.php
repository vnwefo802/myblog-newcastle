<?php

namespace App\Http\Controllers\AdminControllers;

use App\Models\Donate;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class AdminHomeController extends Controller
{
    // Admin.donate.edit
    public function edit ()
    {
        $alldonate = Donate::find(1);
        
        return view('admin_dashboard.home.edit', compact('alldonate'));
    }
    // public function update(Request $request, Donate $alldonate)
    // {

        public function Update(Request $request)
        {
            $donate_id = $request->id;
    
            Donate::findOrFail($donate_id)->update([
                    'donate_title' => $request->donate_title,
            'title' => $request->title,
            'donate_second_short_title' => $request->donate_second_short_title,
            'short_title' => $request->short_title,
            'video' => $request->video,
            'button_1' => $request->button_1,
            'button_2' => $request->button_2,
            'box_title_1' => $request->box_title_1,
            'box_title_2' => $request->box_title_2,
            'box_title_3' => $request->box_title_3,
            'box_title_4' => $request->box_title_4,
            'box_short_description_1' => $request->box_short_description_1,
            'box_short_description_2' => $request->box_short_description_2,
            'box_short_description_3' => $request->box_short_description_3,
            'box_short_description_4' => $request->box_short_description_4,
            'project_title' => $request->project_title,
            'project_image' => $request->project_image,
            'project_short_title' => $request->project_short_title,
            'project_long_description' => $request->project_long_description,
            'project_button' => $request->project_button,
            'difference_title' => $request->difference_title,
            'difference_short_description' => $request->difference_short_description,
            'difference_button_1' => $request->difference_button_1,
            'difference_button_2' => $request->difference_button_2,
            'difference_image' => $request->difference_image,
                    
                ]); 

        return redirect()->route('home.edit')->with('success','Donate updated successfully');

    }
}
