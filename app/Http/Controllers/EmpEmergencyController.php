<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class EmpEmergencyController extends Controller
{
    public function edit(User $profile) {

        return view('profiles.emergency.edit',compact('profile'));
    }

    public function update(Request $request, $profile) {

        $user_eme = $request->validate([

            'eme_key'=>'required',

            'eme_first_name'=>'required',

            'eme_last_name'=>'required',

            'eme_middle_name'=>'nullable',

            'eme_contact_num'=>'required',

        ]);

        $user = User::whereName($profile)->first();
        //iterate the profile to get the emergency contact and save
        foreach ($user->basicInfo as $info) {

            foreach ($info->emergency as $emergency) {

                if($emergency->id === (int)$user_eme['eme_key'])
                {
                    $emergency->first_name = $request->input('eme_first_name');

                    $emergency->last_name = $request->input('eme_last_name');

                    $emergency->middle_name = $request->input('eme_middle_name');

                    $emergency->contact_num = $request->input('eme_contact_num');

                    $emergency->update();
                }
            }
        }

        return back()->with($profile)->with('flash', 'Updated successfully!');
    }
}
