<?php

namespace App\Http\Controllers;

use App\EmpContactInfo;
use Illuminate\Http\Request;
use App\User;

class EmpContactInfoController extends Controller
{
    public function edit(User $profile) {

        return view('profiles.contact.edit',compact('profile'));
    }

    public function update(Request $request, $profile) {

        //validate the fields from the server side
        $request->validate([
            'telephone_num' => 'nullable|numeric',
            'mobile_num' => 'nullable|numeric',
            'other_mobile' => 'nullable|numeric',
            'email' => 'required|email|unique:users,email,'.auth()->user()->id
        ]);

        //get the profile
       $user = User::whereName($profile)->first();

       //iterate the profile to get the contact and save
        foreach ($user->basicInfo as $info) {
            foreach ($info->contact as $contact) {
                $contact->telephone_num = $request->telephone_num;
                $contact->mobile_num = $request->mobile_num;
                $contact->other_mobile = $request->other_mobile;
                $contact->save();
           }
       }

        //if the input field == the email return
        //if not save the new email --------------> soon to be send an verification
        if($user->email != $request->email) {
            $user->email = $request->email;
            $user->save();
        }

        return back();
    }
}
