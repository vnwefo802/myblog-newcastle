<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\volunteer;
use App\Mail\VolunteerMail;
use Illuminate\Support\Facades\Mail;
use RealRashid\SweetAlert\Facades\Alert;


use Illuminate\Support\Facades\Validator;

class VolunteerController extends Controller
{
    public function create()
    {
        return view('volunteer');
    }



    public function store()
    {

        $data = array();
        $data['success'] = 0;
        $data['errors'] = [];
        $rules = [
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required',
            'phone_number' => 'required|number',
            'country' => 'required',
            'phone_number' => 'nullable',
        ];
        $validated = Validator::make(request()->all(), $rules);

        if($validated->fails())
        {
            $data['errors']['first_name'] = $validated->errors()->first('first_name');
            $data['errors']['last_name'] = $validated->errors()->first('last_name');
            $data['errors']['phone_number'] = $validated->errors()->first('phone_number');
            $data['errors']['country'] = $validated->errors()->first('country');
            $data['errors']['email'] = $validated->errors()->first('email');


        }
        else
        {
            $attributes = $validated->validated();
            volunteer::create($attributes);

            Mail::to( env('ADMIN_EMAIL') )->send(new VolunteerMail(
                $attributes['first_name'],
                $attributes['last_name'],
                $attributes['phone_number'],
                $attributes['country'],
                $attributes['email'],
            ));

            $data = [
                'success' => 1,
                'message' => 'Thank you for contacting us',
            ];

        }
        return response()->json($data);
    }





        // $request->validate([
        //     'first_name' => 'required|max:100|min:3',
        //     'last_name' => 'required|max:100|min:3',
        //     'email' => 'required|min:3|email',
        //     'phone_number' => 'required|numeric',
        //     'country' => 'required'
        // ]);


        // Alert::success('success','message has been sent.');


}
