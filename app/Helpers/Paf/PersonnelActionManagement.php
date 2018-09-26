<?php

namespace App\Helpers\Paf;
 
use App\User;
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

class PersonnelActionManagement {

    public static function get_paf_request($paf_id){
        return PafNatureOfAction::find($paf_id);
    }

    public static function get_paf_job_detail($paf_id){
        return PafProposedChangeJobDetail::where('request_id', $paf_id)->first();
    }

    public static function get_paf_schedule_detail($paf_id){
        return PafProposedChangeScheduleDetail::where('request_id', $paf_id)->first();
    }

    public static function get_paf_compensation_detail($paf_id){
        return PafProposedChangeCompensationDetail::where('request_id', $paf_id)->first();
    }

    public static function get_employee_info($user_id){
    	return EmpBasicInfo::where('company_id', $user_id)->first();
    }

    public static function call_user(){
    	return User::all();
    }

    public static function call_emp_info(){
    	return EmpBasicInfo::all();
    }

    public static function call_master_company(){
    	return MasterCompany::all();
    }

    public static function call_master_job_title(){
    	return MasterJobTitle::all();
    }

    public static function call_master_department(){
    	return MasterDepartment::all();
    }

    public static function call_master_paf_schedule_type(){
    	return MasterPafScheduleType::all();
    }

    public static function call_master_employment_status(){
    	return MasterEmploymentStatus::all();
    }

    public static function call_paf_lists(){
    	return PafNatureOfAction::paginate(10);
    }

}