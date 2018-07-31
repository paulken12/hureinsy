<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class EmpEducationController extends Controller
{
    public function edit(User $profile) {
        return view('profiles.education.edit', compact('profile'));
    }

    public function update(Request $request, $profile) {

        $user_edu = $request->validate([
            'edu_key'=>'required',
            'edu_course'=>'nullable',
            'edu_name_of_school'=>'nullable',
            'edu_year_graduated'=>'nullable',
            'edu_award'=>'nullable',
        ]);

        //using the for loop
        // if the client request to update the education at the same time
        //we just need to replace the update button to single button in the view
        for($i=0; $i < count($user_edu['edu_key']); ++$i ) {

            //get the user using the profile name
            $user = User::whereName($profile)->first();

            //iterate the profile to get the education and save
            foreach ($user->basicInfo as $info) {

                //iterate the relationship
                foreach ($info->education as $education) {

                    //if the database id is equal to the hidden input id
                    if($education->id === (int)$user_edu['edu_key'][$i]) {

                        //update the database
                        $education->course = $request->input('edu_course')[$i];

                        $education->name_of_school = $request->input('edu_name_of_school')[$i];

                        $education->year_graduated = $request->input('edu_year_graduated')[$i];

                        $education->award = $request->input('edu_award')[$i];

                        $education->update();
                    }
                }
            }
        }

        return back()->with($profile)->with('flash', 'Updated successfully!');
    }
}
