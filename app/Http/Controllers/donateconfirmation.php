<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Footer;
use App\Models\Home;

class donateconfirmation extends Controller
{
    public function donateconfirmation()
    {


        $allhome = Home::find(1);

        return view('donateconfirmation');

    }
}
