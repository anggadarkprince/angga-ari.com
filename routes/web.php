<?php

use App\Http\Controllers\Auth\ConfirmPasswordController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LoginSocialController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\ResetPasswordController;
use App\Http\Controllers\Auth\VerificationController;
use App\Http\Controllers\Blog\BlogController;
use App\Http\Controllers\Blog\CategoryController;
use App\Http\Controllers\Blog\PostController;
use App\Http\Controllers\Blog\PreferenceController;
use App\Http\Controllers\Blog\TaxonomyController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\Showcase\AchievementController;
use App\Http\Controllers\Showcase\AwardController;
use App\Http\Controllers\Showcase\EducationController;
use App\Http\Controllers\Showcase\ExperienceController;
use App\Http\Controllers\Showcase\PortfolioController;
use App\Http\Controllers\Showcase\ProfileController;
use App\Http\Controllers\Showcase\ShowcaseController;
use App\Http\Controllers\Showcase\SkillController;
use App\Http\Controllers\UploadController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::domain(env('APP_URL'))->group(function () {
    Route::get('/', [LandingController::class, 'index'])->name('index');
    Route::view('/help', 'statics.help')->name('help');
    Route::view('/privacy', 'statics.privacy')->name('privacy');
    Route::view('/agreement', 'statics.agreement')->name('agreement');
    Route::view('/cookie', 'statics.cookie')->name('cookie');
    Route::view('/premium', 'statics.premium')->name('premium');
    Route::view('/coming-soon', 'statics.coming-soon')->name('coming_soon');

    Route::get('contact', [ContactController::class, 'form'])->name('contact');
    Route::post('contact', [ContactController::class, 'save'])->name('contact.save');
});

Route::domain(env('APP_BLOG_URL'))->group(function () {
    Route::view('/', 'blog.index')->name('blog');
    Route::view('/category/{slug}', 'blog.index')->name('blog.article.category');
    Route::view('/tag/{slug}', 'blog.index')->name('blog.tag');
    Route::view('/{year}/{month}/{slug}', 'blog.article')->name('blog.article');
    Route::view('/author/{username}', 'blog.author')->name('blog.author');
});

Route::domain(env('APP_SHOWCASE_URL'))->group(function () {
    Route::view('/', 'landing.showcase.index')->name('showcase');
    Route::view('/{slug}', 'landing.showcase.view')->name('showcase.view');
    Route::get('/{user}/generate', [ShowcaseController::class, 'generate'])->name('showcase.generate');
});

Route::domain(env('APP_ACCOUNT_URL'))->group(function () {

    // Redirect to login
    Route::get('/', function () {
        return redirect(route('login'));
    });

    // Login Routes
    Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
    Route::post('login', [LoginController::class, 'login']);

    // Logout Routes
    Route::post('logout', [LoginController::class, 'logout'])->name('logout');

    // Registration
    Route::get('register', [RegisterController::class, 'showRegistrationForm'])->name('register');
    Route::post('register', [RegisterController::class, 'register']);

    // Password Reset
    Route::get('password/reset', [ForgotPasswordController::class, 'showLinkRequestForm'])->name('password.request');
    Route::post('password/email', [ForgotPasswordController::class, 'sendResetLinkEmail'])->name('password.email');
    Route::get('password/reset/{token}', [ResetPasswordController::class, 'showResetForm'])->name('password.reset');
    Route::post('password/reset', [ResetPasswordController::class, 'reset'])->name('password.update');

    // Confirm Password
    Route::get('password/confirm', [ConfirmPasswordController::class, 'showConfirmForm'])->name('password.confirm');
    Route::post('password/confirm', [ConfirmPasswordController::class, 'confirm']);

    // Email Verification
    Route::get('email/verify', [VerificationController::class, 'show'])->middleware('auth')->name('verification.notice');
    Route::get('email/verify/{id}/{hash}', [VerificationController::class, 'verify'])->middleware(['auth', 'signed'])->name('verification.verify');
    Route::post('email/resend', [VerificationController::class, 'resend'])->middleware(['auth', 'throttle:6,1'])->name('verification.resend');

    // Social Auth
    Route::get('login/{provider}', [LoginSocialController::class, 'redirectToProvider'])->name('social.login');
    Route::get('login/{provider}/callback', [LoginSocialController::class, 'handleProviderCallback'])->name('social.callback');

    // Register (should moved to Email verification route)
    //Route::get('register/activate/{token}', [RegisterController::class, 'activate'])->name('register.activation');
    //Route::post('register/resend', [RegisterController::class, 'resendEmailActivation'])->name('register.resend');
});

Route::domain(env('APP_DASHBOARD_URL'))->group(function () {
    Route::get('taxonomy/search', [TaxonomyController::class, 'search'])->name('taxonomy.search');
    Route::post('upload', [UploadController::class, 'upload'])->name('uploader.upload');

    Route::middleware(['auth', 'verified'])->group(function () {
        Route::get('/', [HomeController::class, 'index'])->name('home');

        Route::prefix('setting')->group(function () {
            Route::get('profile', [SettingController::class, 'profile'])->name('setting.profile');
            Route::put('profile', [SettingController::class, 'updateProfile'])->name('setting.profile.update');

            Route::get('contact', [SettingController::class, 'contact'])->name('setting.contact');
            Route::put('contact', [SettingController::class, 'updateContact'])->name('setting.contact.update');

            Route::get('contact/{provider}', [LoginSocialController::class, 'redirectToProvider'])->name('setting.contact.bind');
            Route::get('contact/{provider}/unbind', [LoginSocialController::class, 'unbindProvider'])->name('setting.contact.unbind');
            Route::get('contact/{provider}/callback', [LoginSocialController::class, 'handleProviderCallback'])->name('setting.contact.callback');

            Route::get('password', [SettingController::class, 'password'])->name('setting.password');
            Route::put('password', [SettingController::class, 'updatePassword'])->name('setting.password.update');

            Route::get('notification', [SettingController::class, 'notification'])->name('setting.notification');
            Route::put('notification', [SettingController::class, 'updateNotification'])->name('setting.notification.update');
        });

        Route::prefix('showcase')->group(function () {
            Route::get('achievements', [AchievementController::class, 'index'])->name('showcase.achievement');

            Route::resource('educations', EducationController::class)
                ->except(['index', 'create', 'edit'])
                ->names([
                    'store' => 'showcase.educations.store',
                    'show' => 'showcase.educations.show',
                    'update' => 'showcase.educations.update',
                    'destroy' => 'showcase.educations.destroy'
                ]);

            Route::resource('experiences', ExperienceController::class)
                ->except(['index', 'create', 'edit'])
                ->names([
                    'store' => 'showcase.experiences.store',
                    'show' => 'showcase.experiences.show',
                    'update' => 'showcase.experiences.update',
                    'destroy' => 'showcase.experiences.destroy'
                ]);

            Route::resource('awards', AwardController::class)
                ->except(['index', 'create', 'edit'])
                ->names([
                    'store' => 'showcase.awards.store',
                    'show' => 'showcase.awards.show',
                    'update' => 'showcase.awards.update',
                    'destroy' => 'showcase.awards.destroy'
                ]);

            Route::resource('skills', SkillController::class)
                ->except(['create', 'edit'])
                ->names([
                    'index' => 'showcase.skill',
                    'store' => 'showcase.skills.store',
                    'show' => 'showcase.skills.show',
                    'update' => 'showcase.skills.update',
                    'destroy' => 'showcase.skills.destroy'
                ]);

            Route::get('profile', [ProfileController::class, 'edit'])->name('showcase.profile');
            Route::put('profile', [ProfileController::class, 'update'])->name('showcase.profile.update');

            Route::post('portfolios/upload', [PortfolioController::class, 'upload'])->name('showcase.portfolio.upload');
            Route::delete('portfolios/delete_upload', [PortfolioController::class, 'deleteUpload'])->name('showcase.portfolio.upload.delete');
            Route::resource('portfolios', PortfolioController::class)
                ->names([
                    'index' => 'showcase.portfolio',
                    'create' => 'showcase.portfolio.create',
                    'store' => 'showcase.portfolio.store',
                    'show' => 'showcase.portfolio.show',
                    'edit' => 'showcase.portfolio.edit',
                    'update' => 'showcase.portfolio.update',
                    'destroy' => 'showcase.portfolio.destroy'
                ]);

            Route::get('/', [ShowcaseController::class, 'index'])->name('showcase.index');
        });

        Route::prefix('blog')->group(function () {
            Route::get('/', [BlogController::class, 'index'])->name('blog.index');

            Route::get('preference', [PreferenceController::class, 'basic'])->name('blog.preference');
            Route::put('preference', [PreferenceController::class, 'update'])->name('blog.preference.update');

            Route::resource('posts', PostController::class)->names([
                'index' => 'blog.post',
                'create' => 'blog.post.create',
                'store' => 'blog.post.store',
                'show' => 'blog.post.show',
                'edit' => 'blog.post.edit',
                'update' => 'blog.post.update',
                'destroy' => 'blog.post.destroy',
            ]);
            Route::apiResource('categories', CategoryController::class)->names([
                'index' => 'blog.category',
                'store' => 'blog.category.store',
                'show' => 'blog.category.show',
                'update' => 'blog.category.update',
                'destroy' => 'blog.category.destroy',
            ]);

            Route::get('taxonomy', [TaxonomyController::class, 'index'])->name('blog.taxonomy');
        });

        Route::prefix('drive')->group(function () {
            Route::view('/album', 'drive.album')->name('drive.album');
            Route::view('/analyzer', 'drive.analyzer')->name('drive.analyzer');
            Route::view('/trash', 'drive.trash')->name('drive.trash');
            Route::view('/file/{token}', 'drive.view')->name('drive.view');
            Route::view('/{browser?}', 'drive.browser')->name('drive.browser');
        });

        Route::prefix('journal')->group(function () {
            Route::view('/category', 'journal.category')->name('journal.category');
            Route::view('/note', 'journal.note')->name('journal.note');
            Route::view('/note/create', 'journal.note.create')->name('journal.note.create');
            Route::view('/todo', 'journal.todo')->name('journal.todo');
            Route::view('/{notebook?}', 'journal.notebook')->name('journal.notebook');
        });

        Route::prefix('finance')->group(function () {
            Route::view('/wallet', 'finance.wallet')->name('finance.wallet');
            Route::view('/wallet/create', 'finance.wallet.create')->name('finance.wallet.create');
            Route::view('/wallet/view', 'finance.wallet.view')->name('finance.wallet.view');

            Route::view('/category', 'finance.category')->name('finance.category');
            Route::view('/category/create', 'finance.category.create')->name('finance.category.create');

            Route::view('/report', 'finance.report')->name('finance.report');

            Route::view('/preference', 'finance.preference')->name('finance.preference');

            Route::view('/transaction/create', 'finance.transaction.create')->name('finance.transaction.create');
            Route::view('/transaction/view', 'finance.transaction.view')->name('finance.transaction.view');
            Route::view('/{transaction?}', 'finance.transaction')->name('finance.transaction');
        });

        Route::prefix('vault')->group(function () {
            Route::view('/activity', 'vault.activity')->name('vault.activity');
            Route::view('/preference', 'vault.preference')->name('vault.preference');

            Route::view('/password/create', 'vault.password.create')->name('vault.password.create');
            Route::view('/{password?}', 'vault.password')->name('vault.password');
        });
    });
});
