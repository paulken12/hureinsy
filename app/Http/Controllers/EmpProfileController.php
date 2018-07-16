<?php

namespace App\Http\Controllers;

use App\EmpBasicInfo;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EmpProfileController extends Controller
{
    public function show(User $employees) {

        return view('profiles.show',compact('employees'));
    }
}
