<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MasterNameExtension extends Model
{
    protected $guarded = [];
    public $incrementing = false;
    protected $primaryKey = 'key';
}
