<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>CORK Admin Template - Login Cover Page</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('adminAssets/assets/img/favicon.ico') }}" />
    <link href="{{ asset('adminAssets/assets/css/'.LaravelLocalization::getCurrentLocaleDirection().'/loader.css') }}" rel="stylesheet" type="text/css" />
    <script src="{{ asset('adminAssets/assets/js/loader.js') }}"></script>

    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="https://fonts.googleapis.com/css?family=Quicksand:400,500,600,700&display=swap" rel="stylesheet">

    <link href="{{asset('adminAssets/bootstrap/css/'.LaravelLocalization::getCurrentLocaleDirection().'/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />

    <link href="{{ asset('adminAssets/assets/css/'.LaravelLocalization::getCurrentLocaleDirection().'/plugins.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('adminAssets/assets/css/'.LaravelLocalization::getCurrentLocaleDirection().'/authentication/form-1.css') }}" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->
    <link rel="stylesheet" type="text/css" href="{{ asset('adminAssets/assets/css/'.LaravelLocalization::getCurrentLocaleDirection().'/forms/theme-checkbox-radio.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('adminAssets/assets/css/'.LaravelLocalization::getCurrentLocaleDirection().'/forms/switches.css') }}">

</head>

<body class="form">

    <!-- BEGIN LOADER -->
    <div id="load_screen">
        <div class="loader">
            <div class="loader-content">
                <div class="spinner-grow align-self-center"></div>
            </div>
        </div>
    </div>
    <!--  END LOADER -->

    <div class="form-container">
        <div class="form-form">
            <div class="form-form-wrap">
                <div class="form-container">
                    <!-- Start Content Include -->
                    @yield('content')
                    <!-- End Content Include-->
                </div>
            </div>
        </div>
        <div class="form-image">
            <div class="l-image">
            </div>
        </div>
    </div>












    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
    <script src="{{ asset('adminAssets/assets/js/libs/jquery-3.1.1.min.js') }}"></script>
    <script src="{{ asset('adminAssets/bootstrap/js/popper.min.js') }}"></script>
    <script src="{{ asset('adminAssets/bootstrap/js/bootstrap.min.js') }}"></script>

    <!-- END GLOBAL MANDATORY SCRIPTS -->
    <script src="{{ asset('adminAssets/assets/js/authentication/form-1.js') }}"></script>

    <script>
        var loaderElement = document.querySelector('#load_screen');
        setTimeout(function() {
            loaderElement.style.display = "none";
        }, 3000);
    </script>
    @include('sweetalert::alert')
</body>

</html>

