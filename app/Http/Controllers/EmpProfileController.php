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
    public function show(User $employees) {

        return view('profiles.show',compact('employees'));
    }

    public function create() {

        //get all data in the master civil status table
        $civilStatus = MasterCivilStatus::all();

        //get all data in the master citizenship table
        $citizenship = MasterCitizenship::all();

        //get all data in the master gender table
        $gender = MasterGender::all();

        //get all data in the master blood type table
        $blood = MasterBloodType::all();

        return view('profiles.create',compact('employees','civilStatus','citizenship','gender','blood'));
    }
}
