@extends('admin.template.base')

@section('content')
    <div class="container-fluid">
        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-flex align-items-center justify-content-between">
                    <a href="{{ url('drug-classifications') }}" class="btn btn-dark rounded-pill">
                        <i class="ri-arrow-left-fill"></i> @lang('forms.button.back')
                    </a>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">{{ env('APP_NAME') }}</a></li>
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Master Data</a></li>
                            <li class="breadcrumb-item">@lang('admin/drug-class.title')</li>

                            @if (Route::current()->uri == 'drug-classifications/create')
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
            <form id="form" action="{{ url('drug-classifications/store') }}" method="POST"
                enctype="multipart/form-data">
                <div class="card-body row">
                    @csrf
                    <input id="id" type="hidden" name="id"
                        value="{{ empty($drugClass->id) ? null : $drugClass->id }}">
                    <div class="col-12 col-lg-5">
                        <div class="form-group mb-2">
                            <label for="image" class="form-label">
                                @lang('forms.image.label')
                            </label>
                            <input id="hiddenImage" type="hidden" name="hidden_image"
                                value="{{ empty($drugClass->image) ? null : $drugClass->image }}">
                            <input id="image" type="file" name="image" class="dropify"
                                data-default-file="{{ empty($drugClass->image) ? null : asset($drugClass->image) }}"
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
                                        value="{{ empty($drugClass->name) ? null : $drugClass->name }}" @endif>
                            <span id="nameError" class="invalid-feedback"></span>
                        </div>
                    </div>
                </div>
                <div class="card-footer d-flex justify-content-end">
                    @if (Route::current()->uri == 'drug-classifications/create')
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
