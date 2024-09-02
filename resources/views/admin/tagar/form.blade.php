@extends('admin.template.base')

@section('content')
    <div class="container-fluid">
        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-flex align-items-center justify-content-between">
                    <a href="{{ url('tags') }}" class="btn btn-dark rounded-pill">
                        <i class="ri-arrow-left-fill"></i> @lang('forms.button.back')
                    </a>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">{{ env('APP_NAME') }}</a></li>
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Master Data</a></li>
                            <li class="breadcrumb-item">@lang('admin/tag.title')</li>

                            @if (Route::current()->uri == 'tags/create')
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
            <form id="form" action="{{ url('tags/store') }}" method="POST" enctype="multipart/form-data">
                <div class="card-body row">
                    @csrf
                    <input id="id" type="hidden" name="id" value="{{ empty($tag->id) ? null : $tag->id }}">
                    <div class="col-12 col-lg-12">
                        <div class="form-group mb-2">
                            <label for="name" class="form-label">
                                @lang('forms.tag-name.label')<span class="text-danger" title="@lang('commons.required')">*</span>
                            </label>
                            <input id="name" type="text" name="name" class="form-control"
                                placeholder="@lang('forms.tag-name.placeholder')"
                                @if (old('name')) value="{{ old('name') }}"
                                    @else
                                        value="{{ empty($tag->name) ? null : $tag->name }}" @endif>
                            <span id="nameError" class="invalid-feedback"></span>
                        </div>
                    </div>
                </div>
                <div class="card-footer d-flex justify-content-end">
                    @if (Route::current()->uri == 'tags/create')
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
