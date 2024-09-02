@extends('admin.auth.base')

@section('content')
    <div class="row justify-content-center">
        <div class="col-xxl-8 col-lg-10">
            <div class="card overflow-hidden">
                <div class="row g-0">
                    <div class="col-lg-6 d-none d-lg-block p-2">
                        <img src="{{ asset('images/auth-img.jpg') }}" class="img-fluid rounded h-100">
                    </div>
                    <div class="col-lg-6">
                        <div class="d-flex flex-column">
                            <div class="auth-brand p-2 d-flex justify-content-between align-items-center">
                                <x-logo></x-logo>

                                <div class="px-4">
                                    <x-lang-button></x-lang-button>
                                </div>
                            </div>
                            <div class="px-4 pb-4 my-auto">
                                <x-alert></x-alert>

                                <div class="text-center">
                                    <img src="{{ asset(empty(Auth::user()->photo) ? 'images/anonymous.png' : Auth::user()->photo) }}"
                                        alt="user-image" class="rounded-circle img-fluid img-thumbnail avatar-md">
                                    <h4 class="text-center mt-1 fw-bold fs-16">Hi! {{ $user->name }} </h4>
                                    <p class="text-muted mb-1">@lang('admin/auth/reset-password.subtitle')</p>
                                </div>

                                <!-- form -->
                                <form id="form" action="{{ url('reset-password') }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="email" value="{{ $user->email }}">
                                    <input type="hidden" name="token" value="{{ $token }}">
                                    <div class="mb-2">
                                        <label for="password" class="form-label">@lang('forms.password.label')</label>
                                        <input id="password" type="password" name="password" class="form-control"
                                            placeholder="@lang('forms.password.new.placeholder')" value="{{ old('password') }}">
                                        <span id="passwordError" class="invalid-feedback"></span>
                                    </div>
                                    <div class="mb-2">
                                        <label for="password" class="form-label">@lang('forms.password.confirmation.label')</label>
                                        <input id="passwordConfirmation" type="password" name="password_confirmation"
                                            class="form-control" placeholder="@lang('forms.password.confirmation.placeholder')"
                                            value="{{ old('password_confirmation') }}">
                                        <span id="passwordConfirmationError" class="invalid-feedback"></span>
                                    </div>

                                    <div class="mb-0 text-start">
                                        <button id="submit" class="btn btn-soft-primary w-100" type="submit">
                                            <i class="ri-login-circle-fill me-1"></i>
                                            <span class="fw-bold">@lang('admin/auth/reset-password.button')</span>
                                        </button>
                                    </div>
                                </form>
                                <!-- end form-->
                            </div>
                        </div>
                    </div> <!-- end col -->
                </div>
            </div>
        </div>
        <!-- end row -->
    </div>
@endsection
