<?php

namespace App\Policies;

use App\Models\Taxonomy;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class TaxonomyPolicy
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
     * Determine if the given skill can be updated by the user.
     *
     * @param User $user
     * @param Taxonomy $taxonomy
     * @return bool
     */
    public function update(User $user, Taxonomy $taxonomy)
    {
        return $user->id === $taxonomy->user_id;
    }

    /**
     * Determine if the given skill can be deleted by the user.
     *
     * @param User $user
     * @param Taxonomy $taxonomy
     * @return bool
     */
    public function destroy(User $user, Taxonomy $taxonomy)
    {
        return $user->id === $taxonomy->user_id;
    }
}
