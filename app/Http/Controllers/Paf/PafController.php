<?php

namespace App\Http\Controllers\Paf;

use App\EmpBasicInfo;
use App\Role;
use App\User;
use App\PafNatureOfAction;
use App\MasterContractChange;
use Illuminate\Http\Request;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\Controller;
use Laravel\Scout\Searchable;

class PafController extends Controller
{
    //
    public function create(){

        return view('paf.search');
    }

    public function search(Request $request){

        $raj_id = $request->input('raj_id');

        $value = EmpBasicInfo::where('company_id', $raj_id)->first();

        $contractChange = MasterContractChange::all();

    	return view('paf.search', compact('value', 'contractChange'));
    }

    public function store(Request $request){
        return 'a';
    }

}
