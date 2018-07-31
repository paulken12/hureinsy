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

        $request->validate([
            'gov_sss_num'=>'nullable',
            'gov_pagibig_num'=>'nullable',
            'gov_philhealth_num'=>'nullable',
            'gov_tin_num'=>'nullable',
            'gov_payroll_account'=>'nullable',
        ]);

        $user = User::whereName($profile)->first();
        //iterate the profile to get the gov benefit and save
        foreach ($user->basicInfo as $info) {

            foreach ($info->benefit as $benefit) {

                $benefit->sss_num = $request->input('gov_sss_num');

                $benefit->pagibig_num = $request->input('gov_pagibig_num');

                $benefit->philhealth_num = $request->input('gov_philhealth_num');

                $benefit->tin_num = $request->input('gov_tin_num');

                $benefit->payroll_account = $request->input('gov_payroll_account');

                $benefit->update();
            }
        }

        return back()->with($profile)->with('flash', 'Updated successfully!');
    }
}
