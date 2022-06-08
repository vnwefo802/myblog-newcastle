<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\volunteer;
use RealRashid\SweetAlert\Facades\Alert;


class VolunteerController extends Controller
{
    public function create_volunteer()
    {
        return view('volunteer');
    }



    public function store_volunteer (Request $request)
    {
        $request->validate([
            'first_name' => 'required|max:100|min:3',
            'last_name' => 'required|max:100|min:3',
            'email' => 'required|min:3|email',
            'phone_number' => 'required|numeric',
            'country' => 'required'
        ]);

        volunteer::create($request->all());

        Alert::success('success','message has been sent.');
        return redirect()->route('volunteer.create');

    }

}
