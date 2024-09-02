<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $title }} | {{ env('APP_NAME') }}</title>

    <!-- App favicon -->
    <x-favicon></x-favicon>

    <!-- Theme Config Js -->
    <script src="{{ asset('js/config.js') }}"></script>

    <!-- Sweet Alerts css -->
    <link href="{{ asset('vendor/sweetalert2/sweetalert2.min.css') }}" rel="stylesheet" type="text/css" />

    <!-- App css -->
    <link href="{{ asset('css/app.min.css') }}" rel="stylesheet" type="text/css" id="app-style" />

    <!-- Icons css -->
    <link href="{{ asset('css/icons.min.css') }}" rel="stylesheet" type="text/css" />

    @stack('style')

</head>

<body class="authentication-bg position-relative">
    <div class="account-pages pt-1 pt-sm-3 pb-2 pb-sm-3 position-relative">
        <div class="container">
            @yield('content')
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>
    <!-- end page -->

    <footer class="footer footer-alt fw-medium">
        <span class="text-secondary fw-bold">
            <script>
                document.write(new Date().getFullYear())
            </script> © {{ env('APP_NAME') }} - @lang('admin/template.footer.copyright')
        </span>
    </footer>

    <!-- Vendor js -->
    <script src="{{ asset('js/vendor.min.js') }}"></script>

    <!-- App js -->
    <script src="{{ asset('js/app.min.js') }}"></script>

    <!-- Sweet Alerts Js-->
    <script src="{{ asset('vendor/sweetalert2/sweetalert2.min.js') }}"></script>

    @stack('script')
</body>

</html>
