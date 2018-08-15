<?php

namespace App\Http\Controllers\Paf;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Role;
use App\User;
use App\EmpBasicInfo;
use App\MasterJobTitle;
use App\MasterDepartment;
use App\PafNatureOfAction;
use App\MasterContractChange;
use App\PafProposedChangeJobDetail;
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

        $department = MasterDepartment::all();

        $reportTo = User::all();

        $jobTitles = MasterJobTitle::all();

        if (empty($value)) {

            return redirect(route('paf.index'))->with('error', 'Mismatched identity, Try again.');

        }else{

            return view('mpaf.request', compact('value', 'contractChange', 'department', 'reportTo', 'jobTitles'));

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
        $user = Auth::user()->basicInfo->pluck('company_id')->first();

        //dd($request->all());
        $request_id = PafNatureOfAction::create([

            'company_id' => $request->input('raj_id'),

            'employment_status' => $request->input('employment_status'),

            'requested_by' => $user,

            'remarks'   => $request->input('remarks'),

        ]);

        PafProposedChangeJobDetail::create([

            'request_id' => $request_id->id,

            'proposed_department' => $request->input('proposed_department'),

            'proposed_reports_to' => $request->input('proposed_reportto'),

            'proposed_position/title' => $request->input('proposed_position/title'),

            'proposed_project_assignment' => $request->input('proposed_project_assignment'),
        ]);

        return redirect(route('paf.index'))->with('success', 'yehay');
    }
}

