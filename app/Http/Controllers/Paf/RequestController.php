<?php

namespace App\Http\Controllers\Paf;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\PafNatureOfAction;
use App\PafProposedChangeJobDetail;
use App\PafProposedChangeScheduleDetail;
use App\PafProposedChangeCompensationDetail;
use App\Http\Controllers\Controller;    
use App\Http\Controllers\RoleController;
use App\Helpers\Paf\PersonnelActionManagement;

class RequestController extends Controller
{

    public function index()
    {   

        return view('mpaf.search');
        
    }

    public function search(Request $request)
    {        

        $employee_info = PersonnelActionManagement::get_employee_info($request->input('raj_id'));  

        if (empty($employee_info)) {

            return redirect(route('paf.index'))->with('error', 'Mismatched identity, Try again.');

        }else{

            return redirect(route('paf.show', $employee_info->company_id));
        
        }
    }


    public function show($emplid)
    {   

        $jobTitles = PersonnelActionManagement::call_master_job_title();

        $department = PersonnelActionManagement::call_master_department();

        $project_assignment = PersonnelActionManagement::call_master_company();

        $employment_status = PersonnelActionManagement::call_master_employment_status();

        $sched_type = PersonnelActionManagement::call_master_paf_schedule_type();

        $reportTo = PersonnelActionManagement::call_user();

        $employee_info = PersonnelActionManagement::get_employee_info($emplid);  

        return view('mpaf.request', compact('employee_info', 'employment_status', 'department', 'reportTo', 'jobTitles', 'project_assignment', 'sched_type'));
        
    }

    public function store(Request $request)
    {
        $validator = $request->validate([
            'employment_status' => 'exists:master_employment_statuses,key|required',
            'remarks'=>'required|max:255|string',
            'proposed_department' => 'nullable|max:255',
            'proposed_department' => 'nullable|max:255',
            'proposed_reportto' => 'nullable|max:255',
            'proposed_position_title' => 'nullable|max:255',
            'proposed_project_assignment' => 'nullable|max:255',
            'proposed_days_of_work' => 'nullable|max:255|integer',
            'proposed_work_hours_per_week' => 'nullable|max:255|integer',
            'proposed_type_of_shift' => 'nullable|max:255',
            'proposed_work_hours_per_day' => 'nullable|max:255|integer',
            'proposed_work_location' => 'nullable|max:255',
            'sched_type' => 'nullable|max:255',
            'proposed_salary' => 'nullable|max:255|integer',
            'proposed_bonus_allowance' => 'nullable|max:255',
            'proposed_benefits' => 'nullable|max:255',
       ]);

        $user = Auth::user()->basicInfo->pluck('company_id')->first();

        $request_id = PafNatureOfAction::create([

            'employee_company_id' => $request->input('raj_id'),

            'master_key_employment_status' => $request->input('employment_status'),

            'requested_by_company_id' => $user,

            'remarks' => $request->input('remarks'),

            'master_id_request_status' => '1',

            'master_id_sub_request_status' => '1',

        ]);

        PafProposedChangeJobDetail::create([

            'request_id' => $request_id->id,

            'proposed_key_department' => $request->input('proposed_department'),

            'proposed_reports_to' => $request->input('proposed_reportto'),

            'proposed_key_position_title' => $request->input('proposed_position_title'),

            'proposed_key_project_assignment' => $request->input('proposed_project_assignment'),
        ]);

        PafProposedChangeScheduleDetail::create([

            'request_id' => $request_id->id,

            'proposed_days_of_work' => $request->input('proposed_days_of_work'),

            'proposed_work_hours_per_week' => $request->input('proposed_work_hours_per_week'),

            'proposed_type_of_shift' => $request->input('proposed_type_of_shift'),

            'proposed_work_hours_per_day' => $request->input('proposed_work_hours_per_day'),

            'proposed_work_location' => $request->input('proposed_work_location'),

            'proposed_key_schedule_type' => $request->input('sched_type'),
        ]);

        PafProposedChangeCompensationDetail::create([

            'request_id' => $request_id->id,

            'proposed_salary' => $request->input('proposed_salary'),

            'proposed_bonus_allowance' => $request->input('proposed_bonus_allowance'),

            'proposed_benefits' => $request->input('proposed_benefits'),

        ]);

        return redirect(route('paf.index'))->with('success', 'Request complete, your request will be sent to the hr.');
    }
}

