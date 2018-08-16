<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EmpAddressInfo extends Model
{
    protected $table = 'emp_address_info';
    protected $guarded = [];

    public function basicInfo()
    {
        return $this->belongsTo(EmpBasicInfo::class);
    }

    public function address() {
        return $this->belongsTo(MasterAddressType::class, 'master_address_key');
    }

    public function getAddressAttribute() {
        return  $this->address()->pluck('address_type')->first();
    }

}
