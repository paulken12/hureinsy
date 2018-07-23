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
            'key'=>'required|numeric',
            'first_name'=>'required',
            'last_name'=>'required',
            'middle_name'=>'nullable',
            'contact_num'=>'required',
        ]);

        $user = User::whereName($profile)->first();
        //iterate the profile to get the emergency contact and save
        foreach ($user->basicInfo as $info) {
            foreach ($info->emergency as $emergency) {

                if($emergency->id === (int)$user_eme['key'])
                {
                    $emergency->first_name = $request->input('first_name');
                    $emergency->last_name = $request->input('last_name');
                    $emergency->middle_name = $request->input('middle_name');
                    $emergency->contact_num = $request->input('contact_num');

                    $emergency->update();
                }
            }
        }

        return back()->with($profile)->with('flash', 'Updated successfully!');
    }
}
