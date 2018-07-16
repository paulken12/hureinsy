<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EmpImage extends Model
{
    protected $table = 'emp_image';
    protected $guarded = [];

    public function basicInfo()
    {
        return $this->belongsTo(EmpBasicInfo::class);
    }
}
