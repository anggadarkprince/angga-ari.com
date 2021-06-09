<?php

namespace App\Policies\Showcase;

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
     * Determine whether the user can view any skill.
     *
     * @param User $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        return true;
    }

    /**
     * Determine whether the user can view the skill.
     *
     * @param User $user
     * @param Skill $skill
     * @return mixed
     */
    public function view(User $user, Skill $skill)
    {
        return $user->id === $skill->user_id;
    }

    /**
     * Determine whether the user can create skill.
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
    public function delete(User $user, Skill $skill)
    {
        return $user->id === $skill->user_id;
    }
}
