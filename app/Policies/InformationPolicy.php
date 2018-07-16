<?php

namespace App\Policies;

use App\User;
use App\EmpBasicInfo;
use Illuminate\Auth\Access\HandlesAuthorization;

class InformationPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view the emp basic info.
     *
     * @param  \App\User $signedInUser
     * @param EmpBasicInfo $info
     * @return mixed
     */
    public function view(User $signedInUser, EmpBasicInfo $info)
    {
        return $info->user_id === $signedInUser->id;
    }

    /**
     * Determine whether the user can create emp basic infos.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the emp basic info.
     *
     * @param  \App\User  $user
     * @param  \App\EmpBasicInfo  $empBasicInfo
     * @return mixed
     */
    public function update(User $user, EmpBasicInfo $empBasicInfo)
    {
        return $empBasicInfo->user_id === $user->id;
    }

    /**
     * Determine whether the user can delete the emp basic info.
     *
     * @param  \App\User  $user
     * @param  \App\EmpBasicInfo  $empBasicInfo
     * @return mixed
     */
    public function delete(User $user, EmpBasicInfo $empBasicInfo)
    {
        //
    }
}
