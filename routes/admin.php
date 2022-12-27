<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\CourseController;
use App\Http\Controllers\Admin\CourseSubscriptionController;
use App\Http\Controllers\Admin\SliderController;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;





Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']
    ],
    function () {


        Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {


            Route::get('/', [HomeController::class, 'index'])->name('home');

            Route::group(['middleware' => 'admin_auth'], function () {
                Route::get('/', [HomeController::class, 'index'])->name('home');
                Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
            });

            Route::group(['middleware' => 'admin_guest'], function () {
                Route::get('/login', [AuthController::class, 'loginPage'])->name('loginPage');
                Route::post('/login', [AuthController::class, 'login'])->name('login');
            });

            //test route pages-error
            Route::view('/page-error', 'admin.pages.error-404')->name('page-error');

            Route::controller(CourseController::class)->group(function () {
                Route::group(['prefix' => 'course', 'as' => 'course.'], function () {
                    Route::get('/',  'index')->name('index');
                    Route::get('create', 'create')->name('create');
                    Route::get('edit/{course}', 'edit')->name('edit');
                    Route::post('store', 'store')->name('store');
                    Route::get('{course}', 'show')->name('show');
                    Route::put('update/{course}', 'update')->name('update');
                    Route::delete('destroy/{course}', 'destroy')->name('destroy');
                });
            });

            Route::controller(CourseSubscriptionController::class)->group(function () {
                Route::group(['prefix' => 'course_subscription', 'as' => 'course_subscription.'], function () {
                    Route::get('/',  'index')->name('index');
                    Route::get('/{courseSubscription}',  'show')->name('show');
                    Route::delete('destroy/{courseSubscription}', 'destroy')->name('destroy');
                });
            });

            Route::controller(SliderController::class)->group(function () {
                Route::group(['prefix' => 'slider', 'as' => 'slider.'], function () {
                    Route::get('/',  'index')->name('index');
                    Route::get('create',  'create')->name('create');
                    Route::get('edit/{slider}',  'edit')->name('edit');
                    Route::post('store',  'store')->name('store');
                    Route::put('update/{slider}',  'update')->name('update');
                    Route::delete('destroy/{slider}',  'destroy')->name('destroy');
                });
            });

        });
    }
);
