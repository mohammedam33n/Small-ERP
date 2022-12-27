<!--=================================
    Javascript -->

<!-- JS Global Compulsory (Do not remove)-->
<script src="{{ asset('endUserAssets/js/jquery-3.6.0.min.js') }}"></script>
<script src="{{ asset('endUserAssets/js/popper/popper.min.js') }}"></script>
<script src="{{ asset('endUserAssets/js/bootstrap/bootstrap.min.js') }}"></script>

<!-- Page JS Implementing Plugins (Remove the plugin script here if site does not use that feature)-->
<script src="{{ asset('endUserAssets/js/jquery.appear.js') }}"></script>
<script src="{{ asset('endUserAssets/js/swiper/swiper.min.js') }}"></script>
<script src="{{ asset('endUserAssets/js/swiperanimation/SwiperAnimation.min.js') }}"></script>
<script src="{{ asset('endUserAssets/js/counter/jquery.countTo.js') }}"></script>
<script src="{{ asset('endUserAssets/js/owl-carousel/owl.carousel.min.js') }}"></script>
<script src="{{ asset('endUserAssets/js/magnific-popup/jquery.magnific-popup.min.js') }}"></script>


<!-- Template Scripts (Do not remove)-->
<script src="{{ asset('endUserAssets/js/custom.js') }}"></script>


@include('sweetalert::alert')

@stack('js')
