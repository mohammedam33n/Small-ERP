<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="lang" content="{{ config('app.locale') }}" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />



    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>
        @yield('title')
    </title>
    <!-- Start Head Include -->
    @include('admin.layouts.partials.head')
    <!-- End Head Include -->
</head>

<body class="alt-menu sidebar-noneoverflow">
    <!-- BEGIN LOADER -->
    <div id="load_screen">
        <div class="loader">
            <div class="loader-content">
                <div class="spinner-grow align-self-center"></div>
            </div>
        </div>
    </div>
    <!--  END LOADER -->

    <!--  BEGIN NAVBAR  -->
    <div class="header-container">
        <!-- Start Header Include -->
        @include('admin.layouts.partials.header')
        <!-- End Header Include -->
    </div>
    <!--  END NAVBAR  -->

    <!--  BEGIN MAIN CONTAINER  -->
    <div class="main-container" id="container">

        <div class="overlay"></div>
        <div class="search-overlay"></div>

        <!--  BEGIN CONTENT PART  -->
        @yield('content')
        <!--  END CONTENT PART  -->

    </div>
    <!-- END MAIN CONTAINER -->

    <div class="footer-wrapper">
        <div class="footer-section f-section-1">
            <p class="">Copyright © 2022
                <a target="_blank" href="https://unlimited-software.com/">Unlimited Software House</a>, All rights
                reserved.
            </p>
        </div>
        <div class="footer-section f-section-2">
            <p class="">Coded with
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="feather feather-heart">
                    <path
                        d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z">
                    </path>
                </svg>
            </p>
        </div>
    </div>

    <!-- Start Include *Scripts* -->
    @include('admin.layouts.partials.footer-js')
    <!-- End Include *Scripts* -->

</body>

</html>
