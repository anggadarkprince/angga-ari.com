<?php

namespace App\Policies\Vault;

use App\Models\PasswordVault;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class PasswordVaultPolicy
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
     * Determine whether the user can view the password vault.
     *
     * @param User $user
     * @param PasswordVault $passwordVault
     * @return mixed
     */
    public function view(User $user, PasswordVault $passwordVault)
    {
        return $user->id === $passwordVault->user_id;
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
     * Determine whether the user can update the password vault.
     *
     * @param User $user
     * @param PasswordVault $passwordVault
     * @return mixed
     */
    public function update(User $user, PasswordVault $passwordVault)
    {
        return $user->id === $passwordVault->user_id;
    }

    /**
     * Determine whether the user can delete the password vault.
     *
     * @param User $user
     * @param PasswordVault $passwordVault
     * @return mixed
     */
    public function delete(User $user, PasswordVault $passwordVault)
    {
        return $user->id === $passwordVault->user_id;
    }

    /**
     * Determine whether the user can restore the password vault.
     *
     * @param User $user
     * @param PasswordVault $passwordVault
     * @return mixed
     */
    public function restore(User $user, PasswordVault $passwordVault)
    {
        return $user->id === $passwordVault->user_id;
    }

    /**
     * Determine whether the user can permanently delete the password vault.
     *
     * @param User $user
     * @param PasswordVault $passwordVault
     * @return mixed
     */
    public function forceDelete(User $user, PasswordVault $passwordVault)
    {
        return $user->id === $passwordVault->user_id;
    }
}
