<?php

namespace App\Http\Controllers;

use App\EmpBasicInfo;
use App\MasterBloodType;
use App\MasterCitizenship;
use App\MasterCivilStatus;
use App\MasterGender;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EmpProfileController extends Controller
{
    public function show(User $profile) {

        //if the profile of authenticated user is not complete redirect back
//        if(!$profile->confirmed())
//        {
//            return back()->with('flash', 'Please complete your information first');
//        }

        return view('profiles.show',compact('profile'));
    }
}
