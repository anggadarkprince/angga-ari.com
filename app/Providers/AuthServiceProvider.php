<?php

namespace App\Providers;

use App\Award;
use App\Education;
use App\Experience;
use App\Policies\AwardPolicy;
use App\Policies\EducationPolicy;
use App\Policies\ExperiencePolicy;
use App\Policies\SkillPolicy;
use App\Skill;
use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        'App\Model' => 'App\Policies\ModelPolicy',
        Education::class => EducationPolicy::class,
        Experience::class => ExperiencePolicy::class,
        Award::class => AwardPolicy::class,
        Skill::class => SkillPolicy::class,
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        //
    }
}
