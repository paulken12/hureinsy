<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EmpSkillInfo extends Model
{
    protected $table = 'emp_skill_info';
    protected $guarded = [];

    public function basicInfo()
    {
        return $this->belongsTo(EmpBasicInfo::class);
    }
}
