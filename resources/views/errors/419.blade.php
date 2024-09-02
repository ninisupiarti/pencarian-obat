<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>419 | {{ env('APP_NAME') }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- App favicon -->
    <x-favicon></x-favicon>

    <!-- Theme Config Js -->
    <script src="{{ asset('js/config.js') }}"></script>

    <!-- App css -->
    <link href="{{ asset('css/app.min.css') }}" rel="stylesheet" type="text/css" id="app-style" />

    <!-- Icons css -->
    <link href="{{ asset('css/icons.min.css') }}" rel="stylesheet" type="text/css" />
</head>

<body>
    <!-- Begin page -->
    <div class="wrapper">
        <!-- ========== Topbar Start ========== -->
        @include('admin.template.sections.header')
        <!-- ========== Topbar End ========== -->

        <!-- ========== Left Sidebar Start ========== -->
        @include('admin.template.sections.sidebar')
        <!-- ========== Left Sidebar End ========== -->

        <!-- ============================================================== -->
        <!-- Start Page Content here -->
        <!-- ============================================================== -->

        <div class="content-page">
            <div class="content">
                <!-- Start Content-->
                <div class="container-fluid">
                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box">
                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a
                                                href="javascript: void(0);">{{ env('APP_NAME') }}</a></li>
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Error</a></li>
                                        <li class="breadcrumb-item active">419</li>
                                    </ol>
                                </div>
                                <h4 class="page-title">419 Error</h4>
                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                    <div class="row justify-content-center items">
                        <div class="col-12">
                            <div class="d-flex flex-column h-100">
                                <div class="row justify-content-center">
                                    <div class="col-lg-4">
                                        <div class="text-center">
                                            <h1 class="text-error mb-4">419</h1>
                                            <h2 class="text-uppercase text-danger mt-3">Session Expired</h2>
                                            <p class="text-muted mt-3">It's looking like you may have taken a wrong
                                                turn. Don't worry... it
                                                happens to the best of us. Here's a
                                                little tip that might help you get back on track.</p>

                                            <a class="btn btn-soft-danger mt-3" href="{{ url('/') }}"><i
                                                    class="ri-home-4-line me-1"></i> Back to Home</a>
                                        </div> <!-- end /.text-center-->
                                    </div> <!-- end col-->
                                </div>
                            </div>
                        </div> <!-- end col -->
                    </div>

                </div> <!-- container -->

            </div> <!-- content -->

            <!-- Footer Start -->
            @include('admin.template.sections.footer')
            <!-- end Footer -->

        </div>

        <!-- ============================================================== -->
        <!-- End Page content -->
        <!-- ============================================================== -->

    </div>
    <!-- END wrapper -->

    <!-- Theme Settings -->
    <x-offcanvas></x-offcanvas>

    <!-- Vendor js -->
    <script src="{{ asset('assets/js/vendor.min.js') }}"></script>

    <!-- App js -->
    <script src="{{ asset('assets/js/app.min.js') }}"></script>

</body>

</html>
