<?php

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

use Illuminate\Support\Facades\Route;

Route::domain(env('APP_URL'))->group(function () {
    Route::get('/', 'LandingController@index')->name('index');
    Route::view('/help', 'statics.help')->name('help');
    Route::view('/privacy', 'statics.privacy')->name('privacy');
    Route::view('/agreement', 'statics.agreement')->name('agreement');
    Route::view('/cookie', 'statics.cookie')->name('cookie');
    Route::view('/premium', 'statics.premium')->name('premium');
    Route::view('/coming_soon', 'statics.coming_soon')->name('coming_soon');

    Route::get('contact', 'ContactController@form')->name('contact');
    Route::post('contact', 'ContactController@save')->name('contact.save');
});

Route::domain('blog.' . env('APP_URL'))->group(function () {
    Route::view('/', 'blog.index')->name('blog');
    Route::view('/category/{slug}', 'blog.index')->name('blog.article.category');
    Route::view('/tag/{slug}', 'blog.index')->name('blog.tag');
    Route::view('/{year}/{month}/{slug}', 'blog.article')->name('blog.article');
    Route::view('/author/{username}', 'blog.author')->name('blog.author');
});

Route::domain('showcase.' . env('APP_URL'))->group(function () {
    Route::view('/', 'landing.showcase.index')->name('showcase');
    Route::view('/{portfolio}', 'landing.showcase.view')->name('showcase.view');
    Route::get('/{user}/generate', 'Showcase\ShowcaseController@generate')->name('showcase.generate');
});

Route::domain('account.' . env('APP_URL'))->group(function () {
    Route::auth();

    Route::get('/', function () {
        return redirect(route('login'));
    });

    // Social Auth
    Route::get('login/{provider}', 'Auth\LoginSocialController@redirectToProvider')->name('social.login');
    Route::get('login/{provider}/callback', 'Auth\LoginSocialController@handleProviderCallback')->name('social.callback');

    // Register
    Route::get('register/activate/{token}', 'Auth\RegisterController@activate')->name('register.activation');
    Route::post('register/resend', 'Auth\RegisterController@resendEmailActivation')->name('register.resend');
});

Route::domain('dashboard.' . env('APP_URL'))->group(function () {
    Route::get('taxonomy/search', 'TaxonomyController@search')->name('taxonomy.search');
    Route::post('upload', 'UploadController@upload')->name('uploader.upload');

    Route::middleware(['auth'])->group(function () {
        Route::get('/', 'HomeController@index')->name('home');

        Route::prefix('setting')->group(function () {
            Route::get('profile', 'SettingController@profile')->name('setting.profile');
            Route::put('profile', 'SettingController@updateProfile')->name('setting.profile.update');

            Route::get('contact', 'SettingController@contact')->name('setting.contact');
            Route::put('contact', 'SettingController@updateContact')->name('setting.contact.update');

            Route::get('contact/{provider}', 'Auth\LoginSocialController@redirectToProvider')->name('setting.contact.bind');
            Route::get('contact/{provider}/unbind', 'Auth\LoginSocialController@unbindProvider')->name('setting.contact.unbind');
            Route::get('contact/{provider}/callback', 'Auth\LoginSocialController@handleProviderCallback')->name('setting.contact.callback');

            Route::get('password', 'SettingController@password')->name('setting.password');
            Route::put('password', 'SettingController@updatePassword')->name('setting.password.update');

            Route::get('notification', 'SettingController@notification')->name('setting.notification');
            Route::put('notification', 'SettingController@updateNotification')->name('setting.notification.update');
        });

        Route::prefix('showcase')->group(function () {
            Route::get('achievement', 'Showcase\AchievementController@index')->name('showcase.achievement');

            Route::resource('educations', 'Showcase\EducationController')
                ->except(['index', 'create', 'edit'])
                ->names([
                    'store' => 'showcase.educations.store',
                    'show' => 'showcase.educations.show',
                    'update' => 'showcase.educations.update',
                    'destroy' => 'showcase.educations.destroy'
                ]);

            Route::resource('experiences', 'Showcase\ExperienceController')
                ->except(['index', 'create', 'edit'])
                ->names([
                    'store' => 'showcase.experiences.store',
                    'show' => 'showcase.experiences.show',
                    'update' => 'showcase.experiences.update',
                    'destroy' => 'showcase.experiences.destroy'
                ]);

            Route::resource('awards', 'Showcase\AwardController')
                ->except(['index', 'create', 'edit'])
                ->names([
                    'store' => 'showcase.awards.store',
                    'show' => 'showcase.awards.show',
                    'update' => 'showcase.awards.update',
                    'destroy' => 'showcase.awards.destroy'
                ]);

            Route::resource('skills', 'Showcase\SkillController')
                ->except(['create', 'edit'])
                ->names([
                    'index' => 'showcase.skill',
                    'store' => 'showcase.skills.store',
                    'show' => 'showcase.skills.show',
                    'update' => 'showcase.skills.update',
                    'destroy' => 'showcase.skills.destroy'
                ]);

            Route::get('profile', 'Showcase\ProfileController@edit')->name('showcase.profile');
            Route::put('profile', 'Showcase\ProfileController@update')->name('showcase.profile.update');

            Route::post('portfolio/upload', 'Showcase\PortfolioController@upload')->name('showcase.portfolio.upload');
            Route::delete('portfolio/delete_upload', 'Showcase\PortfolioController@deleteUpload')->name('showcase.portfolio.upload.delete');
            Route::resource('portfolio', 'Showcase\PortfolioController')
                ->names([
                    'index' => 'showcase.portfolio',
                    'create' => 'showcase.portfolio.create',
                    'store' => 'showcase.portfolio.store',
                    'show' => 'showcase.portfolio.show',
                    'edit' => 'showcase.portfolio.edit',
                    'update' => 'showcase.portfolio.update',
                    'destroy' => 'showcase.portfolio.destroy'
                ]);

            Route::get('/', 'Showcase\ShowcaseController@index')->name('showcase.index');
        });

        Route::prefix('blog')->group(function () {
            Route::get('/', 'Blog\BlogController@index')->name('blog.index');

            Route::get('preference', 'Blog\PreferenceController@basic')->name('blog.preference');
            Route::put('preference', 'Blog\PreferenceController@update')->name('blog.preference.update');

            Route::get('post', 'Blog\PostController@index')->name('blog.post');
            Route::get('post/create', 'Blog\PostController@create')->name('blog.post.create');
            Route::post('post', 'Blog\PostController@store')->name('blog.post.store');
            Route::get('post/{id}/preview', 'Blog\PostController@preview')->name('blog.post.preview');
            Route::get('post/{post}/edit', 'Blog\PostController@edit')->name('blog.post.edit');
            Route::put('post/{post}', 'Blog\PostController@update')->name('blog.post.update');
            Route::delete('post/{post}', 'Blog\PostController@destroy')->name('blog.post.destroy');

            Route::get('category', 'Blog\CategoryController@index')->name('blog.category');
            Route::post('category', 'Blog\CategoryController@store')->name('blog.category.store');
            Route::get('category/{taxonomy}', 'Blog\CategoryController@show')->name('blog.category.show');
            Route::put('category/{taxonomy}', 'Blog\CategoryController@update')->name('blog.category.update');
            Route::delete('category/{taxonomy}', 'Blog\CategoryController@destroy')->name('blog.category.destroy');

            Route::get('taxonomy', 'Blog\TaxonomyController@index')->name('blog.taxonomy');
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
