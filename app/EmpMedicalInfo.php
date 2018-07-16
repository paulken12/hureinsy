<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EmpMedicalInfo extends Model
{
    protected $table = 'emp_medical_info';
    protected $guarded = [];

    public function basicInfo()
    {
        return $this->belongsTo(EmpBasicInfo::class);
    }

    public function bloodType() {
        return $this->belongsTo(MasterBloodType::class, 'master_blood_key');
    }
}
