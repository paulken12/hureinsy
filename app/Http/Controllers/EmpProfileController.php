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

        return view('profiles.show',compact('profile'));
    }
}
