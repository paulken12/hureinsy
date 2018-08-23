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


    	return $form;
    }
}
