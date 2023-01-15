<!doctype html>
<html class="no-js" lang="en">

<head>
    <x-layouts.backend.head />
</head>

<body class="skin-dark">

    <div class="main-wrapper">


        <x-layouts.backend.header />
       
        <x-layouts.backend.drawer />
        
            {{ $slot }}
          
        <x-layouts.backend.footer />
            

    </div>

    <!-- JS
============================================ -->

    <!-- Global Vendor, plugins & Activation JS -->
    <script src="{{ asset('backend/assets/js/vendor/modernizr-3.6.0.min.js') }}"></script>
    <script src="{{ asset('backend/assets/js/vendor/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('backend/assets/js/vendor/popper.min.js') }}"></script>
    <script src="{{ asset('backend/assets/js/vendor/bootstrap.min.js') }}"></script>
    <!--Plugins JS-->
    <script src="{{ asset('backend/assets/js/plugins/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('backend/assets/') }}js/plugins/tippy4.min.js.js"></script>
    <!--Main JS-->
    <script src="{{ asset('backend/assets/js/main.js') }}"></script>

    <!-- Plugins & Activation JS For Only This Page -->

    <!--Moment-->
    <script src="{{ asset('backend/assets/js/plugins/moment/moment.min.js') }}"></script>

    <!--Daterange Picker-->
    <script src="{{ asset('backend/assets/js/plugins/daterangepicker/daterangepicker.js') }}"></script>
    <script src="{{ asset('backend/assets/js/plugins/daterangepicker/daterangepicker.active.js') }}"></script>

    <!--Echarts-->
    <script src="{{ asset('backend/assets/js/plugins/chartjs/Chart.min.js') }}"></script>
    <script src="{{ asset('backend/assets/js/plugins/chartjs/chartjs.active.js') }}"></script>

    <!--VMap-->
    <script src="{{ asset('backend/assets/js/plugins/vmap/jquery.vmap.min.js') }}"></script>
    <script src="{{ asset('backend/assets/js/plugins/vmap/maps/jquery.vmap.world.js') }}"></script>
    <script src="{{ asset('backend/assets/js/plugins/vmap/maps/samples/jquery.vmap.sampledata.js') }}"></script>
    <script src="{{ asset('backend/assets/js/plugins/vmap/vmap.active.js') }}"></script>

</body>

</html>