<?php

namespace App\Http\Controllers\Auth;

use App\MasterBloodType;
use App\MasterCitizenship;
use App\MasterCivilStatus;
use App\MasterEducationalType;
use App\MasterGender;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class RegisterConfirmationController extends Controller
{
    /**
     * Confirm a user's email address.
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function create()
    {
        //get the user has the token
        $user = User::where('verification_token', request('token'))->first();

        if (! $user) {

            return redirect(route('login'))->with('flash', 'Unknown token.');
        }

        //if the token is exist login the user
        Auth::login($user);

        $basicInfo = $user->basicInfo->first();

        //get all data in the master civil status table
        $civilStatus = MasterCivilStatus::all();

        //get all data in the master citizenship table
        $citizenship = MasterCitizenship::all();

        //get all data in the master gender table
        $gender = MasterGender::all();

        //get all data in the master blood type table
        $blood = MasterBloodType::all();

        //get all data in the master blood type table
        $educations = MasterEducationalType::all();

        return view('profiles.create',compact(
            'user','civilStatus',
            'citizenship','gender',
            'blood','basicInfo',
            'educations'));

    }

    public function store() {

        auth()->user()->verified();

        return view('dashboard');
    }
}
