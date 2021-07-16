<?php

namespace App\Policies\Wallet;

use App\Models\User;
use App\Models\Wallet;
use Illuminate\Auth\Access\HandlesAuthorization;

class WalletPolicy
{
    use HandlesAuthorization;

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
     * Determine whether the user can view the model.
     *
     * @param User $user
     * @param Wallet $wallet
     * @return mixed
     */
    public function view(User $user, Wallet $wallet)
    {
        return $user->id === $wallet->user_id;
    }

    /**
     * Determine whether the user can create models.
     *
     * @param User $user
     * @return mixed
     */
    public function create(User $user)
    {
        return true;
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param User $user
     * @param Wallet $wallet
     * @return mixed
     */
    public function update(User $user, Wallet $wallet)
    {
        return $user->id === $wallet->user_id;
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param User $user
     * @param Wallet $wallet
     * @return mixed
     */
    public function delete(User $user, Wallet $wallet)
    {
        return $user->id === $wallet->user_id;
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param User $user
     * @param Wallet $wallet
     * @return mixed
     */
    public function restore(User $user, Wallet $wallet)
    {
        return $user->id === $wallet->user_id;
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param User $user
     * @param Wallet $wallet
     * @return mixed
     */
    public function forceDelete(User $user, Wallet $wallet)
    {
        return $user->id === $wallet->user_id;
    }
}
