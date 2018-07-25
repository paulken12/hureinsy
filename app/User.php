<?php

namespace App;

use App\Traits\EmployeeRole;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable,EmployeeRole;

    protected $fillable = [
        'name', 'email', 'password', 'avatar_path',
    ];
    protected $hidden = [
        'password', 'remember_token',
    ];



    public function basicInfo()
    {
        return $this->hasMany(EmpBasicInfo::class);
    }
    /**
     * Get the route key name.
     *
     * @return string
     */
    public function getRouteKeyName()
    {
        return 'name';
    }

    /**
     * Get the path to the user's avatar.
     *
     * @param  string $avatar
     * @return string
     */
    public function getAvatarPathAttribute($avatar)
    {
        if($avatar)
        {
            return asset('storage/'.$avatar);
        }
        else{
            return asset('images/avatars/guest.png');
        }
    }
}
