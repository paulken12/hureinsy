<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EmpCriminalInfo extends Model
{
    protected $table = 'emp_criminal_info';
    protected $guarded = [];

    public function basicInfo()
    {
        return $this->belongsTo(EmpBasicInfo::class);
    }
}
