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
            'key'=>'required|numeric',
            'job_title'=>'nullable',
            'first_name'=>'nullable',
            'last_name'=>'nullable',
            'middle_name'=>'nullable',
            'company_name'=>'nullable',
            'company_address'=>'nullable',
            'contact_num'=>'nullable',
        ]);

        $user = User::whereName($profile)->first();
        //iterate the profile to get the reference and save
        foreach ($user->basicInfo as $info) {
            foreach ($info->reference as $reference) {

                if($reference->id === (int)$user_ref['key'])
                {
                    $reference->job_title = $request->input('job_title');
                    $reference->first_name = $request->input('first_name');
                    $reference->last_name = $request->input('last_name');
                    $reference->middle_name = $request->input('middle_name');
                    $reference->company_name = $request->input('company_name');
                    $reference->company_address = $request->input('company_address');
                    $reference->contact_num = $request->input('contact_num');
                    $reference->update();
                }
            }
        }

        return back()->with($profile)->with('flash', 'Updated successfully!');

    }
}
