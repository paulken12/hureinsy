<?php

namespace App\Http\Controllers\Paf;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Role;
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

class RequestController extends Controller
{

    public function index()
    {   

        $user =EmpBasicInfo::where('user_id', Auth::user()->id)->first();

        $list = PafNatureOfAction::where('requested_by', $user->id);

        return view('mpaf.search', compact('user', 'list'));
        
    }

    public function search(Request $request)
    {        

        $emp_id = $request->input('raj_id');

        $value = EmpBasicInfo::where('company_id', $emp_id)->first();  

        if (empty($value)) {

            return redirect(route('paf.index'))->with('error', 'Mismatched identity, Try again.');

        }else{

            return redirect(route('paf.show', $emp_id));
        
        }
    }


    public function show($emplid)
    {   

        $user_log = Auth::user()->roles->first(); 

        $get_status = $user_log->status->whereIn('id', '1');

        $get_sub_status =$user_log->sub_status->whereIn('id', '1');

        $jobTitles = MasterJobTitle::all();

        $department = MasterDepartment::all();

        $project_assignment = MasterCompany::all();

        $employment_status = MasterEmploymentStatus::all();

        $sched_type = MasterPafScheduleType::all();

        $reportTo = User::all();

        $value = EmpBasicInfo::where('company_id', $emplid)->first();  

        return view('mpaf.request', compact('value', 'employment_status', 'department', 'reportTo', 'jobTitles', 'project_assignment', 'sched_type', 'get_status', 'get_sub_status'));
        
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

        $user = Auth::user()->basicInfo->pluck('company_id')->first();

        //dd($request->all());
        $request_id = PafNatureOfAction::create([

            'employee_company_id' => $request->input('raj_id'),

            'master_key_employment_status' => $request->input('employment_status'),

            'requested_by_company_id' => $user,

            'remarks' => $request->input('remarks'),

            'master_id_request_status' => $request->input('request_status'),

            'master_id_sub_request_status' => $request->input('sub_request_status'),

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

