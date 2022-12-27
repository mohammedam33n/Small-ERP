<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {


        //========================================================================//
        ##                               Admins                                   ##
        //========================================================================//

        $this->app->bind(
            'App\Http\Interfaces\Admin\AuthInterface',
            'App\Http\Repositories\Admin\AuthRepository'
        );

        $this->app->bind(
            'App\Http\Interfaces\Admin\HomeInterface',
            'App\Http\Repositories\Admin\HomeRepository'
        );


        $this->app->bind(
            'App\Http\Interfaces\Admin\CourseInterface',
            'App\Http\Repositories\Admin\CourseRepository'
        );


        $this->app->bind(
            'App\Http\Interfaces\Admin\CourseSubscriptionInterface',
            'App\Http\Repositories\Admin\CourseSubscriptionRepository'
        );


        $this->app->bind(

            'App\Http\Interfaces\Admin\SliderInterface',
            'App\Http\Repositories\Admin\SliderRepository'
        );




        //========================================================================//
        ##                              End Users                                 ##
        //========================================================================//

        $this->app->bind(
            'App\Http\Interfaces\EndUser\EndUserHomeInterface',
            'App\Http\Repositories\EndUser\EndUserHomeRepository'
        );

        $this->app->bind(
            'App\Http\Interfaces\EndUser\EndUserCourseInterface',
            'App\Http\Repositories\EndUser\EndUserCourseRepository'
        );

        $this->app->bind(
            'App\Http\Interfaces\EndUser\EndUserAuthInterface',
            'App\Http\Repositories\EndUser\EndUserAuthRepository'
        );

        $this->app->bind(
            'App\Http\Interfaces\EndUser\EndUserSitemapInterface',
            'App\Http\Repositories\EndUser\EndUserSitemapRepository'
        );


    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
