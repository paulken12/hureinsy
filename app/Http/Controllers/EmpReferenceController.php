<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class EmpReferenceController extends Controller
{
    public function edit(User $profile) {

        return view('profiles.reference.edit', compact('profile'));
    }

    public function update(Request $request, $profile) {

        $user_ref = $request->validate([

            'ref_key'=>'required',

            'ref_job_title'=>'nullable',

            'ref_first_name'=>'nullable',

            'ref_last_name'=>'nullable',

            'ref_middle_name'=>'nullable',

            'ref_company_name'=>'nullable',

            'ref_company_address'=>'nullable',

            'ref_contact_num'=>'nullable',
        ]);

        //using the for loop
        // if the client request to update the data at the same time
        //we just need to replace the update button to single button in the view
        for($i=0; $i < count($user_ref['ref_key']); ++$i ) {

            //get the user using the profile name
            $user = User::whereName($profile)->first();

            //iterate the profile to get the data and save
            foreach ($user->basicInfo as $info) {

                //iterate the relationship
                foreach ($info->reference as $reference) {

                    //if the database id is equal to the hidden input id
                    if($reference->id === (int)$user_ref['ref_key'][$i]) {

                        //update the database
                        $reference->job_title = $request->input('ref_job_title')[$i];

                        $reference->first_name = $request->input('ref_first_name')[$i];

                        $reference->last_name = $request->input('ref_last_name')[$i];

                        $reference->middle_name = $request->input('ref_middle_name')[$i];

                        $reference->company_name = $request->input('ref_company_name')[$i];

                        $reference->company_address = $request->input('ref_company_address')[$i];

                        $reference->contact_num = $request->input('ref_contact_num')[$i];

                        $reference->update();
                    }
                }
            }
        }

        return back()->with($profile)->with('flash', 'Updated successfully!');

    }
}
