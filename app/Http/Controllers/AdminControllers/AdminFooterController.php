<?php

namespace App\Http\Controllers\AdminControllers;

use App\Models\Footer;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class AdminFooterController extends Controller
{
    // Admin.footer.edit
    public function edit ()
    {
        $allfooter = Footer::find(1);
        
        return view('admin_dashboard.footer.edit', compact('allfooter'));
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
            'copyright' => $request->copyright,
            'community1' => $request->community1,
            'community2' => $request->community2,
            'community3' => $request->community3,
            'community4' => $request->community4,
            'community_link_1' => $request->community_link_1,
            'community_link_2' => $request->community_link_2,
            'community_link_3' => $request->community_link_3,
            'community_link_4' => $request->community_link_4,
            'blog1' => $request->blog1,
            'blog2' => $request->blog2,
            'blog3' => $request->blog3,
            'blog4' => $request->blog4,
            'blog5' => $request->blog5,
            'blog_link_1' => $request->blog_link_1,
            'blog_link_2' => $request->blog_link_2,
            'blog_link_3' => $request->blog_link_3,
            'blog_link_4' => $request->blog_link_4,
            'blog_link_5' => $request->blog_link_5,
            'contact1' => $request->contact1,
            'contact2' => $request->contact2,
            'contact3' => $request->contact3,
            'contact4' => $request->contact4,
            'contact5' => $request->contact5,
            'contact_link_1' => $request->contact_link_1,
            'contact_link_2' => $request->contact_link_2,
            'contact_link_3' => $request->contact_link_3,
            'contact_link_4' => $request->contact_link_4,
            'contact_link_5' => $request->contact_link_5,
                    
        ]); 

        return redirect()->route('admin.footer.edit')->with('success','Footer updated successfully');

    }
}