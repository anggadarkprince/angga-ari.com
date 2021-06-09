<?php

namespace App\Policies\Showcase;

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
     * Determine whether the user can view any portfolio.
     *
     * @param User $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        return true;
    }

    /**
     * Determine whether the user can view the portfolio.
     *
     * @param User $user
     * @param Portfolio $portfolio
     * @return mixed
     */
    public function view(User $user, Portfolio $portfolio)
    {
        return $user->id === $portfolio->user_id;
    }

    /**
     * Determine whether the user can create portfolio.
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
    public function delete(User $user, Portfolio $portfolio)
    {
        return $user->id === $portfolio->user_id;
    }
}
