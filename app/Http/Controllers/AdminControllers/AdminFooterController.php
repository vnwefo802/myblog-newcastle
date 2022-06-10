<?php

namespace App\Http\Controllers\AdminControllers;

use App\Models\Footer;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use RealRashid\SweetAlert\Facades\Alert;


class AdminFooterController extends Controller
{
    // Admin.footer.edit
    public function edit ()
    {
        $footer = Footer::find(1);

        return view('admin_dashboard.footer.edit', compact('footer'));
    }


        public function Update(Request $request)
        {

            $footer_id = 1;
            Footer::findOrFail($footer_id)->update([
            'title' => $request->title,
            'facebook' => $request->facebook,
            'twitter' => $request->twitter,
            'instagram' => $request->instagram,
            'youtube' => $request->youtube,
            'blog_section' => $request->blog_section,
            'community_section' => $request->community_section,
            'contact_us_section' => $request->contact_us_section,
            'email' => $request->email,
            'contact_info' => $request->contact_info,

        ]);

        $validated = request()->validate([
            'title'=> 'required|min:10,max:500',
        'facebook' => 'required|min:4,max:800',
        'twitter' => 'required|min:4,max:800',
        'instagram' => 'required|min:4,max:800',
        'youtube' => 'required|min:4,max:800',
        'blog_section' => 'required|min:4,max:800',
        'community_section' => 'required|min:4,max:800',
        'contact_us_section' => 'required|min:4,max:800',
        'email' => 'required|min:4,max:35',
        'contact_info' => 'required|numeric|min:8',


        ]);

        Footer::find(1)->update($validated);

          //sweetalert
          Alert::success('success','Footer updated successfully');
        return redirect()->route('admin.footer.edit');

    }
}
