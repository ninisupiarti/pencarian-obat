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
                                <h4 class="fs-20">@lang('admin/auth/forgot-password.title')</h4>
                                <p class="text-muted mb-3">@lang('admin/auth/forgot-password.subtitle')</p>

                                <x-alert></x-alert>

                                <!-- form -->
                                <form id="form" action="{{ url('forgot-password') }}" method="POST">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="email" class="form-label">@lang('forms.email.label')</label>
                                        <input id="email" class="form-control" type="email" name="email"
                                            placeholder="@lang('forms.email.placeholder')">
                                        <span id="emailError" class="invalid-feedback"></span>
                                    </div>

                                    <div class="mb-0 text-start">
                                        <button id="submit" class="btn btn-soft-primary w-100" type="submit">
                                            <i class="ri-loop-left-line me-1 fw-bold"></i>
                                            <span class="fw-bold">@lang('admin/auth/forgot-password.button')</span>
                                        </button>
                                    </div>
                                </form>
                                <!-- end form-->
                            </div>
                            <div class="p-2 align-self-center">
                                <a href="{{ url('login') }}" class="text-muted">
                                    <small>
                                        <strong>@lang('admin/auth/forgot-password.remember-password')</strong>
                                        @lang('admin/auth/forgot-password.sign-in')
                                    </small>
                                </a>
                            </div>
                        </div>
                    </div> <!-- end col -->
                </div>
            </div>
        </div>
        <!-- end row -->
    </div>
@endsection
