<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EmpWorkExperience extends Model
{
    protected $table = 'emp_work_experience';
    protected $guarded = [];

    public function basicInfo()
    {
        return $this->belongsTo(EmpBasicInfo::class);
    }

    public function title() {
        return $this->belongsTo(MasterJobTitle::class, 'master_job_title_key');
    }
}
