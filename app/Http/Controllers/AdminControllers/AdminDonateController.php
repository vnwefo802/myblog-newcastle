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


        //sweetalert
        Alert::success('success','Donate updated successfully');

        return redirect()->route('admin.donate.edit');

    }
}
