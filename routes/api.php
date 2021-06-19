<?php

use App\Http\Controllers\Api\Auth\LoginController;
use App\Http\Controllers\Api\Auth\RegisterController;
use App\Http\Controllers\Api\Blog\CategoryController;
use App\Http\Controllers\Api\Journal\NotebookController;
use App\Http\Controllers\Api\Journal\NoteController;
use App\Http\Controllers\Api\Showcase\AwardController;
use App\Http\Controllers\Api\Showcase\EducationController;
use App\Http\Controllers\Api\Showcase\ExperienceController;
use App\Http\Controllers\Api\Showcase\ShowcaseController;
use App\Http\Controllers\Api\Showcase\SkillController;
use App\Http\Controllers\Api\Showcase\PortfolioController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/login', [LoginController::class, 'login']);
Route::post('/register', [RegisterController::class, 'register']);
Route::match(['post', 'delete'], '/logout', [LoginController::class, 'login']);

Route::middleware('auth:api')->group(function () {

    Route::prefix('showcase')->group(function () {

        Route::get('/', ShowcaseController::class);

        Route::apiResources([
            'awards' => AwardController::class,
            'educations' => EducationController::class,
            'experiences' => ExperienceController::class,
            'portfolios' => PortfolioController::class,
            'skills' => SkillController::class,
        ]);

    });

    Route::prefix('journal')->group(function () {

        Route::apiResources([
            'notebooks' => NotebookController::class,
            'notebooks.notes' => NoteController::class,
        ]);

    });

    Route::prefix('blog')->group(function () {

        Route::apiResource('categories', CategoryController::class)->parameters(['categories' => 'taxonomy']);

    });
});
