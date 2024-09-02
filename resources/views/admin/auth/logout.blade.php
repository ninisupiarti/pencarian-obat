@extends('admin.auth.base')

@section('content')
    <div class="row justify-content-center">
        <div class="col-xxl-8 col-lg-10">
            <div class="card overflow-hidden">
                <div class="row g-0">
                    <div class="col-lg-6 d-none d-lg-block p-2">
                        <img src="{{ asset('images/auth-img.jpg') }}" alt="" class="img-fluid rounded h-100">
                    </div>
                    <div class="col-lg-6">
                        <div class="d-flex flex-column">
                            <div class="auth-brand p-2 d-flex justify-content-between align-items-center">
                                <x-logo></x-logo>

                                <div class="px-4">
                                    <x-lang-button></x-lang-button>
                                </div>
                            </div>
                            <div class="p-4 my-auto">
                                <div class="my-auto">
                                    <!-- title-->
                                    <div class="text-center">
                                        <h4 class="mt-0 fs-20">@lang('admin/auth/logout.title')</h4>
                                        <p class="text-muted mb-4">@lang('admin/auth/logout.subtitle')</p>
                                    </div>

                                    <!-- Logout icon -->
                                    <div class="logout-icon m-auto">
                                        <img src="{{ asset('images/svg/shield.gif') }}" class="img-fluid">
                                    </div>
                                    <!-- end logout-icon-->

                                    <div class="p-2 text-center">
                                        <a href="{{ url('login') }}" class="text-muted">
                                            <small>
                                                @lang('admin/auth/logout.back-to-login') <i class="ri-arrow-right-line"></i>
                                            </small>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> <!-- end col -->
                </div>
            </div>
        </div>
        <!-- end row -->
    </div>
@endsection
