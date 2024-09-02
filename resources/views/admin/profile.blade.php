@extends('admin.template.base')

@section('content')
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-sm-12">
                <div class="profile-bg-picture" style="background-image:url('images/bg-landing.jpg')">
                    <span class="picture-bg-overlay"></span>
                    <!-- overlay -->
                </div>
                <!-- meta -->
                <div class="profile-user-box">
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="profile-user-img">
                                <img src="{{ asset(empty(Auth::user()->photo) ? 'images/anonymous.png' : Auth::user()->photo) }}"
                                    class="avatar-lg rounded-circle">
                            </div>
                            <div class="">
                                <h4 class="mt-4 fs-17 ellipsis">
                                    {{ $user->name }}
                                </h4>
                                <p class="font-13">
                                    {{ $user->level }}
                                </p>
                                <h5 class="mt-4 fs-17 text-dark">
                                    @lang('admin/profile.contribution')
                                </h5>
                                <table class="table table-condensed mb-0 border-top">
                                    <tbody>
                                        <tr>
                                            <td class="ng-binding">
                                                {{ Auth::guard('admin')->user()->articles()->count() }}
                                                @lang('admin/profile.table.article')
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="ng-binding">
                                                {{ Auth::guard('admin')->user()->drugs()->count() }}
                                                @lang('admin/profile.table.drug')
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="col-sm-8">
                            <div class="profile-content">
                                <ul class="nav nav-pills bg-nav-pills nav-justified gap-0">
                                    <li class="nav-item">
                                        <a data-bs-toggle="tab" data-bs-target="#profile"
                                            @if ($errors->any() || Session::get('message')) class="nav-link" @else class="nav-link active" @endif
                                            type="button" role="tab" aria-controls="home" aria-selected="true"
                                            href="#profile">
                                            @lang('admin/profile.nav-tab.profile')
                                        </a>
                                    </li>
                                    {{-- <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" data-bs-target="#activities" type="button"
                                            role="tab" aria-controls="home" aria-selected="true" href="#activities">
                                            @lang('admin/profile.nav-tab.activity')
                                        </a>
                                    </li> --}}
                                    <li class="nav-item">
                                        <a data-bs-toggle="tab" data-bs-target="#edit-profile"
                                            @if ($errors->any() || Session::get('message')) class="nav-link active" @else class="nav-link" @endif
                                            type="button" role="tab" aria-controls="home" aria-selected="true"
                                            href="#edit-profile">
                                            @lang('admin/profile.nav-tab.edit-profile')
                                        </a>
                                    </li>
                                </ul>

                                <div class="tab-content m-0 p-4">
                                    <div id="profile" role="tabpanel"
                                        @if ($errors->any() || Session::get('message')) class="tab-pane" @else class="tab-pane active" @endif
                                        aria-labelledby="profile-tab" tabindex="0">
                                        <div class="profile-desk">
                                            <table class="table table-condensed mb-0 border-top">
                                                <tbody>
                                                    <tr>
                                                        <th scope="row">@lang('admin/profile.table.name')</th>
                                                        <td class="ng-binding">{{ $user->name }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">@lang('admin/profile.table.email')</th>
                                                        <td class="ng-binding">{{ $user->email }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">@lang('admin/profile.table.level')</th>
                                                        <td class="ng-binding">{{ $user->level }}</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div> <!-- end profile-desk -->
                                    </div> <!-- about-me -->

                                    <!-- Activities -->
                                    {{-- <div id="activities" class="tab-pane">
                                        <p class="text-center">
                                            @lang('admin/profile.activity-is-empty')
                                        </p> --}}
                                    {{-- <div class="timeline-2">
                                            <div class="time-item">
                                                <div class="item-info ms-3 mb-3">
                                                    <div class="text-muted">5 minutes ago</div>
                                                    <p><strong><a href="#" class="text-info">John
                                                                Doe</a></strong>Uploaded a photo</p>
                                                    <img src="assets/images/small/small-3.jpg" alt="" height="40"
                                                        width="60" class="rounded-1">
                                                    <img src="assets/images/small/small-4.jpg" alt="" height="40"
                                                        width="60" class="rounded-1">
                                                </div>
                                            </div>

                                            <div class="time-item">
                                                <div class="item-info ms-3 mb-3">
                                                    <div class="text-muted">30 minutes ago</div>
                                                    <p><a href="" class="text-info">Lorem</a> commented
                                                        your
                                                        post.
                                                    </p>
                                                    <p><em>"Lorem ipsum dolor sit amet, consectetur adipiscing
                                                            elit.
                                                            Aliquam laoreet tellus ut tincidunt euismod. "</em>
                                                    </p>
                                                </div>
                                            </div>

                                            <div class="time-item">
                                                <div class="item-info ms-3 mb-3">
                                                    <div class="text-muted">59 minutes ago</div>
                                                    <p><a href="" class="text-info">Jessi</a> attended a
                                                        meeting
                                                        with<a href="#" class="text-success">John Doe</a>.
                                                    </p>
                                                    <p><em>"Lorem ipsum dolor sit amet, consectetur adipiscing
                                                            elit.
                                                            Aliquam laoreet tellus ut tincidunt euismod. "</em>
                                                    </p>
                                                </div>
                                            </div>

                                            <div class="time-item">
                                                <div class="item-info ms-3 mb-3">
                                                    <div class="text-muted">5 minutes ago</div>
                                                    <p><strong><a href="#" class="text-info">John
                                                                Doe</a></strong> Uploaded 2 new photos</p>
                                                    <img src="assets/images/small/small-2.jpg" alt=""
                                                        height="40" width="60" class="rounded-1">
                                                    <img src="assets/images/small/small-1.jpg" alt=""
                                                        height="40" width="60" class="rounded-1">
                                                </div>
                                            </div>

                                            <div class="time-item">
                                                <div class="item-info ms-3 mb-3">
                                                    <div class="text-muted">30 minutes ago</div>
                                                    <p><a href="" class="text-info">Lorem</a> commented
                                                        your
                                                        post.
                                                    </p>
                                                    <p><em>"Lorem ipsum dolor sit amet, consectetur adipiscing
                                                            elit.
                                                            Aliquam laoreet tellus ut tincidunt euismod. "</em>
                                                    </p>
                                                </div>
                                            </div>

                                            <div class="time-item">
                                                <div class="item-info ms-3 mb-3">
                                                    <div class="text-muted">59 minutes ago</div>
                                                    <p><a href="" class="text-info">Jessi</a> attended a
                                                        meeting
                                                        with<a href="#" class="text-success">John Doe</a>.
                                                    </p>
                                                    <p><em>"Lorem ipsum dolor sit amet, consectetur adipiscing
                                                            elit.
                                                            Aliquam laoreet tellus ut tincidunt euismod. "</em>
                                                    </p>
                                                </div>
                                            </div>
                                        </div> --}}
                                    {{-- </div> --}}

                                    <!-- settings -->
                                    <div id="edit-profile"
                                        @if ($errors->any() || Session::get('message')) class="tab-pane active" @else class="tab-pane" @endif>
                                        <div class="user-profile-content">
                                            <x-alert></x-alert>

                                            <form action="{{ url('edit-profile') }}" method="POST" autocomplete="off">
                                                @csrf
                                                <input id="id" type="hidden" name="id"
                                                    value="{{ $user->id }}">
                                                <div class="row row-cols-sm-2 row-cols-1">
                                                    <div class="mb-2">
                                                        <label class="form-label" for="name">
                                                            @lang('forms.name.label')
                                                        </label>
                                                        <input id="name" type="text" class="form-control"
                                                            name="name" placeholder="@lang('forms.name.placeholder')"
                                                            value="{{ $user->name }}">
                                                        <span id="nameError" class="invalid-feedback"></span>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label" for="email">
                                                            @lang('forms.email.label')
                                                        </label>
                                                        <input id="email" type="email" class="form-control"
                                                            name="email" @lang('forms.email.placeholder') value="{{ $user->email }}"
                                                            readonly>
                                                        <span id="emailError" class="invalid-feedback"></span>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label" for="password">
                                                            @lang('forms.password.label')
                                                        </label>
                                                        <input id="password" type="password" class="form-control"
                                                            name="password" placeholder="@lang('forms.password.placeholder')"
                                                            value="{{ old('password') }}">
                                                        <span id="passwordError" class="invalid-feedback"></span>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label" for="passwordConfirmation">
                                                            @lang('forms.password.confirmation.label')
                                                        </label>
                                                        <input id="passwordConfirmation" type="password"
                                                            name="password_confirmation" class="form-control"
                                                            placeholder="@lang('forms.password.confirmation.placeholder')"
                                                            value="{{ old('password_confirmation') }}">
                                                        <span id="passwordConfirmationError"
                                                            class="invalid-feedback"></span>
                                                    </div>
                                                </div>
                                                <button class="btn btn-primary" type="submit">
                                                    <i class="ri-save-line me-1 fs-16 lh-1"></i>
                                                    @lang('forms.button.save')
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/ meta -->
            </div>
        </div>
        <!-- end row -->
    </div>
@endsection
