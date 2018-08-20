<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PafProposedChangeCompensationDetail extends Model
{    
	protected $table = 'paf_proposed_change_compensation_details';
    protected $guarded = [];
    
 	function natureOfAction() 
 	{
        return $this->belongsTo(PafNatureOfAction::class);
    }
}
