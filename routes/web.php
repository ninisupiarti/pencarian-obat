<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DrugClassificationController;
use App\Http\Controllers\DrugController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\LocalizationController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TagController;
use Illuminate\Support\Facades\Route;

Route::get('locale/{language}', [LocalizationController::class, 'setLanguage']);

Route::group(['domain' => 'admin.' . env('DOMAIN')], function () {
    Route::controller(AuthController::class)->group(function () {
        Route::middleware('guest:admin')->group(function () {
            Route::get('login', 'login')->name('login');
            Route::post('login', 'loginProcess');
            Route::get('forgot-password', 'forgotPassword')->name('password.request');
            Route::post('forgot-password', 'forgotPasswordProcess')->name('password.email');
            Route::get('reset-password/{token}', 'resetPassword')->name('password.reset');
            Route::post('reset-password', 'resetPasswordProcess')->name('password.update');
        });
        Route::get('logout', 'logout');
    });

    Route::middleware('auth:admin')->group(function () {
        Route::controller(DashboardController::class)->group(function () {
            Route::get('/', 'index');
            Route::get('dashboard', 'index');
        });

        Route::controller(ProfileController::class)->group(function () {
            Route::get('profile', 'profile');
            Route::post('edit-profile', 'editProfile');
        });

        Route::prefix('administrators')->controller(AdminController::class)->group(function () {
            Route::get('/', 'index');
            Route::get('create', 'create');
            Route::post('check', 'check');
            Route::post('store', 'store');
            Route::get('detail/{id}', 'detail');
            Route::get('edit/{id}', 'edit');
            Route::delete('destroy', 'destroy');
        });

        Route::prefix('drugs')->controller(DrugController::class)->group(function () {
            Route::get('/', 'index');
            Route::get('create', 'create');
            Route::post('check', 'check');
            Route::post('store', 'store');
            Route::get('detail/{id}', 'detail');
            Route::get('edit/{id}', 'edit');
            Route::delete('destroy', 'destroy');
        });

        Route::prefix('articles')->controller(ArticleController::class)->group(function () {
            Route::get('/', 'index');
            Route::get('create', 'create');
            Route::post('check', 'check');
            Route::post('store', 'store');
            Route::get('detail/{id}', 'detail');
            Route::get('edit/{id}', 'edit');
            Route::delete('destroy', 'destroy');
        });

        Route::prefix('tags')->controller(TagController::class)->group(function () {
            Route::get('/', 'index');
            Route::get('create', 'create');
            Route::post('check', 'check');
            Route::post('store', 'store');
            Route::get('detail/{id}', 'detail');
            Route::get('edit/{id}', 'edit');
            Route::delete('destroy', 'destroy');
        });

        Route::prefix('drug-classifications')->controller(DrugClassificationController::class)->group(function () {
            Route::get('/', 'index');
            Route::get('create', 'create');
            Route::post('check', 'check');
            Route::post('store', 'store');
            Route::get('detail/{id}', 'detail');
            Route::get('edit/{id}', 'edit');
            Route::delete('destroy', 'destroy');
        });
    });
});

Route::controller(LandingController::class)->group(function () {
    Route::get('/', 'index');
    Route::get('dashboard', 'index');
    Route::get('drugs/detail/{id}', 'drugDetail');
});
