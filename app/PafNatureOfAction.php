<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PafNatureOfAction extends Model
{	
    protected $table = 'paf_nature_of_actions';
    protected $guarded = [];

    public function getRouteKeyName()
    {
        return 'company_id';
    }
    public function basicInfo()
    {
        return $this->belongsTo(EmpBasicInfo::class);
    } 
    public function masterPafStatus()
    {
        return $this->belongsTo(MasterPafStatus::class);
    } 
    function proposedChangeJobDetail() 
    {
        return $this->hasMany(PafProposedChangeJobDetail::class);
    }

}
