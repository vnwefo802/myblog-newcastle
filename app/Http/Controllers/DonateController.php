<?php

namespace App\Http\Controllers;

use App\Models\Donate;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class DonateController extends Controller
{
    public function donate()
    {
        $alldonate = Donate::findOrFail(1);
        return view('donate', compact('alldonate'));
    }
}
