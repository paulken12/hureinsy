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

//        $gate->before(function ($user)
//        {
//            foreach ($user->roles as $role) {
//                if ($role->name === 'su' ||
//                    $role->name === 'adm'||
//                    $role->name === 'hr') return true;
//            }
//        });

        foreach ($this->getPermissions() as $permission)
        {
            $gate->define($permission->name, function ($user) use ($permission)
            {
               return $user->hasRole($permission->roles);
            });
        }
    }

    protected function getPermissions() {
        return Permission::with('roles')->get();
    }
}
