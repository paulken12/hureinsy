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

            'train_key'=>'required',

            'train_title'=>'nullable',

            'train_date_from'=>'nullable',

            'train_date_to'=>'nullable',

            'train_place_seminar'=>'nullable',

        ]);

        //using the for loop
        // if the client request to update the data at the same time
        //we just need to replace the update button to single button in the view
        for($i=0; $i < count($user_train['train_key']); ++$i ) {

            //get the user using the profile name
            $user = User::whereName($profile)->first();

            //iterate the profile to get the data and save
            foreach ($user->basicInfo as $info) {

                //iterate the relationship
                foreach ($info->training as $training) {

                    //if the database id is equal to the hidden input id
                    if($training->id === (int)$user_train['train_key'][$i]) {

                        //update the database
                        $training->title = $request->input('train_title')[$i];

                        $training->date_from = $request->input('train_date_from')[$i];

                        $training->date_to = $request->input('train_date_to')[$i];

                        $training->place_seminar = $request->input('train_place_seminar')[$i];

                        $training->update();
                    }
                }
            }
        }

        return back()->with($profile)->with('flash', 'Updated successfully!');
    }
}
