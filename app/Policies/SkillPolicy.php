<?php

namespace App\Policies;

use App\Models\Skill;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class SkillPolicy
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
     * @param Skill $skill
     * @return bool
     */
    public function update(User $user, Skill $skill)
    {
        return $user->id === $skill->user_id;
    }

    /**
     * Determine if the given skill can be deleted by the user.
     *
     * @param User $user
     * @param Skill $skill
     * @return bool
     */
    public function destroy(User $user, Skill $skill)
    {
        return $user->id === $skill->user_id;
    }
}
