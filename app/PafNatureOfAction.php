<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PafNatureOfAction extends Model
{
    protected $guarded = [];

	public function basicInfo()
    {
        return $this->belongsTo(EmpBasicInfo::class);
    }
}
