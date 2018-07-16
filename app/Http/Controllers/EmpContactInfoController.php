<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class EmpContactInfoController extends Controller
{
    public function edit(User $profile) {

        return view('profiles.contact.edit',compact('profile'));
    }
}
