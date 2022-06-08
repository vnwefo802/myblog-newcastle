<?php

namespace App\Http\Controllers\AdminControllers;


use App\Models\Donate;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use RealRashid\SweetAlert\Facades\Alert;


class AdminDonateController extends Controller
{
    // Admin.donate.edit
    public function edit ()
    {
        $alldonate = Donate::find(1);

        return view('admin_dashboard.donate.edit', compact('alldonate'));
    }

        public function update(Request $request)
        {

            $donate_id = 1;
            Donate::findOrFail($donate_id)->update([
            'donate_title' => $request->donate_title,
            'donate_first_short_title' => $request->donate_first_short_title,
            'donate_second_short_title' => $request->donate_second_short_title,
            'donate_project_title' => $request->donate_project_title,
            'donate_objectives__title' => $request->donate_objectives__title,
            'donate_values_title' => $request->donate_values_title,
                ]);


        // $request->validate([
        //     'donate_title' => $request->,
        //     'donate_first_short_title' => '|max:',
        //     'donate_second_short_title' => $request->,
        //     'donate_project_title' => $request->,
        //     'donate_first_project__short_title' => $request->,
        //     'donate_second_project__short_title' => $request->,
        //     'donate_first_project__long_description' => $request->,
        //     'donate_second_project__long_description' => $request->,
        //     'donate_objectives__title' => $request->,
        //     'donate_first__Objectives__description' => $request->,
        //     'donate_second__Objectives__description' => $request->,
        //     'donate_third__Objectives__description' => $request->,
        //     'donate_fourth__Objectives__description' => $request->,
        //     'donate_fifth__Objectives__description' => $request->,
        //     'donate_sixth__Objectives__description' => $request->,
        //     'donate_values_title' => $request->,
        //     'donate_first__Values__description' => $request->,
        //     'donate_second__Values__description' => $request->,
        //     'donate_third__Values__description' => $request->,
        //     'donate_fourth__Values__description' => $request->,
        //     'donate_fifth__Values__description' => $request->,
        // ]);

        // $alldonate::find(1)->update($request->all());


        //sweetalert
        Alert::success('success','Donate updated successfully');

        return redirect()->route('admin.donate.edit');

    }
}
