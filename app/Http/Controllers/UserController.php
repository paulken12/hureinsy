<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
   public function index() {
       $users = User::paginate(15);
       return view('admin.users.index',compact('users'));
   }
}
