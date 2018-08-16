<?php

namespace App\Http\Controllers;

use App\EmpBasicInfo;
use App\MasterCitizenship;
use App\MasterCivilStatus;
use App\MasterEducationalType;
use App\MasterGender;
use App\MasterNameExtension;
use App\User;


class EmpProfileController extends Controller
{
    public function show(EmpBasicInfo $profile) {
        $user = $profile->user;

        $gender = MasterGender::all();
        $civilStatus = MasterCivilStatus::all();
        $citizenship = MasterCitizenship::all();
        $extension = MasterNameExtension::all();
        $educations = MasterEducationalType::all();

        return view('test', compact('user','profile','gender','civilStatus','citizenship','extension','educations'));
        return view('profiles.show',compact('profile'));
    }
}
