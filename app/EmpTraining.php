<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EmpTraining extends Model
{
    protected $table = 'emp_training';
    protected $guarded = [];

    public function basicInfo()
    {
        return $this->belongsTo(EmpBasicInfo::class);
    }
}
