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

Route::domain(env('APP_URL'))->group(function () {
    Route::get('/', 'PageController@index')->name('index');
    Route::view('/contact', 'statics.contact')->name('contact');
    Route::view('/help', 'statics.help')->name('help');
    Route::view('/privacy', 'statics.privacy')->name('privacy');
    Route::view('/agreement', 'statics.agreement')->name('agreement');
    Route::view('/cookie', 'statics.cookie')->name('cookie');
    Route::view('/premium', 'statics.premium')->name('premium');
    Route::view('/coming_soon', 'statics.coming_soon')->name('coming_soon');
});

Route::domain('blog.' . env('APP_URL'))->group(function () {
    Route::view('/', 'blog.index')->name('blog');
    Route::view('/category/{slug}', 'blog.index')->name('blog.category');
    Route::view('/tag/{slug}', 'blog.index')->name('blog.tag');
    Route::view('/{year}/{month}/{slug}', 'blog.article')->name('blog.article');
    Route::view('/author/{username}', 'blog.author')->name('blog.author');
});

Route::domain('showcase.' . env('APP_URL'))->group(function () {
    Route::view('/', 'landing.showcase.index')->name('showcase');
    Route::view('/{slug}', 'landing.showcase.view')->name('showcase.view');
});

Route::domain('account.' . env('APP_URL'))->group(function () {
    Auth::routes();
    Route::get('/register/activate/{token}', 'Auth\RegisterController@activate')->name('register.activation');
    Route::post('/register/resend', 'Auth\RegisterController@resendEmailActivation')->name('register.resend');
});

Route::domain('dashboard.' . env('APP_URL'))->group(function () {
    Route::get('/', 'HomeController@index')->name('home');

    Route::prefix('setting')->group(function () {
        Route::view('/profile', 'setting.profile')->name('setting.profile');
        Route::view('/contact', 'setting.contact')->name('setting.contact');
        Route::view('/password', 'setting.password')->name('setting.password');
        Route::view('/notification', 'setting.notification')->name('setting.notification');
    });

    Route::prefix('showcase')->group(function () {
        Route::view('/achievement', 'showcase.achievement')->name('showcase.achievement');
        Route::view('/skill', 'showcase.skill')->name('showcase.skill');
        Route::view('/profile', 'showcase.profile')->name('showcase.profile');

        Route::view('/portfolio/create', 'showcase.portfolio.create')->name('showcase.portfolio.create');
        Route::view('/{portfolio?}', 'showcase.portfolio')->name('showcase.portfolio');
    });

    Route::prefix('blog')->group(function () {
        Route::view('/category', 'blog.category')->name('blog.category');
        Route::view('/taxonomy', 'blog.taxonomy')->name('blog.taxonomy');
        Route::view('/preference', 'blog.preference')->name('blog.preference');

        Route::view('/post/create', 'blog.post.create')->name('blog.post.create');
        Route::view('/{post?}', 'blog.post')->name('blog.post');
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
