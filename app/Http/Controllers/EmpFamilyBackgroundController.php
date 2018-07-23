<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class EmpFamilyBackgroundController extends Controller
{
    public function edit(User $profile) {
        return view('profiles.family.edit',compact('profile'));
    }

    public function update(Request $request,$profile) {

        $user_fam = $request->validate([
            'key'=>'required|numeric',
//                      comment for now
//            'last_name'=>'required',
//            'first_name'=>'required',
//            'date_of_birth'=>'nullable',
//            'master_gender_key'=>'required',
            'employer'=>'nullable',
            'occupation'=>'nullable',
        ]);

        $user = User::whereName($profile)->first();
        //iterate the profile to get the address and save
        foreach ($user->basicInfo as $info) {
            foreach ($info->family as $family) {
                if($family->id === (int)$user_fam['key'])
                {
//                      comment for now
//                    $family->last_name = $request->last_name;
//                    $family->first_name = $request->first_name;
//                    $family->date_of_birth = $request->date_of_birth;
//                    $family->master_gender_key = $request->master_gender_key;
                    $family->employer = $request->employer;
                    $family->occupation = $request->occupation;
                    $family->update();
                }
            }
        }

        return back()->with($profile);
    }
}
