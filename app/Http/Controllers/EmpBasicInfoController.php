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

        //if the profile of authenticated user is not complete redirect back
//        if(!auth()->user()->confirmed())
//        {
//            return back()->with('flash', 'Please complete your information first');
//        }

        //get all employees and paginate to 15 data
        $employees = EmpBasicInfo::paginate(15);

        //return to the personnel list page
       return view('user.index',compact('employees'));
    }

    /**
     * Store a new user avatar.
     *
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        request()->validate([
            'avatar' => ['required', 'image']
        ]);

        dd('here');

        auth()->user()->update([
            'avatar_path' => request()->file('avatar')->store('avatars', 'public')
        ]);

        return back();
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
            'basic_first_name'=>'required',
            'basic_middle_name'=>'required',
            'basic_last_name'=>'required',
            'basic_civil_status_key'=>'required',
            'basic_citizenship_key'=>'required',
        ]);

        dd($validate);
    }
}
