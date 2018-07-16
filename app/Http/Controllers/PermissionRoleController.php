<?php

namespace App\Http\Controllers;

use App\Role;
use Illuminate\Http\Request;

class PermissionRoleController extends Controller
{
    public function index() {

        $roles = Role::all();

        return view('admin.permission-role.index',compact('roles'));
    }

    public function edit() {

        $roles = Role::all();

        return view('admin.permission-role.edit',compact('roles'));
    }
}
