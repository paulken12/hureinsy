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

    protected $casts = [
      'verified'=>'boolean'
    ];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function basicInfo(){

        return $this->hasMany(EmpBasicInfo::class);
    }


    /**
     * Get the path to the user's avatar.
     *
     * @param  string $avatar
     * @return string
     */
    public function getAvatarPathAttribute($avatar){

        //return if user has a image if null return default
        return $avatar ? asset('storage/'.$avatar) :  asset('images/avatars/guest.png');
    }

    /**
     * Verified the user
     */
    public function verified() {

        //verified the user
        $this->verified = true;

        //delete the token
        $this->verification_token = null;

        $this->save();
    }

    /**
     * Check if the user is verified
     * @return mixed
     */
    public function confirmed() {

        return auth()->user()->verified;
    }
}
