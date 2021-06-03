<?php

namespace App\Policies;

use App\Models\Education;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class EducationPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Determine if the given eduction can be updated by the user.
     *
     * @param User $user
     * @param Education $education
     * @return bool
     */
    public function update(User $user, Education $education)
    {
        return $user->id === $education->user_id;
    }

    /**
     * Determine if the given education can be deleted by the user.
     *
     * @param User $user
     * @param Education $education
     * @return bool
     */
    public function destroy(User $user, Education $education)
    {
        return $user->id === $education->user_id;
    }
}
