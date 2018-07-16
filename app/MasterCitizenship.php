<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MasterCitizenship extends Model
{
    protected $table = 'master_citizenship';
    public $incrementing = false;
    protected $primaryKey = 'key';
    protected $guarded = [];

}
