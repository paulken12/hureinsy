<?php

namespace App\Providers;

use App\Permission;
use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Contracts\Auth\Access\Gate as GateContract;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        'App\User' => 'App\Policies\UserPolicy',
        'App\EmpBasicInfo' => 'App\Policies\InformationPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @param GateContract $gate
     * @return void
     */
    public function boot(GateContract $gate)
    {
        $this->registerPolicies();

//         before gate, get all admin and su
//        $gate->before(function ($user)
//        {
//             //can edit, update,delete all
//            foreach ($user->roles as $role) {
//                if ($role->name === 'su' ||
//                    $role->name === 'adm'||
//                    $role->name === 'hr') return true;
//            }
//        });

        //iterate the getPermission
         foreach ($this->getPermissions() as $permission)
         {
             //get the permission name and pass to var $permission
             $gate->define($permission->name, function ($user) use ($permission)
             {
                 //check if the user has role
                 //User model traits
                return $user->hasRole($permission->roles);
             });
         }
    }

    //get all permissions
     protected function getPermissions() {
         return Permission::with('roles')->get();
     }
}
