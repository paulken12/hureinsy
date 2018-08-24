<?php

namespace App\Http\Controllers\Paf;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\EmpBasicInfo;
use App\MasterCompany;
use App\MasterJobTitle;
use App\MasterPafStatus;
use App\MasterDepartment;
use App\PafNatureOfAction;
use App\MasterPafScheduleType;
use App\MasterEmploymentStatus;
use App\PafProposedChangeJobDetail;
use App\PafProposedChangeScheduleDetail;
use App\PafProposedChangeCompensationDetail;
use App\Http\Controllers\Controller;    
use App\Http\Controllers\RoleController;

class ReassessmentController extends Controller
{
    public function list()
    {
    	$request_list = PafNatureOfAction::request();

    	return view('mpaf.list', compact('request_list'));
    }

    public function show(PafNatureOfAction $form){

        $reportTo = User::all();

        $jobTitles = MasterJobTitle::all();

        $department = MasterDepartment::all();

        $sched_type = MasterPafScheduleType::all();

        $project_assignment = MasterCompany::all();

        $sched_type = MasterPafScheduleType::all();

        $employment_status = MasterEmploymentStatus::all();

        $get_job_details = PafProposedChangeJobDetail::where('request_id', $form->id)->first(); 

        $employee_name = EmpBasicInfo::where('company_id', $form->employee_company_id)->first();

        $hr_name =EmpBasicInfo::where('company_id', $form->assessed_by_company_id)->first();

        $exec_name =EmpBasicInfo::where('company_id', $form->approved_by_company_id)->first();

        $get_schedule_details = PafProposedChangeScheduleDetail::where('request_id', $form->id)->first(); 

        $get_compensation_details = PafProposedChangeCompensationDetail::where('request_id', $form->id)->first(); 

        if($form->masterPafStatus->request_status == 'Incomplete'){
    	return view('mpaf.showrequest', compact('form', 'employee_name', 'employment_status', 'jobTitles', 'department', 'sched_type', 'project_assignment', 'get_job_details', 'get_schedule_details', 'get_compensation_details', 'reportTo', 'sched_type'));
		}
    	return view('mpaf.readrequest', compact('form', 'employee_name', 'employment_status', 'jobTitles', 'department', 'sched_type', 'project_assignment', 'get_job_details', 'get_schedule_details', 'get_compensation_details', 'reportTo', 'sched_type', 'hr_name', 'exec_name'));
    }

    public function store(Request $request)
    {

        $form_update = PafNatureOfAction::first();
        dd($request->all());

        $form_update->master_key_employment_status = $request->input('employment_status');

        $form_update->remarks = $request->input('remarks');

        if($request->input('resubmit') == 'clo'){

	        $form_update->master_key_request_status = $request->input('resubmit');

	        $form_update->master_key_sub_request_status = $request->input('clos');
        	
        }else{

	        $form_update->master_key_request_status = $request->input('resubmit');

	        $form_update->master_key_sub_request_status = $request->input('tohr');

        }

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

    	return redirect(route('paf.list.reassess'))->with('success', 'Request form updated');
    }
}
