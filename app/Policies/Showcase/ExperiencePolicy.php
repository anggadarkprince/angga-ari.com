<?php

namespace App\Policies\Showcase;

use App\Models\Experience;
use App\Models\User;
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
     * Determine whether the user can view any experience.
     *
     * @param User $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        return true;
    }

    /**
     * Determine whether the user can view the experience.
     *
     * @param User $user
     * @param Experience $experience
     * @return mixed
     */
    public function view(User $user, Experience $experience)
    {
        return $user->id === $experience->user_id;
    }

    /**
     * Determine whether the user can create experience.
     *
     * @param User $user
     * @return mixed
     */
    public function create(User $user)
    {
        return true;
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
    public function delete(User $user, Experience $experience)
    {
        return $user->id === $experience->user_id;
    }
}
