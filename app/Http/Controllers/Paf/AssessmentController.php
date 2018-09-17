<?php

namespace App\Http\Controllers\Paf;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Role;
use App\Status;
use App\SubStatus;
use App\EmpBasicInfo;
use App\MasterJobTitle;
use App\MasterDepartment;
use App\PafNatureOfAction;
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

        $requestList = PafNatureOfAction::paginate(15);

        return view('hpaf.list', compact('requestList'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($form)
    {  
        $get_paf_details = PafNatureOfAction::where('id', $form)->first();

        $get_job_details = PafProposedChangeJobDetail::where('request_id', $form)->first(); 

        $get_schedule_details = PafProposedChangeScheduleDetail::where('request_id', $form)->first(); 

        $get_compensation_details = PafProposedChangeCompensationDetail::where('request_id', $form)->first(); 
        
        $employee_name = EmpBasicInfo::where('company_id', $get_paf_details->employee_company_id)->first();

        $manager_name = EmpBasicInfo::where('company_id', $get_paf_details->requested_by_company_id)->first();

        $user_role= Auth::user()->roles->first();

        $employee_name = EmpBasicInfo::where('company_id', $get_paf_details->employee_company_id)->first();

        $hr_name =EmpBasicInfo::where('company_id', $get_paf_details->assessed_by_company_id)->first();

        $exec_name =EmpBasicInfo::where('company_id', $get_paf_details->approved_by_company_id)->first();

        if ($get_schedule_details->proposed_key_schedule_type == 'empl') {
            
            $request_status = $user_role->status;

        }else{

            $request_status = $user_role->status->whereNotIn('id', '2');

        }

        $sub_request_status = $user_role->sub_status;

        if($get_paf_details->masterPafSubStatus->id == '1'){

            return view('hpaf.pending', compact('form', 'employee_name', 'manager_name', 'get_job_details', 'request_status', 'sub_request_status', 'user_role', 'get_schedule_details', 'get_compensation_details', 'get_paf_details'));

        }else{

            return view('hpaf.readpending',compact('form', 'employee_name', 'manager_name', 'get_job_details', 'user_role', 'get_schedule_details', 'get_compensation_details', 'get_paf_details', 'hr_name', 'employee_name', 'exec_name'));
        }

    }

    public function assessment(Request $request)
    {
        $validation = $request->validate([
            'proposed_remarks_job' => 'max:255|required_with:proposed_department,proposed_reportto,proposed_position_title,proposed_project_assignment',
            'proposed_remarks_schedule' => 'max:255|required_with:proposed_days_of_work,proposed_work_hours_per_week,proposed_type_of_shift,proposed_work_hours_per_day,proposed_work_location,sched_type',
            'proposed_remarks_compensation' => 'max:255|required_with:proposed_salary,proposed_bonus_allowance,proposed_benefits',
            'request_status' => 'exists:statuses,id|required',
            'sub_request_status' => 'exists:sub_statuses,id|required',
        ],
        [
            'proposed_remarks_job.required_with' => 'You need to fill out remarks on change in job title, duties, and responsibilities details field.',
            'proposed_remarks_schedule.required_with' => 'You need to fill out remarks on change in Work schedule details field.',
            'proposed_remarks_compensation.required_with' => 'You need to fill out remarks on change in compensation and benefit details field.',

        ]);
        

        $form_update = PafNatureOfAction::where('id', $request->input('req_id'))->first();

        $form_update->master_id_request_status = $request->input('request_status');

        $form_update->master_id_sub_request_status = $request->input('sub_request_status');

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

        return redirect(route('paf.list'))->with('success', 'Request form updated');
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
