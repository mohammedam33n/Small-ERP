<!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
<script src="{{ asset('adminAssets/assets/js/libs/jquery-3.1.1.min.js') }}"></script>
<script src="{{ asset('adminAssets/bootstrap/js/popper.min.js') }}"></script>
<script src="{{ asset('adminAssets/bootstrap/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('adminAssets/plugins/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>


<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="{{ asset('adminAssets/assets/js/app.js') }}"></script>
<script>
    $(document).ready(function() {
        App.init();
    });
</script>
<script src="{{ asset('adminAssets/assets/js/custom.js') }}"></script>

<!-- END GLOBAL MANDATORY SCRIPTS -->
@include('sweetalert::alert')

@stack('js')
