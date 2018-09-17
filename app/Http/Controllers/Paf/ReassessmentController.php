<?php

namespace App\Http\Controllers\Paf;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Status;
use App\SubStatus;
use App\EmpBasicInfo;
use App\MasterCompany;
use App\MasterJobTitle;
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

    public function show($form){

        $reportTo = User::all();

        $jobTitles = MasterJobTitle::all();

        $user_log = Auth::user()->roles->first(); 

        $get_status = $user_log->status;

        $get_sub_status =$user_log->sub_status;

        $department = MasterDepartment::all();

        $sched_type = MasterPafScheduleType::all();

        $project_assignment = MasterCompany::all();

        $employment_status = MasterEmploymentStatus::all();

        $get_paf_details = PafNatureOfAction::where('id', $form)->first();

        $get_job_details = PafProposedChangeJobDetail::where('request_id', $form)->first(); 

        $employee_name = EmpBasicInfo::where('company_id', $get_paf_details->employee_company_id)->first();

        $hr_name =EmpBasicInfo::where('company_id', $get_paf_details->assessed_by_company_id)->first();

        $exec_name =EmpBasicInfo::where('company_id', $get_paf_details->approved_by_company_id)->first();

        $get_schedule_details = PafProposedChangeScheduleDetail::where('request_id', $form)->first(); 

        $get_compensation_details = PafProposedChangeCompensationDetail::where('request_id', $form)->first(); 

        if($get_paf_details->masterPafSubStatus->id == '3'){
    	   return view('mpaf.showrequest', compact('form', 'employee_name', 'employment_status', 'jobTitles', 'department', 'sched_type', 'project_assignment', 'get_job_details', 'get_schedule_details', 'get_compensation_details', 'reportTo', 'sched_type', 'get_paf_details', 'get_status', 'get_sub_status'));
		}else{
    	   return view('mpaf.readrequest', compact('form', 'employee_name', 'employment_status', 'jobTitles', 'department', 'sched_type', 'project_assignment', 'get_job_details', 'get_schedule_details', 'get_compensation_details', 'reportTo', 'sched_type', 'hr_name', 'exec_name', 'get_paf_details'));
        }
    }

    public function store(Request $request, $form)
    {

        $validator = $request->validate([
            'employment_status' => 'exists:master_employment_statuses,key|required',
            'remarks'=>'required|max:255',
            'proposed_department' => 'nullable|max:255',
            'proposed_department' => 'nullable|max:255',
            'proposed_reportto' => 'nullable|max:255',
            'proposed_position_title' => 'nullable|max:255',
            'proposed_project_assignment' => 'nullable|max:255',
            'proposed_days_of_work' => 'nullable|max:255',
            'proposed_work_hours_per_week' => 'nullable|max:255',
            'proposed_type_of_shift' => 'nullable|max:255',
            'proposed_work_hours_per_day' => 'nullable|max:255',
            'proposed_work_location' => 'nullable|max:255',
            'sched_type' => 'nullable|max:255',
            'proposed_salary' => 'nullable|max:255',
            'proposed_bonus_allowance' => 'nullable|max:255',
            'proposed_benefits' => 'nullable|max:255',
            'request_status' => 'exists:statuses,id|required',
            'sub_request_status' => 'exists:sub_statuses,id|required',
       ]);

        $form_update = PafNatureOfAction::where('id', $form)->first();  

        $form_update->master_key_employment_status = $request->input('employment_status');

        $form_update->remarks = $request->input('remarks');

        $form_update->master_id_request_status = $request->input('request_status');

        $form_update->master_id_sub_request_status = $request->input('sub_request_status');

        $form_update->save();

        $job_update = PafProposedChangeJobDetail::where('request_id', $form)->first(); 

        $job_update->proposed_key_department = $request->input('proposed_department');

        $job_update->proposed_reports_to = $request->input('proposed_reportto');

        $job_update->proposed_key_position_title = $request->input('proposed_position_title');

        $job_update->proposed_key_project_assignment = $request->input('proposed_project_assignment');

        $job_update->proposed_remarks_hr = $request->input('proposed_remarks_job');

        $job_update->save();

        $sched_update = PafProposedChangeScheduleDetail::where('request_id', $form)->first(); 

        $sched_update->proposed_days_of_work = $request->input('proposed_days_of_work');

        $sched_update->proposed_work_hours_per_week = $request->input('proposed_work_hours_per_week');

        $sched_update->proposed_type_of_shift = $request->input('proposed_type_of_shift');

        $sched_update->proposed_work_hours_per_day = $request->input('proposed_work_hours_per_day');

        $sched_update->proposed_work_location = $request->input('proposed_work_location');

        $sched_update->proposed_key_schedule_type = $request->input('sched_type');

        $sched_update->proposed_remarks_hr = $request->input('proposed_remarks_schedule');

        $sched_update->save(); 

        $compensation_update = PafProposedChangeCompensationDetail::where('request_id', $form)->first();

        $compensation_update->proposed_salary = $request->input('proposed_salary');

        $compensation_update->proposed_bonus_allowance = $request->input('proposed_bonus_allowance');

        $compensation_update->proposed_benefits = $request->input('proposed_benefits');

        $compensation_update->proposed_remarks_hr = $request->input('proposed_remarks_compensation');

        $compensation_update->save();

    	return redirect(route('paf.list.reassess'))->with('success', 'Request form updated');
    }
}
