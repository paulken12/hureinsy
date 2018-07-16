<?php

namespace App\Http\Controllers;

use App\EmpBasicInfo;
use App\MasterCitizenship;
use App\MasterCivilStatus;
use App\User;
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

    public function edit(User $profile) {

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
        $validate = $this->validate($request,[
            'first_name'=>'required',
            'middle_name'=>'required',
            'last_name'=>'required',
            'master_civil_status_key'=>'required',
            'master_citizenship_key'=>'required',
        ]);

        dd($validate);
    }
}
