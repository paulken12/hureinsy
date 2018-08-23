<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reassessment extends Model
{
    public function getRouteKeyName()
    {
        return 'company_id';
    }
}
