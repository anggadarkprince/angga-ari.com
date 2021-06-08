<?php

namespace App\Policies\Showcase;

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
     * Determine whether the user can view any awards.
     *
     * @param User $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        return true;
    }

    /**
     * Determine whether the user can view the education.
     *
     * @param User $user
     * @param Education $education
     * @return mixed
     */
    public function view(User $user, Education $education)
    {
        return $user->id === $education->user_id;
    }

    /**
     * Determine whether the user can create notebook.
     *
     * @param User $user
     * @return mixed
     */
    public function create(User $user)
    {
        return true;
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
    public function delete(User $user, Education $education)
    {
        return $user->id === $education->user_id;
    }
}
