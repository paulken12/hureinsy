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
            'key'=>'required|numeric',
            'has_crime'=>'nullable',
            'comment'=>'nullable',
        ]);

        $user = User::whereName($profile)->first();
        //iterate the profile to get the crime and save
        foreach ($user->basicInfo as $info) {
            foreach ($info->criminalInfo as $criminalInfo) {

                if($criminalInfo->id === (int)$user_cri['key'])
                {
                    $criminalInfo->has_crime = $request->input('has_crime');
                    $criminalInfo->comment = $request->input('comment');
                    $criminalInfo->update();
                }
            }
        }

        return back()->with($profile);
    }
}
