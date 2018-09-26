<?php

namespace App\Http\Controllers\Paf;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\EmpBasicInfo;
use App\PafNatureOfAction;
use App\Http\Controllers\Controller;    
use App\Http\Controllers\RoleController;
use App\Helpers\Paf\PersonnelActionManagement;

class ApprovalController extends Controller
{
    public function list()
    {
        $requestList = PafNatureOfAction::where('master_id_sub_request_status', '2')->paginate(15);

        return view('epaf.list', compact('requestList'));
    }

    public function show($form){

        //Get paf details
        $get_paf_details = PersonnelActionManagement::get_paf_request($form);

        $get_job_details = PersonnelActionManagement::get_paf_job_detail($form); 

        $get_schedule_details = PersonnelActionManagement::get_paf_schedule_detail($form); 

        $get_compensation_details = PersonnelActionManagement::get_paf_compensation_detail($form); 

        //Get employee details
        $employee_name = PersonnelActionManagement::get_employee_info($get_paf_details->employee_company_id);

        $manager_name = PersonnelActionManagement::get_employee_info($get_paf_details->requested_by_company_id);

        $hr_name = PersonnelActionManagement::get_employee_info($get_paf_details->assessed_by_company_id);

        $exec_name = PersonnelActionManagement::get_employee_info($get_paf_details->approved_by_company_id);

        //Get Status details.
        $user_role= Auth::user()->roles->first();

        $request_status = $user_role->status;

        $sub_request_status = $user_role->sub_status;

        if($get_paf_details->masterPafSubStatus->id == '2'){

            return view('epaf.approval', compact('form', 'employee_name', 'manager_name', 'get_job_details', 'request_status', 'sub_request_status', 'user_role', 'get_schedule_details', 'get_compensation_details', 'get_paf_details'));

        }else{

            return view('epaf.readapproval',compact('form', 'employee_name', 'manager_name', 'get_job_details', 'user_role', 'get_schedule_details', 'get_compensation_details', 'get_paf_details', 'hr_name', 'employee_name', 'exec_name'));
        }

    }


    public function store(Request $request)
    {
        $validation = $request->validate([
            'proposed_remarks_job_exec' => 'max:255|required_with:proposed_department,proposed_reportto,proposed_position_title,proposed_project_assignment,proposed_remarks_job_hr',
            'proposed_remarks_schedule_exec' => 'max:255|required_with:proposed_days_of_work,proposed_work_hours_per_week,proposed_type_of_shift,proposed_work_hours_per_day,proposed_work_location,sched_type,proposed_remarks_schedule_hr',
            'proposed_remarks_compensation_exec' => 'max:255|required_with:proposed_salary,proposed_bonus_allowance,proposed_benefits,proposed_remarks_compensation_hr',
            'request_status' => 'exists:statuses,id|required',
            'sub_request_status' => 'exists:sub_statuses,id|required',
        ],
        [
            'proposed_remarks_job_exec.required_with' => 'You need to fill out remarks on change in job title, duties, and responsibilities details field.',
            'proposed_remarks_schedule_exec.required_with' => 'You need to fill out remarks on change in Work schedule details field.',
            'proposed_remarks_compensation_exec.required_with' => 'You need to fill out remarks on change in compensation and benefit details field.',

        ]);

        $form_update = PersonnelActionManagement::get_paf_request($request->input('req_id'));

        $form_update->master_id_request_status = $request->input('request_status');

        $form_update->master_id_sub_request_status = $request->input('sub_request_status');

        $form_update->approved_by_company_id = EmpBasicInfo::where('user_id', Auth::user()->id)->first()->company_id;

        $form_update->date_effective =$request->input('date_effective');

        $form_update->save();

        $job_update = PersonnelActionManagement::get_paf_job_detail($request->input('req_id')); 

        $job_update->proposed_remarks_exec = $request->input('proposed_remarks_job_exec');

        $job_update->save();

        $sched_update = PersonnelActionManagement::get_paf_schedule_detail($request->input('req_id')); 

        $sched_update->proposed_remarks_exec = $request->input('proposed_remarks_schedule_exec');

        $sched_update->save(); 

        $compensation_update = PersonnelActionManagement::get_paf_compensation_detail($request->input('req_id')); 

        $compensation_update->proposed_remarks_exec = $request->input('proposed_remarks_compensation_exec');

        $compensation_update->save();

        return redirect(route('paf.list.approval'))->with('success', 'Request form updated');
    }
}
