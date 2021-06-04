<?php

namespace App\Policies\Journal;

use App\Models\Notebook;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class NotebookPolicy
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
     * Determine whether the user can view the notebook.
     *
     * @param User $user
     * @param Notebook $notebook
     * @return mixed
     */
    public function view(User $user, Notebook $notebook)
    {
        return $user->id === $notebook->user_id;
    }

    /**
     * Determine whether the user can create notebook.
     *
     * @param User $user
     * @return mixed
     */
    public function create(User $user)
    {
        return true;
    }

    /**
     * Determine if the given notebook can be updated by the user.
     *
     * @param User $user
     * @param Notebook $notebook
     * @return bool
     */
    public function update(User $user, Notebook $notebook)
    {
        return $user->id === $notebook->user_id;
    }

    /**
     * Determine if the given notebook can be deleted by the user.
     *
     * @param User $user
     * @param Notebook $notebook
     * @return bool
     */
    public function destroy(User $user, Notebook $notebook)
    {
        return $user->id === $notebook->user_id;
    }
}
