@extends('admin.template.base')

@section('content')
    <div class="container-fluid">
        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-flex align-items-center justify-content-between">
                    <a href="{{ url('administrators') }}" class="btn btn-dark rounded-pill">
                        <i class="ri-arrow-left-fill"></i> @lang('forms.button.back')
                    </a>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">{{ env('APP_NAME') }}</a></li>
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Master Data</a></li>
                            <li class="breadcrumb-item">@lang('admin/administrator.title')</li>

                            @if (Route::current()->uri == 'administrators/create')
                                <li class="breadcrumb-item active">@lang('commons.create')</li>
                            @else
                                <li class="breadcrumb-item active">@lang('commons.edit')</li>
                            @endif
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <!-- end page title -->

        <x-alert></x-alert>

        <div class="card">
            <form id="form" action="{{ url('administrators/store') }}" method="POST" enctype="multipart/form-data">
                <div class="card-body row">
                    @csrf
                    <input id="id" type="hidden" name="id"
                        value="{{ empty($administrator->id) ? null : $administrator->id }}">
                    <div class="col-12 col-lg-5">
                        <div class="form-group mb-2">
                            <label for="photo" class="form-label">
                                @lang('forms.photo.label')
                            </label>
                            <input id="hiddenPhoto" type="hidden" name="hidden_photo"
                                value="{{ empty($administrator->photo) ? null : $administrator->photo }}">
                            <input id="photo" type="file" name="photo" class="dropify"
                                data-default-file="{{ empty($administrator->photo) ? null : asset($administrator->photo) }}"
                                accept=".jpg, .png" />
                        </div>
                    </div>
                    <div class="col-12 col-lg-7">
                        <div class="form-group mb-2">
                            <label for="name" class="form-label">
                                @lang('forms.name.label')<span class="text-danger" title="@lang('commons.required')">*</span>
                            </label>
                            <input id="name" type="text" name="name" class="form-control"
                                placeholder="@lang('forms.name.placeholder')"
                                @if (old('name')) value="{{ old('name') }}"
                                    @else
                                        value="{{ empty($administrator->name) ? null : $administrator->name }}" @endif>
                            <span id="nameError" class="invalid-feedback"></span>
                        </div>

                        <div class="form-group mb-2">
                            <label for="email" class="form-label">
                                @lang('forms.email.label')
                                <span class="text-danger" title="@lang('commons.required')">*</span>
                            </label>
                            <input id="email" type="text" name="email" class="form-control"
                                placeholder="@lang('forms.email.placeholder')"
                                @if (old('email')) value="{{ old('email') }}"
                                    @else
                                        value="{{ empty($administrator->email) ? null : $administrator->email }}" @endif>
                            <span id="emailError" class="invalid-feedback"></span>
                        </div>

                        <div class="form-group mb-2">
                            <label for="level" class="form-label">
                                @lang('forms.level.label')
                                <span class="text-danger" title="@lang('commons.required')">*</span>
                            </label>
                            <select id="level" class="form-control" name="level">
                                <option value="" selected hidden disabled>@lang('forms.level.placeholder')</option>
                                <option value="Admin"
                                    @if (old('level')) {{ old('level') == 'Admin' ? 'selected' : null }}
                                        @elseif (!empty($administrator->id))
                                        {{ $administrator->level == 'Admin' ? 'selected' : null }} @endif>
                                    Admin</option>
                                <option value="Super Admin"
                                    @if (old('level')) {{ old('level') == 'Super Admin' ? 'selected' : null }}
                                        @elseif (!empty($administrator->id))
                                        {{ $administrator->level == 'Super Admin' ? 'selected' : null }} @endif>
                                    Super Admin</option>
                            </select>
                            <span id="levelError" class="invalid-feedback"></span>
                        </div>
                    </div>
                </div>
                <div class="card-footer d-flex justify-content-end">
                    @if (Route::current()->uri == 'administrators/create')
                        <button id="submit" type="submit" class="btn btn-primary">@lang('forms.button.create')</button>
                    @else
                        <button id="submit" type="submit" class="btn btn-warning">@lang('forms.button.save')</button>
                    @endif
                </div>
            </form>
            <!-- end card-body-->
        </div>
        <!-- end card -->
    </div> <!-- container-fluid -->
@endsection
