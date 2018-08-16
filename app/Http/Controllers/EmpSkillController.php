<?php

namespace App\Http\Controllers;

use App\EmpBasicInfo;
use Illuminate\Http\Request;

class EmpSkillController extends Controller
{
    public function edit(EmpBasicInfo $profile) {

        $profile = $profile->user;

        return view('profiles.skills.edit', compact('profile'));
    }

    public function update(Request $request, $profile) {


        $basic = EmpBasicInfo::whereSlug($profile)->first();


        $user_skill = $request->validate(
            [
                'skill_key'=>'required',

                'skill_special_skill'=>'nullable',

                'skill_hobbies'=>'nullable',

                'skill_membership'=>'nullable',
            ]
        );


        $this->make($basic->skill,$user_skill);

        dd('bypass');

        //iterate the profile to get the skill and update

        foreach ($basic->skill as $skill) {

            if($skill->id === (int)$user_skill['skill_key'])
            {
                $skill->special_skill = $request->input('skill_special_skill');

                $skill->hobbies = $request->input('skill_hobbies');

                $skill->membership = $request->input('skill_membership');

                $skill->update();
            }
        }

        return redirect(route('profile.skills.update'))->with('flash', 'Updated successfully!');
    }

    public function make($class, $attribute) {

        foreach ($class as $data) {

            foreach (array_keys($attribute) as $key => $value) {

                dd($key);
                if ($data->id === (int)$key[0])
                {
                    dd('here');

                }
                else{
                    dd('nothing');
                }
            }


        }
    }
}













