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
    public function destroy(User $user, Award $award)
    {
        return $user->id === $award->user_id;
    }
}
