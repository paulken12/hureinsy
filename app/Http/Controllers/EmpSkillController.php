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
                'key'=>'required|numeric',
                'special_skill'=>'nullable',
                'hobbies'=>'nullable',
                'membership'=>'nullable',
            ]
        );

        $user = User::whereName($profile)->first();
        //iterate the profile to get the skill and update
        foreach ($user->basicInfo as $info) {
            foreach ($info->skill as $skill) {

                if($skill->id === (int)$user_skill['key'])
                {
                    $skill->special_skill = $request->input('special_skill');
                    $skill->hobbies = $request->input('hobbies');
                    $skill->membership = $request->input('membership');
                    $skill->update();
                }
            }
        }

        return back()->with($profile);
    }
}
