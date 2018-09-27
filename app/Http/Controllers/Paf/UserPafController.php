<?php

namespace App\Http\Controllers\Paf;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\PafNatureOfAction;
use App\Http\Controllers\Controller;    
use App\Http\Controllers\RoleController;
use App\Helpers\Paf\PersonnelActionManagement;

class UserPafController extends Controller
{

   public function list()
    {
        $requestList = PafNatureOfAction::where('employee_company_id', Auth::user()->basicInfo->pluck('company_id')->first())->paginate(15);

        return view('upaf.list', compact('requestList'));
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

            return view('upaf.readpaf',compact('form', 'employee_name', 'manager_name', 'get_job_details', 'user_role', 'get_schedule_details', 'get_compensation_details', 'get_paf_details', 'hr_name', 'employee_name', 'exec_name'));
        }
}
