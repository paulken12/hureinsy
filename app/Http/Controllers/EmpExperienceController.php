<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class EmpExperienceController extends Controller
{
    public function edit(User $profile) {

        return view('profiles.experience.edit',compact('profile'));

    }

    public function update(Request $request, $profile) {

        $user_exp = $request->validate(
            [
                'exp_key'=>'required',
                'exp_company_name'=>'nullable',
                'exp_company_address'=>'nullable',
                'exp_date_from'=>'nullable',
                'exp_date_to'=>'nullable',
                'exp_industry'=>'nullable',
                'exp_salary'=>'nullable',
                'exp_reason_for_leaving'=>'nullable',
            ]
        );

        //using the for loop
        // if the client request to update the data at the same time
        //we just need to replace the update button to single button in the view
        for($i=0; $i < count($user_exp['exp_key']); ++$i ) {

            //get the user using the profile name
            $user = User::whereName($profile)->first();

            //iterate the profile to get the data and save
            foreach ($user->basicInfo as $info) {

                //iterate the relationship
                foreach ($info->experience as $experience) {

                    //if the database id is equal to the hidden input id
                    if($experience->id === (int)$user_exp['exp_key'][$i]) {

                        //update the database
                        $experience->company_name = $request->input('exp_company_name')[$i];

                        $experience->company_address = $request->input('exp_company_address')[$i];

                        $experience->date_from = $request->input('exp_date_from')[$i];

                        $experience->date_to = $request->input('exp_date_to')[$i];

                        $experience->industry = $request->input('exp_industry')[$i];

                        $experience->salary = $request->input('exp_salary')[$i];

                        $experience->reason_for_leaving = $request->input('exp_reason_for_leaving')[$i];

                        $experience->update();
                    }
                }
            }
        }

        return back()->with($profile)->with('flash', 'Updated successfully!');
    }
}
