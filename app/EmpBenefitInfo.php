<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EmpBenefitInfo extends Model
{
    protected $table = 'emp_benefit_info';
    protected $guarded = [];

    public function basicInfo()
    {
        return $this->belongsTo(EmpBasicInfo::class);
    }
}
