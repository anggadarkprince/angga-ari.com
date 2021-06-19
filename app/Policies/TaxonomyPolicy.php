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
     * Determine whether the user can view any models.
     *
     * @param User $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        return true;
    }

    /**
     * Determine whether the user can view the taxonomy.
     *
     * @param User $user
     * @param Taxonomy $taxonomy
     * @return mixed
     */
    public function view(User $user, Taxonomy $taxonomy)
    {
        if ($taxonomy->type == Taxonomy::TYPE_CATEGORY) {
            return $user->id === $taxonomy->user_id;
        }
        return true;
    }

    /**
     * Determine whether the user can create taxonomy.
     *
     * @param User $user
     * @return mixed
     */
    public function create(User $user)
    {
        return true;
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
        if ($taxonomy->type == Taxonomy::TYPE_CATEGORY) {
            return $user->id === $taxonomy->user_id;
        }
        return true;
    }

    /**
     * Determine if the given taxonomy can be deleted by the user.
     *
     * @param User $user
     * @param Taxonomy $taxonomy
     * @return bool
     */
    public function delete(User $user, Taxonomy $taxonomy)
    {
        if ($taxonomy->type == Taxonomy::TYPE_CATEGORY) {
            return $user->id === $taxonomy->user_id;
        }
        return $user->id === $taxonomy->user_id;
    }
}
