<?php

namespace App\Http\Controllers\Auth;

use App\EmpBasicInfo;
use App\EmpContactInfo;
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

        if (!$user) {
            //if the token is invalid then redirect to login
            return redirect(route('login'))->with('flash', 'Unknown token.');
        }

        //if the token is exist login the user
        Auth::login($user);

        $basicInfo = $user->basicInfo->first();

        //get all data in the master table
        $civilStatus = MasterCivilStatus::all();

        //get all data in the master citizenship table
        $citizenship = MasterCitizenship::all();

        //get all data in the master gender table
        $gender = MasterGender::all();

        //get all data in the master blood type table
        $blood = MasterBloodType::all();

        //get all data in the master blood type table
        $educations = MasterEducationalType::all();

        return view('profiles.create', compact(
            'user', 'civilStatus',
            'citizenship', 'gender',
            'blood', 'basicInfo',
            'educations'));
    }

    public function store(Request $request)
    {

        $info = $request->validate([

            'basic_first_name'       => 'required',
            'basic_middle_name'      => 'required',
            'basic_last_name'        => 'required',
            'basic_extension_key'    => 'nullable',
            'basic_civil_status_key' => 'required',
            'basic_gender_key'       => 'required',
            'basic_date_of_birth'    => 'required',
            'basic_birth_place'      => 'nullable',
            'basic_citizenship_key'  => 'required',

            'telephone_num'          => 'nullable',
            'mobile_num'             => 'required',
            'other_mobile'           => 'nullable',

            'add_unit_num'           => 'nullable',
            'add_block'              => 'nullable',
            'add_street_name'        => 'nullable',
            'add_subdivision'        => 'nullable',
            'add_barangay'           => 'nullable',
            'add_city'               => 'nullable',
            'add_province'           => 'nullable',
            'add_zip_code'           => 'nullable',

            'fam_last_name'          => 'nullable',
            'fam_first_name'         => 'nullable',
            'fam_date_of_birth'      => 'nullable',
            'fam_gender_key'         => 'nullable',
            'fam_employer'           => 'nullable',
            'fam_occupation'         => 'nullable',

            'edu_course'             => 'nullable',
            'edu_name_of_school'     => 'nullable',
            'edu_year_graduated'     => 'nullable',
            'edu_award'              => 'nullable',

            'exp_company_name'       => 'nullable',
            'exp_company_address'    => 'nullable',
            'exp_date_from'          => 'nullable',
            'exp_date_to'            => 'nullable',
            'exp_industry'           => 'nullable',
            'exp_salary'             => 'nullable',
            'exp_reason_for_leaving' => 'nullable',

            'ref_job_title'          => 'nullable',
            'ref_first_name'         => 'nullable',
            'ref_last_name'          => 'nullable',
            'ref_middle_name'        => 'nullable',
            'ref_company_name'       => 'nullable',
            'ref_company_address'    => 'nullable',
            'ref_contact_num'        => 'nullable',

            'eme_first_name'         => 'nullable',
            'eme_last_name'          => 'nullable',
            'eme_middle_name'        => 'nullable',
            'eme_contact_num'        => 'nullable',

            'med_blood_key'          => 'nullable',
            'med_height'             => 'nullable',
            'med_weight'             => 'nullable',

            'special_skill'          => 'nullable',
            'hobbies'                => 'nullable',
            'membership'             => 'nullable',

            'train_title'            => 'nullable',
            'train_date_from'        => 'nullable',
            'train_date_to'          => 'nullable',
            'train_place_seminar'    => 'nullable',

            'gov_sss_num'            => 'nullable',
            'gov_pagibig_num'        => 'nullable',
            'gov_philhealth_num'     => 'nullable',
            'gov_tin_num'            => 'nullable',
            'gov_payroll_account'    => 'nullable',

            'has_crime'              => 'nullable',
            'comment'                => 'nullable',
        ]);

        //get the user id
        $user = User::find(auth()->user()->id);

        foreach ($user->basicInfo as $basicInfo) {

            //update basic info
            $basicInfo->first_name = $info['basic_first_name'];

            $basicInfo->middle_name = $info['basic_middle_name'];

            $basicInfo->last_name = $info['basic_last_name'];

            $basicInfo->master_name_extension_key = $info['basic_extension_key'];

            $basicInfo->master_civil_status_key = $info['basic_civil_status_key'];

            $basicInfo->master_gender_key = $info['basic_gender_key'];

            $basicInfo->date_of_birth = $info['basic_date_of_birth'];

            $basicInfo->birth_place = $info['basic_birth_place'];

            $basicInfo->master_citizenship_key = $info['basic_citizenship_key'];

            $basicInfo->update();
        }

        //check if the user email is equal to the input field
        if($user->email != $request->input('email')) {

            //email validation
            $email = $request->validate([
                'email' => 'required|string|email|max:255|unique:users'
                ]
            );

            //update email
            $user->email = $email['email'];

            $user->update();
        }

        auth()->user()->verified();

        return redirect('dashboard')->with('flash', 'You have successfully submit your form and email confirmed')
            ->with('flash', 'Hello');

    }
}
