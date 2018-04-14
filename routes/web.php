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

Route::view('/showcase/{slug}', 'showcase.view')->name('showcase.view');
Route::view('/showcases', 'showcase.index')->name('showcase');

Route::view('/help', 'statics.help')->name('help');