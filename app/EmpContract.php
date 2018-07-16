<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EmpContract extends Model
{
    protected $table = 'emp_contract';
    protected $guarded = [];

    public function basicInfo()
    {
        return $this->belongsTo(EmpBasicInfo::class);
    }

    public function company() {
        return $this->belongsTo(MasterCompany::class, 'master_company_key');
    }

    public function department() {
        return $this->belongsTo(MasterDepartment::class, 'master_department_key');
    }
}
