<?php

namespace App\Http\Controllers\AdminControllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\volunteer;
use RealRashid\SweetAlert\Facades\Alert;



class AdminVolunteerController extends Controller
{
    public function index()
    {
        $volunteers = volunteer::all();
        return view('admin_dashboard.volunteer.index', compact('volunteers'));
    }

    public function destroy(volunteer $volunteer)
    {
        $volunteer->delete();

        Alert::success('success', 'volunteer has been Deleted.');
        return redirect()->route('admin.volunteer');
    }
}
