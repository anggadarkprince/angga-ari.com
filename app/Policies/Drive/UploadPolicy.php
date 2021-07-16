<?php

namespace App\Policies\Drive;

use App\Models\Upload;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class UploadPolicy
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
     * Determine whether the user can view the notebook.
     *
     * @param User $user
     * @param Upload $upload
     * @return mixed
     */
    public function view(User $user, Upload $upload)
    {
        return $user->id === $upload->user_id;
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
     * @param Upload $upload
     * @param bool $isDirectory
     * @return mixed
     */
    public function update(User $user, Upload $upload, $isDirectory = false)
    {
        return $user->id === $upload->user_id && $upload->is_directory == $isDirectory;
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param User $user
     * @param Upload $upload
     * @return mixed
     */
    public function updateDirectory(User $user, Upload $upload)
    {
        return $user->id === $upload->user_id && $upload->is_directory;
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param User $user
     * @param Upload $upload
     * @return mixed
     */
    public function delete(User $user, Upload $upload)
    {
        return $user->id === $upload->user_id;
    }
}
