<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EmpFamilyBackground extends Model
{
    protected $table = 'emp_family_background';
    protected $guarded = [];

    public function basicInfo()
    {
        return $this->belongsTo(EmpBasicInfo::class);
    }

    public function gender() {
        return $this->belongsTo(MasterGender::class, 'master_gender_key');
    }

    public function family() {
        return $this->belongsTo(MasterFamilyType::class, 'master_family_key');
    }
}
