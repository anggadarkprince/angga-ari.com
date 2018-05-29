<?php

namespace App\Policies;

use App\Experience;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class ExperiencePolicy
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
     * Determine if the given experience can be updated by the user.
     *
     * @param User $user
     * @param Experience $experience
     * @return bool
     */
    public function update(User $user, Experience $experience)
    {
        return $user->id === $experience->user_id;
    }

    /**
     * Determine if the given experience can be deleted by the user.
     *
     * @param User $user
     * @param Experience $experience
     * @return bool
     */
    public function destroy(User $user, Experience $experience)
    {
        return $user->id === $experience->user_id;
    }
}
