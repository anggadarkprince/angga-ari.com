<?php

use App\Http\Controllers\Api\Showcase\AwardController;
use App\Http\Controllers\Api\Showcase\EducationController;
use App\Http\Controllers\Api\Showcase\ExperienceController;
use App\Http\Controllers\Showcase\PortfolioController;
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

Route::middleware('auth:api')->group(function () {

    Route::prefix('showcase')->group(function() {

        Route::apiResources([
            'awards' => AwardController::class,
            'educations' => EducationController::class,
            'experience' => ExperienceController::class,
            'portfolio' => PortfolioController::class,
        ]);

    });
});
