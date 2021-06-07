<?php

namespace App\Policies\Journal;

use App\Models\Note;
use App\Models\Notebook;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class NotePolicy
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
     * Determine whether the user can view the note.
     *
     * @param User $user
     * @param Note $note
     * @return mixed
     */
    public function view(User $user, Note $note)
    {
        return $user->id === $note->notebook->user_id;
    }

    /**
     * Determine whether the user can create models.
     *
     * @param User $user
     * @param Notebook $notebook
     * @return mixed
     */
    public function create(User $user, Notebook $notebook)
    {
        return $user->id === $notebook->user_id;
    }

    /**
     * Determine if the given note can be updated by the user.
     *
     * @param User $user
     * @param Notebook $notebook
     * @param Note $note
     * @return bool
     */
    public function update(User $user, Notebook $notebook, Note $note)
    {
        //the note must live inside the notebook
        //return $user->id === $notebook->user_id && $notebook->id == $note->notebook_id;

        return $user->id === $notebook->user_id && $user->id == $note->notebook->user_id;
    }

    /**
     * Determine if the given note can be deleted by the user.
     *
     * @param User $user
     * @param Note $note
     * @return bool
     */
    public function delete(User $user, Note $note)
    {
        return $user->id === $note->notebook->user_id;
    }
}
