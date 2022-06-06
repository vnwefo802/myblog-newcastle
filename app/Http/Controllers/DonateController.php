<?php

namespace App\Http\Controllers;

use App\Models\Donate;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

// use App\Utils\Drive;
// use DirectoryIterator;
// use RecursiveDirectoryIterator;
// use RecursiveIteratorIterator;
// use ZipArchive;

class DonateController extends Controller
{
    public function donate()
    {
        $alldonate = Donate::findOrFail(1);
        return view('donate', compact('alldonate'));
    }

    // public function donationForm( Request $request ){
    //     $info = [];
    //     return view( 'donation.form', $info );
    // }

    // public function donationSuccess( Request $request ){
    //     dump( "Donation Success" );
    //     dd( $request->all() );
    // }

    // public function donationCancelled( Request $request ){
    //     dump( "Donation Cancelled" );
    //     dd( $request->all() );
    // }

    // public function donationNotify( Request $request ){
    //     dump( "Donation Notify" );
    //     dd( $request->all() );
    // }
}
