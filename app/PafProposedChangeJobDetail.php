<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PafProposedChangeJobDetail extends Model
{
    protected $table = 'paf_proposed_change_job_details';
    protected $guarded = [];
    
 	function natureOfAction() 
 	{
        return $this->belongsTo(PafNatureOfAction::class);
    }
}
