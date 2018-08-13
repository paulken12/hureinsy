<?php

namespace App\Http\Controllers\Paf;

use Illuminate\Http\Request;
use App\Role;
use App\User;
use App\EmpBasicInfo;
use App\PafNatureOfAction;
use App\MasterContractChange;
use App\Http\Controllers\Controller;    
use App\Http\Controllers\RoleController;

class RequestController extends Controller
{

    public function index()
    {   
       
        return view('mpaf.request');
        
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function search(Request $request)
    {        

        $emp_id = $request->input('raj_id');
        $value = EmpBasicInfo::where('company_id', $emp_id)->first();  

        $contractChange = MasterContractChange::all();

        if (empty($value)) {

            return view('mpaf.request')->withErrors('Mismatched identity, Try again.');

        }else{

            return view('mpaf.request', compact('value', 'contractChange'));
        }
    }

/*
        $check_id = $request->validate([

            'raj_id'=> 'required|numeric',

        ]);*/
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        dd($request->all());
        PafNatureOfAction::create([

            'company_id' =>$request->input('raj_id'),

            'employment_status' =>$request->input('employment_status'),

        ]);

        return "yehay";
    }
}
