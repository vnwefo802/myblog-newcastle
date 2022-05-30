<?php

namespace App\Http\Controllers;

use App\Models\ContactMessage;
use Illuminate\Support\Carbon;
use Illuminate\Http\Request;

class ContactMessageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function contactmgs()
    {
        $contactmgs = ContactMessage::latest()->paginate(5);
        return view('Admin.contact_message.contact_message',compact('contactmgs'))
        ->with('i', (request()->input('page', 1) - 1) * 5);
    }// end mehtod

    public function StoreMessage(Request $request){
        $this->validate($request,[
            'name' => 'required|max:20|min:3',
            'phone_num' => 'required|max:15|min:10',
            'email' => 'required|min:3|email',
            'message' => 'required|max:180|min:3|string',
            'Country' => 'required|min:2|max:20',

        ]);
        
        ContactMessage::insert([

            'name' => $request->name,
            'email' => $request->email,
            'phone_num' => $request->phone_num,
            'Country' => $request->Country,
            'message' => $request->message,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),

        ]);

        return redirect()->back()->with('success', 'Your Message Submited Successfully');
    } // end mehtod


    public function showMessage( $id)
    {
        $contactmgs = ContactMessage::find($id);

        return view('Admin.contactmessage.show', compact('contactmgs'));
    }

    public function DeleteMessage($id){

        ContactMessage::findOrFail($id)->delete();


           return redirect()->route('admin.contactmgs')->with('success', 'deleted succcessfuly');
       } // end mehtod
}
