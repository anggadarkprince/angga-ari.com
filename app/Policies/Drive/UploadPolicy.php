<?php

namespace App\Policies\Drive;

use App\Models\Upload;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class UploadPolicy
{
    use HandlesAuthorization;

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
