<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EmpContactInfo extends Model
{
    protected $table = 'emp_contact_info';
    protected $guarded = [];

    public function basicInfo()
    {
        return $this->belongsTo(EmpBasicInfo::class);
    }
}
