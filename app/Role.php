<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $guarded = [];

    public function permissions()
    {
        return $this->belongsToMany(Permission::class);
    }

    public function paginate() {
        return $this->permissions()->paginate(4);
    }

    public function givePermissionTo(Permission $permission)
    {
        return $this->permissions()->save($permission);
    }

    public function status()
    {
        return $this->belongsToMany(Status::class);
    }
    
    public function sub_status()
    {
        return $this->belongsToMany(SubStatus::class);
    }

}
