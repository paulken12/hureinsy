<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EmpCharacterReference extends Model
{
    protected $table = 'emp_character_reference';
    protected $guarded = [];

    public function basicInfo()
    {
        return $this->belongsTo(EmpBasicInfo::class);
    }
}
