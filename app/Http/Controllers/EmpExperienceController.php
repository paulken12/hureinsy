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
                'key'=>'required|numeric',
                'company_name'=>'nullable',
                'company_address'=>'nullable',
                'date_from'=>'nullable|date',
                'date_to'=>'nullable|date',
                'industry'=>'nullable',
                'salary'=>'nullable',
                'reason_for_leaving'=>'nullable',
            ]
        );

        $user = User::whereName($profile)->first();
        //iterate the profile to get the experience and save
        foreach ($user->basicInfo as $info) {
            foreach ($info->experience as $experience) {
                if($experience->id === (int)$user_exp['key'])
                {
                    $experience->company_name = $request->input('company_name');
                    $experience->company_address = $request->input('company_address');
                    $experience->date_from = $request->input('date_from');
                    $experience->date_to = $request->input('date_to');
                    $experience->industry = $request->input('industry');
                    $experience->salary = $request->input('salary');
                    $experience->reason_for_leaving = $request->input('reason_for_leaving');
                    $experience->update();
                }
            }
        }

        return back()->with($profile)->with('flash', 'Updated successfully!');
    }
}
