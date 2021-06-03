<?php

namespace App\Policies;

use App\Models\Portfolio;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class PortfolioPolicy
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
     * @param Portfolio $portfolio
     * @return bool
     */
    public function update(User $user, Portfolio $portfolio)
    {
        return $user->id === $portfolio->user_id;
    }

    /**
     * Determine if the given skill can be deleted by the user.
     *
     * @param User $user
     * @param Portfolio $portfolio
     * @return bool
     */
    public function destroy(User $user, Portfolio $portfolio)
    {
        return $user->id === $portfolio->user_id;
    }
}
