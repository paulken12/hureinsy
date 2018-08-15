<?php

namespace App\Http\Controllers\Paf;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Role;
use App\User;
use App\EmpBasicInfo;
use App\MasterJobTitle;
use App\MasterDepartment;
use App\PafNatureOfAction;
use App\MasterContractChange;
use App\PafProposedChangeJobDetail;
use App\Http\Controllers\Controller;    
use App\Http\Controllers\RoleController;

class AssessmentController extends Controller
{

    public function index()
    {

        $requestList = PafNatureOfAction::paginate(15);

        return view('hpaf.list', compact('requestList'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(PafNatureOfAction $form)
    {
        $employee_id = $form->company_id; 
        $employee_name = EmpBasicInfo::where('company_id', $employee_id)->first();
        $manager_id = $form->requested_by;
        $manager_name = EmpBasicInfo::where('company_id', $manager_id)->first();
        
        

        dd($manager_name->first_name);
        return 'asd';
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
