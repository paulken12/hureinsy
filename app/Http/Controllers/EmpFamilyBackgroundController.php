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

            'fam_key'=>'required',

            'fam_last_name'=>'nullable',

            'fam_first_name'=>'nullable',

            'fam_date_of_birth'=>'nullable',

            'fam_gender_key'=>'required',

            'fam_employer'=>'nullable',

            'fam_occupation'=>'nullable',

        ]);

        //using the for loop
        // if the client request to update the data at the same time
        //we just need to replace the update button to single button in the view
        for($i=0; $i < count($user_fam['key']); ++$i ) {

            //get the user using the profile name
            $user = User::whereName($profile)->first();

            //iterate the profile to get the data and save
            foreach ($user->basicInfo as $info) {

                //iterate the relationship
                foreach ($info->family as $family) {

                    //if the database id is equal to the hidden input id
                    if($family->id === (int)$user_fam['key'][$i]) {

                        //update the database
                        $family->last_name = $request->input('fam_last_name')[$i];

                        $family->first_name = $request->input('fam_first_name')[$i];

                        $family->date_of_birth = $request->input('fam_date_of_birth')[$i];

                        $family->master_gender_key = $request->input('fam_gender_key')[$i];

                        $family->employer = $request->input('fam_employer')[$i];

                        $family->occupation = $request->input('fam_occupation')[$i];

                        $family->update();
                    }
                }
            }
        }

        return back()->with($profile)->with('flash', 'Updated successfully!');
    }
}
