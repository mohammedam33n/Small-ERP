<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>CORK Admin Template - Error 404 Page</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('adminAssets/assets/img/favicon.ico') }}" />
    <link href="{{asset('adminAssets/assets/css/loader.css')}}" rel="stylesheet" type="text/css" />

    <script src="{{asset('adminAssets/assets/js/loader.js')}}"></script>
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="https://fonts.googleapis.com/css?family=Quicksand:400,500,600,700&display=swap" rel="stylesheet">
    <link href="{{ asset('adminAssets/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('adminAssets/assets/css/plugins.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('adminAssets/assets/css/pages/error/style-400.css') }}" rel="stylesheet" type="text/css" />

    <!-- END GLOBAL MANDATORY STYLES -->

</head>

<body class="error404 text-center">

    <!-- BEGIN LOADER -->
    <div id="load_screen">
        <div class="loader">
            <div class="loader-content">
                <div class="spinner-grow align-self-center"></div>
            </div>
        </div>
    </div>
    <!--  END LOADER -->

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4 mr-auto mt-5 text-md-left text-center">
                <a href="index.html" class="ml-md-5">
                    <img alt="logo" src="{{asset('adminAssets/assets/img/90x90.jpg')}}" class="theme-logo">
                </a>
            </div>
        </div>
    </div>
    <div class="container-fluid error-content">
        <div class="">
            <h1 class="error-number">404</h1>
            <p class="mini-text">Ooops!</p>
            <p class="error-text mb-4 mt-1">The page you requested was not found!</p>
            <a href="index.html" class="btn btn-primary mt-5">Go Back</a>
        </div>
    </div>



    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
    <script src="{{ asset('adminAssets/assets/js/libs/jquery-3.1.1.min.js') }}"></script>
    <script src="{{ asset('adminAssets/bootstrap/js/popper.min.js') }}"></script>
    <script src="{{ asset('adminAssets/bootstrap/js/bootstrap.min.js') }}"></script>
    <!-- END GLOBAL MANDATORY SCRIPTS -->




    <script>
        var switchFunctionality1 = {

            setDefaults: function() {

                if (Cookies.getCookie('dark_mode') != "") {
                    var loaderElement = document.querySelector('#load_screen');
                    setTimeout(function() {
                        loaderElement.style.display = "none";
                        console.log('Inside app.js me')
                    }, 3000);
                    window.scrollTo(0, 0);
                } else {
                    console.log('no needs of else;');
                }
            }

        }


        switchFunctionality1.setDefaults();
    </script>

</body>

</html>
