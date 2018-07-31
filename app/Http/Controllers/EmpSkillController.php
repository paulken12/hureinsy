<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class EmpSkillController extends Controller
{
    public function edit(User $profile) {

        return view('profiles.skills.edit', compact('profile'));
    }

    public function update(Request $request, $profile) {
        $user_skill = $request->validate(
            [
                'skill_key'=>'required',

                'skill_special_skill'=>'nullable',

                'skill_hobbies'=>'nullable',

                'skill_membership'=>'nullable',
            ]
        );

        $user = User::whereName($profile)->first();
        //iterate the profile to get the skill and update
        foreach ($user->basicInfo as $info) {

            foreach ($info->skill as $skill) {

                if($skill->id === (int)$user_skill['skill_key'])
                {
                    $skill->special_skill = $request->input('skill_special_skill');

                    $skill->hobbies = $request->input('skill_hobbies');

                    $skill->membership = $request->input('skill_membership');

                    $skill->update();
                }
            }
        }

        return back()->with($profile)->with('flash', 'Updated successfully!');
    }
}
