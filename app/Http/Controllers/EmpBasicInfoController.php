<?php

namespace App\Http\Controllers;

use App\EmpBasicInfo;
use App\MasterCitizenship;
use App\MasterCivilStatus;
use App\User;
use foo\bar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class EmpBasicInfoController extends Controller
{
    public function index() {

        //get all employees and paginate to 15 data
        $employees = EmpBasicInfo::paginate(15);

        //return to the personnel list page
       return view('user.index',compact('employees'));
    }


    public function edit(EmpBasicInfo $profile) {

        $profile = $profile->user;

        //get all data in the master civil status table
        $civilStatus = MasterCivilStatus::all();

        //get all data in the master citizenship table
        $citizenship = MasterCitizenship::all();

        //check if a user is not login then can't update
        if(Gate::denies('update',$profile))
        {
            //redirect back where he came from
            return back();
        }

        return view('profiles.basic.edit',compact('profile','civilStatus','citizenship'));
    }

    public function update(Request $request, $profile) {

        //validate input fields server side
        $validate = $request->validate(
            [
                'basic_first_name'=>'required',

                'basic_middle_name'=>'required',

                'basic_last_name'=>'required',

                'basic_civil_status_key'=>'required',

                'basic_citizenship_key'=>'required',
            ]
        );

        $basic = EmpBasicInfo::whereSlug($profile)->first();

        //iterate the profile to get the crime and save

        $basic->first_name = $validate['basic_first_name'];

        $basic->middle_name = $validate['basic_middle_name'];

        $basic->last_name = $validate['basic_last_name'];

        $basic->master_civil_status_key = $validate['basic_civil_status_key'];

        $basic->master_citizenship_key = $validate['basic_citizenship_key'];

        $basic->slug = str_slug($validate['basic_first_name'].' '.$validate['basic_last_name']);

        $basic->update();

        return redirect(route('profiles',$basic))->with('flash', 'Updated successfully!');


    }
}
