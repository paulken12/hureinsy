<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class EmpBenefitController extends Controller
{
    public function edit(User $profile) {
        return view('profiles.benefits.edit',compact('profile'));
    }

    public function update(Request $request, $profile) {

        $user_ben = $request->validate([
            'key'=>'required|numeric',
            'sss_num'=>'nullable',
            'pagibig_num'=>'nullable',
            'philhealth_num'=>'nullable',
            'tin_num'=>'nullable',
            'payroll_account'=>'nullable',
        ]);

        $user = User::whereName($profile)->first();
        //iterate the profile to get the crime and save
        foreach ($user->basicInfo as $info) {
            foreach ($info->benefit as $benefit) {

                if($benefit->id === (int)$user_ben['key'])
                {
                    $benefit->sss_num = $request->input('sss_num');
                    $benefit->pagibig_num = $request->input('pagibig_num');
                    $benefit->philhealth_num = $request->input('philhealth_num');
                    $benefit->tin_num = $request->input('tin_num');
                    $benefit->payroll_account = $request->input('payroll_account');
                    $benefit->update();
                }
            }
        }

        return back()->with($profile)->with('flash', 'Updated successfully!');
    }
}
