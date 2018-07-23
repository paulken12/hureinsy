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
            'key'=>'required|numeric',
            'course'=>'nullable',
            'name_of_school'=>'nullable',
            'year_graduated'=>'nullable',
            'award'=>'nullable',
        ]);

        $user = User::whereName($profile)->first();
        //iterate the profile to get the education and save
        foreach ($user->basicInfo as $info) {
            foreach ($info->education as $education) {

                if($education->id === (int)$user_edu['key'])
                {
                    $education->course = $request->input('course');
                    $education->name_of_school = $request->input('name_of_school');
                    $education->year_graduated = $request->input('year_graduated');
                    $education->award = $request->input('award');
                    $education->update();
                }
            }
        }

        return back()->with($profile);
    }
}
