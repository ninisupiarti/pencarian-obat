<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ $title }} | {{ env('APP_NAME') }}</title>

    <!-- App favicon -->
    <x-favicon></x-favicon>

    <!-- Datatables css -->
    <link href="{{ asset('vendor/datatables.net-bs5/css/dataTables.bootstrap5.min.css') }}" rel="stylesheet"
        type="text/css" />
    <link href="{{ asset('vendor/datatables.net-responsive-bs5/css/responsive.bootstrap5.min.css') }}" rel="stylesheet"
        type="text/css" />
    <link href="{{ asset('vendor/datatables.net-fixedcolumns-bs5/css/fixedColumns.bootstrap5.min.css') }}"
        rel="stylesheet" type="text/css" />
    <link href="{{ asset('vendor/datatables.net-fixedheader-bs5/css/fixedHeader.bootstrap5.min.css') }}"
        rel="stylesheet" type="text/css" />
    <link href="{{ asset('vendor/datatables.net-buttons-bs5/css/buttons.bootstrap5.min.css') }}" rel="stylesheet"
        type="text/css" />
    <link href="{{ asset('vendor/datatables.net-select-bs5/css/select.bootstrap5.min.css') }}" rel="stylesheet"
        type="text/css" />

    <!-- Dropify css -->
    <link href="{{ asset('vendor/dropify/dropify.min.css') }}" rel="stylesheet" type="text/css" />

    <!-- Select2 css -->
    <link href="{{ asset('vendor/select2/css/select2.min.css') }}" rel="stylesheet" type="text/css" />

    <!-- Sweet Alerts css -->
    <link href="{{ asset('vendor/sweetalert2/sweetalert2.min.css') }}" rel="stylesheet" type="text/css" />

    <!-- Theme Config Js -->
    <script src="{{ asset('js/config.js') }}"></script>

    <!-- App css -->
    <link href="{{ asset('css/app.min.css') }}" rel="stylesheet" type="text/css" id="app-style" />

    <!-- Icons css -->
    <link href="{{ asset('css/icons.min.css') }}" rel="stylesheet" type="text/css" />

    @stack('style')
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
                @yield('content')
                <!-- container -->
            </div>
            <!-- content -->

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
    <script src="{{ asset('js/vendor.min.js') }}"></script>

    <!-- Datatables js -->
    <script src="{{ asset('vendor/datatables.net/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('vendor/datatables.net-bs5/js/dataTables.bootstrap5.min.js') }}"></script>
    <script src="{{ asset('vendor/datatables.net-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('vendor/datatables.net-responsive-bs5/js/responsive.bootstrap5.min.js') }}"></script>
    <script src="{{ asset('vendor/datatables.net-fixedcolumns-bs5/js/fixedColumns.bootstrap5.min.js') }}"></script>
    <script src="{{ asset('vendor/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js') }}"></script>
    <script src="{{ asset('vendor/datatables.net-buttons/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('vendor/datatables.net-buttons-bs5/js/buttons.bootstrap5.min.js') }}"></script>
    <script src="{{ asset('vendor/datatables.net-buttons/js/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('vendor/datatables.net-buttons/js/buttons.flash.min.js') }}"></script>
    <script src="{{ asset('vendor/datatables.net-buttons/js/buttons.print.min.js') }}"></script>
    <script src="{{ asset('vendor/datatables.net-keytable/js/dataTables.keyTable.min.js') }}"></script>
    <script src="{{ asset('vendor/datatables.net-select/js/dataTables.select.min.js') }}"></script>

    <!--dropify-->
    <script src="{{ asset('vendor/dropify/dropify.min.js') }}"></script>

    <!--  Select2 Plugin Js -->
    <script src="{{ asset('vendor/select2/js/select2.min.js') }}"></script>

    <!-- Sweet Alerts Js-->
    <script src="{{ asset('vendor/sweetalert2/sweetalert2.min.js') }}"></script>

    <!-- App js -->
    <script src="{{ asset('js/app.min.js') }}"></script>

    <script script src="https://cdn.tiny.cloud/1/mntelhivl7uwt5ikv4mj25qfr692ljx6u47h7skin30mj5ke/tinymce/7/tinymce.min.js"
        referrerpolicy="origin"></script>

    <script>
        tinymce.init({
            selector: '.tinymce',
            plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace visualblocks wordcount linkchecker',
            toolbar: 'undo redo | blocks fontsize | bold italic underline strikethrough | link image | align lineheight | numlist bullist indent outdent | emoticons charmap | removeformat ',
        });
    </script>

    <script>
        @if (App::isLocale('id'))
            var datatable = $('.datatable').DataTable({
                "stateSave": true,
                "drawCallback": function() {
                    $('.dataTables_paginate > .pagination').addClass('pagination-rounded');
                },
                "language": {
                    "search": "Pencarian",
                    "infoEmpty": "Data Belum Tersedia",
                    "info": "Menampilkan _PAGE_ dari _PAGES_ halaman",
                    "emptyTable": "Data Belum Tersedia",
                    "lengthMenu": "Tampilkan _MENU_ Baris",
                    "zeroRecords": "Data Tidak Ditemukan",
                    "infoFiltered": "(Hasil pencarian dari _MAX_ data)",
                    "processing": "Sedang Memproses...",
                    "paginate": {
                        "first": "Pertama",
                        "previous": "<i class='mdi mdi-chevron-left'>",
                        "next": "<i class='mdi mdi-chevron-right'>",
                        "last": "Terakhir",
                    }
                },
            });

            var dropify = $('.dropify').dropify({
                messages: {
                    'default': 'Klik atau seret dan lepas untuk memasukkan file',
                    'replace': 'Klik atau seret dan lepas untuk mengganti file',
                    'remove': 'Hapus',
                    'error': 'Galat. Ukuran terlalu besar melebihi 2MB atau tipe file tidak didukung'
                }
            });
        @else
            var datatable = $('.datatable').DataTable({
                "stateSave": true,
                "drawCallback": function() {
                    $('.dataTables_paginate > .pagination').addClass('pagination-rounded');
                },
                "language": {
                    "paginate": {
                        "previous": "<i class='mdi mdi-chevron-left'>",
                        "next": "<i class='mdi mdi-chevron-right'>",
                    }
                },
            });

            var dropify = $('.dropify').dropify({
                messages: {
                    'default': 'Click or drag and drop a file',
                    'replace': 'Click or drag and drop to replace',
                    'remove': 'Remove',
                    'error': 'Error. The file is either not square, larger than 2 MB or not an acceptable file type'
                }
            });
        @endif

        dropify.on("dropify.afterClear", function() {
            $("#hiddenPhoto").val("");
            $("#hiddenImage").val("");
        });

        new $.fn.dataTable.FixedHeader(datatable);
    </script>

    @stack('script')
</body>

</html>
