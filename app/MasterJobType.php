<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MasterJobType extends Model
{
    protected $guarded = [];
    public $incrementing = false;
    protected $primaryKey = 'key';
    protected $table = "master_job_type";
}
