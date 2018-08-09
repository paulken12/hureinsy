<?php

namespace App\Http\Controllers\Paf;

use App\EmpBasicInfo;
use App\Http\Controllers\RoleController;
use App\Role;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Laravel\Scout\Searchable;

class PafController extends Controller
{
    //
    public function create(){
    	$value ="";

    	return view('manager.createpaf', compact('value'));
    }

    public function store(Request $request){

    	$raj_id = $request->input('raj_id');

    	$value = EmpBasicInfo::where('company_id', $raj_id)->first();

    	return view('manager.createpaf', compact('value'));
    }
}
