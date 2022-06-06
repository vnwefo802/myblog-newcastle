<?php

namespace App\Http\Controllers\AdminControllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Volunteer;


class AdminVolunteerController extends Controller
{
    public function index()
    {
        $volunteers = Volunteer::all();
        return view('admin_dashboard.volunteer.index', compact('volunteers'));
    }

    public function destroy(Volunteer $volunteer)
    {
        $volunteer->delete();
        return redirect()->route('admin.volunteer')->with('success', 'volunteer has been Deleted.');
    }
}
