<?php

namespace App\Policies\Showcase;

use App\Models\Post;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class PostPolicy
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
     * @param Post $post
     * @return bool
     */
    public function update(User $user, Post $post)
    {
        return $user->id === $post->user_id;
    }

    /**
     * Determine if the given skill can be deleted by the user.
     *
     * @param User $user
     * @param Post $post
     * @return bool
     */
    public function destroy(User $user, Post $post)
    {
        return $user->id === $post->user_id;
    }
}
