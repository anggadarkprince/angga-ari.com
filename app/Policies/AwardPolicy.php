<?php

namespace App\Policies;

use App\Award;
use App\User;
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
     * Determine if the given eduction can be updated by the user.
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
     * Determine if the given education can be deleted by the user.
     *
     * @param User $user
     * @param Award $award
     * @return bool
     */
    public function destroy(User $user, Award $award)
    {
        return $user->id === $award->user_id;
    }
}
