<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class EmpCriminalController extends Controller
{
    public function edit(User $profile) {
        return view('profiles.conviction.edit', compact('profile'));
    }

    public function update(Request $request, $profile) {

        $user_cri = $request->validate([
            'crime_key'=>'required',
            'crime_has_crime'=>'nullable',
            'crime_comment'=>'nullable',
        ]);

        $user = User::whereName($profile)->first();
        //iterate the profile to get the crime and save
        foreach ($user->basicInfo as $info) {
            foreach ($info->criminalInfo as $criminalInfo) {

                if($criminalInfo->id === (int)$user_cri['crime_key'])
                {
                    $criminalInfo->has_crime = $request->input('crime_has_crime');

                    $criminalInfo->comment = $request->input('crime_comment');

                    $criminalInfo->update();
                }
            }
        }

        return back()->with($profile)->with('flash', 'Updated successfully!');
    }
}
