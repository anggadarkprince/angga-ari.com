<?php

namespace App\Policies\Showcase;

use App\Models\Award;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class AwardPolicy
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
     * Determine whether the user can view the award.
     *
     * @param User $user
     * @param Award $award
     * @return mixed
     */
    public function view(User $user, Award $award)
    {
        return $user->id === $award->user_id;
    }

    /**
     * Determine whether the user can create award.
     *
     * @param User $user
     * @return mixed
     */
    public function create(User $user)
    {
        return true;
    }

    /**
     * Determine if the given award can be updated by the user.
     *
     * @param User $user
     * @param Award $award
     * @return bool
     */
    public function update(User $user, Award $award)
    {
        return $user->id === $award->user_id;
    }

    /**
     * Determine if the given award can be deleted by the user.
     *
     * @param User $user
     * @param Award $award
     * @return bool
     */
    public function delete(User $user, Award $award)
    {
        return $user->id === $award->user_id;
    }
}
