<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EmpEmergencyContact extends Model
{
    protected $table = 'emp_emergency_contact';
    protected $guarded = [];

    public function basicInfo()
    {
        return $this->belongsTo(EmpBasicInfo::class);
    }
}
