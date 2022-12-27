<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EndUser\EndUserAuthController;
use App\Http\Controllers\EndUser\EndUserHomeController;
use App\Http\Controllers\EndUser\EndUserCourseController;
use App\Http\Controllers\EndUser\EndUserSitemapController;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;


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


Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']
    ],
    function () {
        Route::get('/', [EndUserHomeController::class, 'index'])->name('home');

        Route::controller(EndUserCourseController::class)->group(function () {
            Route::group(['prefix' => 'courses', 'as' => 'course.'], function () {
                Route::get('/',  'index')->name('index');
                Route::get('/{courses}',  'show')->name('show');
                Route::post('store', 'store')->name('store');
            });
        });


        Route::controller(EndUserSitemapController::class)->group(function () {
            Route::group(['prefix' => 'sitemap', 'as' => 'sitemap.'], function () {
                Route::get('/',  'index')->name('index');
            });
        });

        //test route page-error
        Route::view('/page-error', 'endUser.pages.error-404')->name('page-error');
        Route::group(['middleware' => 'auth'], function () {
            Route::post('/logout', [EndUserAuthController::class, 'logout'])->name('logout');
        });

        Route::group(['middleware' => 'guest'], function () {

            Route::get('/register', [EndUserAuthController::class, 'registerPage'])->name('registerPage');
            Route::post('/register', [EndUserAuthController::class, 'register'])->name('register');

            Route::get('/login', [EndUserAuthController::class, 'loginPage'])->name('loginPage');
            Route::post('/login', [EndUserAuthController::class, 'login'])->name('login');
        });
    }

);
