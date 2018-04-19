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
    Route::view('/showcase', 'showcase.portfolio')->name('showcase.portfolio');
    Route::view('/showcase/school', 'showcase.school')->name('showcase.school');
    Route::view('/showcase/work', 'showcase.work')->name('showcase.work');
    Route::view('/showcase/award', 'showcase.award')->name('showcase.award');
    Route::view('/showcase/skill', 'showcase.skill')->name('showcase.skill');
    Route::view('/showcase/profile', 'showcase.profile')->name('showcase.profile');
});