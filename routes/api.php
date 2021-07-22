<?php

use App\Http\Controllers\Api\Auth\LoginController;
use App\Http\Controllers\Api\Auth\ForgotPasswordController;
use App\Http\Controllers\Api\Auth\RegisterController;
use App\Http\Controllers\Api\Auth\ResetPasswordController;
use App\Http\Controllers\Api\Blog\SettingController;
use App\Http\Controllers\Api\Blog\CategoryController;
use App\Http\Controllers\Api\Blog\PostController;
use App\Http\Controllers\Api\Drive\DirectoryController;
use App\Http\Controllers\Api\Drive\UploadController;
use App\Http\Controllers\Api\Journal\NotebookController;
use App\Http\Controllers\Api\Journal\NoteController;
use App\Http\Controllers\Api\Journal\TaskController;
use App\Http\Controllers\Api\Showcase\AwardController;
use App\Http\Controllers\Api\Showcase\EducationController;
use App\Http\Controllers\Api\Showcase\ExperienceController;
use App\Http\Controllers\Api\Showcase\ShowcaseController;
use App\Http\Controllers\Api\Showcase\SkillController;
use App\Http\Controllers\Api\Showcase\PortfolioController;
use App\Http\Controllers\Api\Vault\MasterPassword;
use App\Http\Controllers\Api\Vault\PasswordVaultController;
use App\Http\Controllers\Api\Vault\SettingController as VaultSettingController;
use App\Http\Controllers\Api\Wallet\TransactionController;
use App\Http\Controllers\Api\Wallet\WalletController;
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
Route::post('/forgot-password', [ForgotPasswordController::class, 'sendResetLinkEmail']);
Route::post('/reset-password', [ResetPasswordController::class, 'reset']);
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
            'tasks' => TaskController::class,
            'notebooks' => NotebookController::class,
            'notebooks.notes' => NoteController::class,
        ]);

    });

    Route::prefix('blog')->group(function () {

        Route::apiResource('categories', CategoryController::class)->parameters(['categories' => 'taxonomy']);
        Route::apiResource('posts', PostController::class);

        Route::get('settings', [SettingController::class, 'index']);
        Route::post('settings', [SettingController::class, 'update']);

    });

    Route::prefix('vault')->group(function () {

        Route::apiResource('password-vaults', PasswordVaultController::class);
        Route::get('settings', [VaultSettingController::class, 'index']);
        Route::post('settings', [VaultSettingController::class, 'update']);
        Route::post('master-password', [MasterPassword::class, 'index']);

    });

    Route::prefix('wallet')->group(function () {

        Route::apiResources([
            'wallets' => WalletController::class,
            'wallets.transactions' => TransactionController::class,
        ]);

    });

    Route::prefix('drive')->group(function () {

        Route::get('download/{upload}', [UploadController::class, 'show']);
        Route::post('upload', [UploadController::class, 'create']);
        Route::delete('file/{upload}', [UploadController::class, 'delete']);

        Route::get('/', [DirectoryController::class, 'index']);
        Route::get('directories', [DirectoryController::class, 'index']);
        Route::get('directories/{directory}', [DirectoryController::class, 'show']);
        Route::post('directories', [DirectoryController::class, 'store']);
        Route::put('directories/{directory}', [DirectoryController::class, 'update']);
        Route::delete('directories/{directory}', [DirectoryController::class, 'delete']);

    });
});
