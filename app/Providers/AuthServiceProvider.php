<?php

namespace App\Providers;

use App\Models\Award;
use App\Models\Education;
use App\Models\Experience;
use App\Models\Note;
use App\Models\Notebook;
use App\Models\PasswordVault;
use App\Models\Portfolio;
use App\Models\Post;
use App\Models\Skill;
use App\Models\Task;
use App\Models\Taxonomy;
use App\Models\Transaction;
use App\Models\Upload;
use App\Models\Wallet;
use App\Policies\Blog\PostPolicy;
use App\Policies\Drive\UploadPolicy;
use App\Policies\Journal\NotebookPolicy;
use App\Policies\Journal\NotePolicy;
use App\Policies\Journal\TaskPolicy;
use App\Policies\Showcase\AwardPolicy;
use App\Policies\Showcase\EducationPolicy;
use App\Policies\Showcase\ExperiencePolicy;
use App\Policies\Showcase\PortfolioPolicy;
use App\Policies\Showcase\SkillPolicy;
use App\Policies\TaxonomyPolicy;
use App\Policies\Vault\PasswordVaultPolicy;
use App\Policies\Wallet\TransactionPolicy;
use App\Policies\Wallet\WalletPolicy;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        Notebook::class => NotebookPolicy::class,
        Note::class => NotePolicy::class,
        Task::class => TaskPolicy::class,

        Award::class => AwardPolicy::class,
        Education::class => EducationPolicy::class,
        Experience::class => ExperiencePolicy::class,
        Skill::class => SkillPolicy::class,
        Portfolio::class => PortfolioPolicy::class,

        Taxonomy::class => TaxonomyPolicy::class,
        Post::class => PostPolicy::class,

        PasswordVault::class => PasswordVaultPolicy::class,

        Wallet::class => WalletPolicy::class,
        Transaction::class => TransactionPolicy::class,

        Upload::class => UploadPolicy::class,
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
