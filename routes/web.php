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

Route::get('/', 'PageController@index')->name('index');

Auth::routes();

Route::get('/register/activate/{token}', 'Auth\RegisterController@activate')->name('register.activation');
Route::post('/register/resend', 'Auth\RegisterController@resendEmailActivation')->name('register.resend');

Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('blog')->group(function () {
    Route::view('/', 'blog.index')->name('blog');
    Route::view('/category/{slug}', 'blog.index')->name('blog.category');
    Route::view('/tag/{slug}', 'blog.index')->name('blog.tag');
    Route::view('/{year}/{month}/{slug}', 'blog.article')->name('blog.article');
    Route::view('/author/{username}', 'blog.author')->name('blog.author');
});

Route::view('/showcase/{slug}', 'landing.showcase.view')->name('showcase.view');
Route::view('/showcases', 'landing.showcase.index')->name('showcase');

Route::prefix('setting')->group(function () {
    Route::view('/profile', 'setting.profile')->name('setting.profile');
    Route::view('/contact', 'setting.contact')->name('setting.contact');
    Route::view('/password', 'setting.password')->name('setting.password');
    Route::view('/notification', 'setting.notification')->name('setting.notification');
});

Route::view('/help', 'statics.help')->name('help');
Route::view('/subscribe', 'statics.subscribe')->name('subscribe');


Route::prefix('app')->group(function () {
    Route::prefix('showcase')->group(function () {
        Route::view('/', 'showcase.portfolio')->name('showcase.portfolio');
        Route::view('/achievement', 'showcase.achievement')->name('showcase.achievement');
        Route::view('/skill', 'showcase.skill')->name('showcase.skill');
        Route::view('/profile', 'showcase.profile')->name('showcase.profile');
    });

    Route::prefix('blog')->group(function () {
        Route::view('/', 'blog.post')->name('blog.post');
        Route::view('/category', 'blog.category')->name('blog.category');
        Route::view('/taxonomy', 'blog.taxonomy')->name('blog.taxonomy');
        Route::view('/preference', 'blog.preference')->name('blog.preference');
    });

    Route::prefix('drive')->group(function () {
        Route::view('/', 'drive.browser')->name('drive.browser');
        Route::view('/album', 'drive.album')->name('drive.album');
        Route::view('/analyzer', 'drive.analyzer')->name('drive.analyzer');
        Route::view('/trash', 'drive.trash')->name('drive.trash');
        Route::view('/file/{token}', 'drive.view')->name('drive.view');
    });

    Route::prefix('note')->group(function () {
        Route::view('/', 'note.notebook')->name('note.notebook');
        Route::view('/category', 'note.category')->name('note.category');
        Route::view('/note', 'note.note')->name('note.note');
        Route::view('/todo', 'note.todo')->name('note.todo');
    });

    Route::prefix('finance')->group(function () {
        Route::view('/', 'finance.transaction')->name('finance.transaction');
        Route::view('/wallet', 'finance.wallet')->name('finance.wallet');
        Route::view('/category', 'finance.category')->name('finance.category');
        Route::view('/report', 'finance.report')->name('finance.report');
        Route::view('/preference', 'finance.preference')->name('finance.preference');
    });

    Route::prefix('vault')->group(function () {
        Route::view('/', 'vault.password')->name('vault.password');
        Route::view('/activity', 'vault.activity')->name('vault.activity');
        Route::view('/preference', 'vault.preference')->name('vault.preference');
    });
});