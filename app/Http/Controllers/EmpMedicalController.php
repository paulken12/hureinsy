<?php

namespace App\Http\Controllers;

use App\EmpBasicInfo;
use Illuminate\Http\Request;

class EmpMedicalController extends Controller
{
    public function edit(EmpBasicInfo $profile) {

        $profile = $profile->user;

        return view('profiles.medical.edit',compact('profile'));
    }

    public function update(Request $request, $profile) {

        $basic = EmpBasicInfo::whereSlug($profile)->first();

        $user_med = $request->validate([

            'med_key'=>'required',

            'med_height'=>'nullable',

            'med_weight'=>'nullable',

        ]);

        foreach ($basic->medical as $medical) {

            if($medical->id === (int)$user_med['med_key'])
            {
                //comment for now - user can't edit
//                    $medical->master_blood_key = $request->input('master_blood_key');
                $medical->height = $request->input('med_height');

                $medical->weight = $request->input('med_weight');

                $medical->update();
            }
        }

        return redirect(route('profile.me'))->with('flash', 'Updated successfully!');
    }
}
