<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EmpJobDetail extends Model
{
    protected $table = 'emp_job_detail';
    protected $guarded = [];

    public function basicInfo()
    {
        return $this->belongsTo(EmpBasicInfo::class);
    }
}
