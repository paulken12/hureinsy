<?php

namespace App\Http\Controllers;

use App\EmpBasicInfo;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;

class EmpBenefitController extends Controller
{
    public function edit(EmpBasicInfo $profile) {

        $profile = $profile->user;

        return view('profiles.benefits.edit',compact('profile'));
    }

    public function update(Request $request, $profile) {

        $basic = EmpBasicInfo::whereSlug($profile)->first();

        $request->validate([

            'gov_sss_num'=>'nullable',

            'gov_pagibig_num'=>'nullable',

            'gov_philhealth_num'=>'nullable',

            'gov_tin_num'=>'nullable',

            'gov_payroll_account'=>'nullable',

        ]);

        //iterate the profile to get the gov benefit and save
       foreach ($basic->benefit as $benefit) {

            $benefit->sss_num = $request->input('gov_sss_num');

            $benefit->pagibig_num = $request->input('gov_pagibig_num');

            $benefit->philhealth_num = $request->input('gov_philhealth_num');

            $benefit->tin_num = $request->input('gov_tin_num');

            $benefit->payroll_account = $request->input('gov_payroll_account');

            $benefit->update();
        }

        return redirect(route('profile.benefits.edit', $profile))->with('flash', 'Updated successfully!');
    }
}
