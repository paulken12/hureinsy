<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use app\MasterContractChange;

class PafNatureOfAction extends Model
{	
    protected $table = 'paf_nature_of_actions';
    protected $guarded = [];

    public function getRouteKeyName()
    {
        return 'employee_company_id';
    }
    public function basicInfo()
    {
        return $this->belongsToMany(EmpBasicInfo::class, 'employee_company_id');
    } 
    function proposedChangeJobDetail() 
    {
        return $this->hasMany(PafProposedChangeJobDetail::class);
    }
    public function masterPafStatus()
    {
        return $this->belongsTo(MasterPafStatus::class, 'master_key_request_status');
    } 
    public function masterPafSubStatus()
    {
        return $this->belongsTo(MasterPafSubStatus::class, 'master_key_sub_request_status');
    } 
    public function contractChange() 
    {
        return $this->belongsTo(MasterContractChange::class, 'master_key_employment_status');
    }

}
