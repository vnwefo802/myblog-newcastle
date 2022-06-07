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

     // public function update(Request $request, Footer $allfooter)
    // {

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

        ]);

          //sweetalert
          Alert::success('success','Footer updated successfully');
        return redirect()->route('admin.footer.edit');

    }
}
