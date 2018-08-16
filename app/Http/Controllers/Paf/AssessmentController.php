<?php

namespace App\Http\Controllers\Paf;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\EmpBasicInfo;
use App\MasterJobTitle;
use App\MasterPafStatus;
use App\MasterDepartment;
use App\PafNatureOfAction;
use App\MasterContractChange;
use App\PafProposedChangeJobDetail;
use App\Http\Controllers\Controller;    
use App\Http\Controllers\RoleController;

class AssessmentController extends Controller
{

    public function list()
    {

        $request_status = MasterPafStatus::all();

        $requestList = PafNatureOfAction::paginate(15);

        return view('hpaf.list', compact('requestList', 'request_status'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(PafNatureOfAction $form)
    {

        $user_role= Auth::user()->roles->first();

        $request_status = MasterPafStatus::all();

        $employee_name = EmpBasicInfo::where('company_id', $form->company_id)->first();

        $manager_name = EmpBasicInfo::where('company_id', $form->requested_by)->first();

        $get_job_details = PafProposedChangeJobDetail::where('request_id', $form->id)->first(); 
        
        return view('hpaf.pending', compact('form', 'employee_name', 'manager_name', 'get_job_details', 'request_status', 'user_role'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
