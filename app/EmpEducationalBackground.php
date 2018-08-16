<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EmpEducationalBackground extends Model
{
    protected $table = 'emp_educational_background';
    protected $guarded = [];

    public function basicInfo()
    {
        return $this->belongsTo(EmpBasicInfo::class);
    }

    public function background() {
        return $this->belongsTo(MasterEducationalType::class, 'master_education_key');
    }

    public function getBackgroundAttribute() {
        return  $this->background()->pluck('educational_level')->first();
    }
}
