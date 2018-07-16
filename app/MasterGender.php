<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MasterGender extends Model
{
    protected $guarded = [];
    public $incrementing = false;
    protected $primaryKey = 'key';

    public function basicInfo() {
        return $this->hasMany(EmpBasicInfo::class);
    }

    public function getRouteKeyName() {
        return 'name';
    }
}
