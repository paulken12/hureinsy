<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PafProposedChangeScheduleDetail extends Model
{
    protected $table = 'paf_proposed_change_schedule_details';
    protected $guarded = [];
    
 	function natureOfAction() 
 	{
        return $this->belongsTo(PafNatureOfAction::class, 'request_id');
    }    
 	function schedType() 
 	{
        return $this->belongsTo(MasterPafScheduleType::class, 'proposed_key_schedule_type');
    }
}
