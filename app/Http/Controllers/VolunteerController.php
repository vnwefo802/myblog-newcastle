<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VolunteerController extends Controller
{
    public function volunteer()
    {
        return view('volunteer.volunteer');
    }
}
