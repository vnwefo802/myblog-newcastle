<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VolunteerController extends Controller
{
    public function create_volunteer()
    {
        return view('volunteer');
    }

    public function store_volunteer ()
    {
            // 'first_name' => 'required',
            // 'last_name' => 'required',
            // 'email' => 'required',
            // 'phone_number' => 'required|number|max:20|min:6',
            // 'country' => 'required'
            
    }
}
