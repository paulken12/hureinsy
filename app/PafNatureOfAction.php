<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PafNatureOfAction extends Model
{	
    protected $table = 'paf_nature_of_actions';
    protected $guarded = [];

	public function basicInfo()
    {
        return $this->belongsTo(EmpBasicInfo::class);
    } 
    
    function proposedChangeJobDetail() 
    {
        return $this->hasMany(PafProposedChangeJobDetail::class);
    }

    public function getRouteKeyName()
    {
        return 'company_id';
    }
}
