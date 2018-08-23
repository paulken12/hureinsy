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
use App\MasterPafSubStatus;
use App\MasterEmploymentStatus;
use App\PafProposedChangeJobDetail;
use App\PafProposedChangeScheduleDetail;
use App\PafProposedChangeCompensationDetail;
use App\Http\Controllers\Controller;    
use App\Http\Controllers\RoleController;

class AssessmentController extends Controller
{

    public function list()
    {
        $request_status = MasterPafStatus::all();

        $sub_request_status = MasterPafSubStatus::all();

        $requestList = PafNatureOfAction::paginate(15);

        $employment_status = MasterEmploymentStatus::all();

        return view('hpaf.list', compact('requestList', 'sub_request_status', 'request_status','employment_status'));
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

        $sub_request_status = MasterPafSubStatus::all();

        $employee_name = EmpBasicInfo::where('company_id', $form->employee_company_id)->first();

        $manager_name = EmpBasicInfo::where('company_id', $form->requested_by_company_id)->first();

        $get_job_details = PafProposedChangeJobDetail::where('request_id', $form->id)->first(); 

        $get_schedule_details = PafProposedChangeScheduleDetail::where('request_id', $form->id)->first(); 

        $get_compensation_details = PafProposedChangeCompensationDetail::where('request_id', $form->id)->first(); 
        
        return view('hpaf.pending', compact('form', 'employee_name', 'manager_name', 'get_job_details', 'request_status', 'sub_request_status', 'user_role', 'get_schedule_details', 'get_compensation_details'));
    }

    public function assessment(Request $request)
    {

        $form_update = PafNatureOfAction::where('id', $request->input('req_id'))->first();

        $form_update->master_key_request_status = $request->input('request_status');

        $form_update->master_key_sub_request_status = $request->input('sub_request_status');

        $form_update->assessed_by_company_id = EmpBasicInfo::where('user_id', Auth::user()->id)->first()->company_id;

        $form_update->save();

        $job_update = PafProposedChangeJobDetail::where('request_id', $request->input('req_id'))->first(); 

        $job_update->proposed_remarks_hr = $request->input('proposed_remarks_job');

        $job_update->save();

        $sched_update = PafProposedChangeScheduleDetail::where('request_id', $request->input('req_id'))->first(); 

        $sched_update->proposed_remarks_hr = $request->input('proposed_remarks_schedule');

        $sched_update->save(); 

        $compensation_update = PafProposedChangeCompensationDetail::where('request_id', $request->input('req_id'))->first(); 

        $compensation_update->proposed_remarks_hr = $request->input('proposed_remarks_compensation');

        $compensation_update->save();

        return redirect(route('paf.list'))->with('success', 'Request form updated');;
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
