<link href="{{asset('adminAssets/assets/css/'.LaravelLocalization::getCurrentLocaleDirection().'/loader.css')}}" rel="stylesheet">
<script src="{{asset('adminAssets/assets/js/loader.js')}}"></script>


<!-- BEGIN GLOBAL MANDATORY STYLES -->
<link href="https://fonts.googleapis.com/css?family=Quicksand:400,500,600,700&display=swap" rel="stylesheet">
<link href="{{asset('adminAssets/bootstrap/css/'.LaravelLocalization::getCurrentLocaleDirection().'/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('adminAssets/assets/css/'.LaravelLocalization::getCurrentLocaleDirection().'/plugins.css')}}" rel="stylesheet" type="text/css" />
<!-- END GLOBAL MANDATORY STYLES -->
@yield('css')
