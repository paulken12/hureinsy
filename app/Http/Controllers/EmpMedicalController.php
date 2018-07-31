<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class EmpMedicalController extends Controller
{
    public function edit(User $profile) {

        return view('profiles.medical.edit',compact('profile'));
    }

    public function update(Request $request, $profile) {

        $user_med = $request->validate([

            'med_key'=>'required',

            'med_height'=>'nullable',

            'med_weight'=>'nullable',

        ]);

        $user = User::whereName($profile)->first();
        //iterate the profile to get the reference and save
        foreach ($user->basicInfo as $info) {

            foreach ($info->medical as $medical) {

                if($medical->id === (int)$user_med['med_key'])
                {
                    //comment for now - user can't edit
//                    $medical->master_blood_key = $request->input('master_blood_key');
                    $medical->height = $request->input('med_height');

                    $medical->weight = $request->input('med_weight');

                    $medical->update();
                }
            }
        }

        return back()->with($profile)->with('flash', 'Updated successfully!');
    }
}
