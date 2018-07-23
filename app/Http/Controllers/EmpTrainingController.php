<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class EmpTrainingController extends Controller
{
    public function edit(User $profile) {
        return view('profiles.training.edit', compact('profile'));
    }

    public function update(Request $request, $profile) {

        $user_train = $request->validate([
            'key'=>'required|numeric',
            'title'=>'nullable',
            'date_from'=>'nullable',
            'date_to'=>'nullable',
            'place_seminar'=>'nullable',
        ]);

        $user = User::whereName($profile)->first();
        //iterate the profile to get the training and save
        foreach ($user->basicInfo as $info) {
            foreach ($info->training as $training) {

                if($training->id === (int)$user_train['key'])
                {
                    $training->title = $request->input('title');
                    $training->date_from = $request->input('date_from');
                    $training->date_to = $request->input('date_to');
                    $training->place_seminar = $request->input('place_seminar');
                    $training->update();
                }
            }
        }

        return back()->with($profile)->with('flash', 'Updated successfully!');
    }
}
