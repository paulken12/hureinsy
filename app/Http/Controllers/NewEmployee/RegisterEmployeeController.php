<?php

namespace App\Http\Controllers\NewEmployee;

use App\EmpBasicInfo;
use App\Http\Controllers\RoleController;
use App\Mail\ConfirmEmail;
use App\Role;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class RegisterEmployeeController extends Controller
{
    //
    public function create() {

        $user = EmpBasicInfo::orderBy('id','desc')->first();

        $roles = Role::orderBy('id','desc')->get();

        $user_name = auth()->user()->name;

        $company_id = $user->company_id + 1;

        return view('admin.users.create',compact('company_id','roles','user_name'));
    }

    public function store(Request $request) {

        $request->validate([
            'raj_id'=>'numeric',
            'name'=>'required|string|max:255',
            'sss_num'=>'required',
            'email'=>'required|string|email|max:255|unique:users',
            'role_key'=>'required',
        ]);

        //generate temporary password
        $password = str_random(8);

        //insert new user account
        $user = User::forceCreate([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => Hash::make($password),
            'master_employee_status_key' => 1,
            'verification_token' => str_random(25)
        ]);

        //attach the given role
        $user->assignRole($request->input('role_key'));

        //insert the basic info provided by management
        EmpBasicInfo::create([
            'company_id' =>$request->input('raj_id'),
            'user_id' =>$user->id,
            'first_name' =>$request->input('name'),
        ]);

        // send the verification to the new employee
        Mail::to($user)->send(new ConfirmEmail($user,$password));

        return back()->with('flash', 'Account Created successfully!');
    }
}
