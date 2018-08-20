<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PafProposedChangeJobDetail extends Model
{
    protected $table = 'paf_proposed_change_job_details';
    protected $guarded = [];
    
 	function natureOfAction() 
 	{
        return $this->belongsTo(PafNatureOfAction::class, 'request_id');
    }
    public function masterDepartment()
    {
        return $this->belongsTo(MasterDepartment::class, 'proposed_key_department');
    } 
    public function user() 
    {
        return $this->belongsTo(User::class,'proposed_reports_to');
    }
    public function masterJobTitle()
    {
        return $this->belongsTo(MasterJobTitle::class, 'proposed_key_position_title');
    }
    public function masterCompany()
    {
        return $this->belongsTo(MasterCompany::class, 'proposed_key_project_assignment');
    }	
}
