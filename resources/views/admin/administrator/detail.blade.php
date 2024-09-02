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
                            <li class="breadcrumb-item active">@lang('commons.details')</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <h6 class="header-title">@lang('admin/administrator.detail-title')</h6>
                    </div>

                    <div class="card-body">
                        <div class="row">
                            @if ($administrator->photo)
                                <div class="col-4">
                                    <span class="fw-bold mb-2">
                                        @lang('forms.photo.label')
                                    </span>
                                    <img src="{{ asset($administrator->photo) }}" class="img-fluid">
                                </div>
                            @endif
                            <div class="col">
                                <span class="fw-bold">
                                    @lang('forms.email.label')
                                </span>
                                <p>{{ $administrator->email }}</p>

                                <span class="fw-bold">
                                    @lang('forms.name.label')
                                </span>
                                <p>{{ $administrator->name }}</p>

                                <span class="fw-bold">
                                    @lang('forms.level.label')
                                </span>
                                <p>{{ $administrator->level }}</p>
                            </div>

                            <div class="col">
                                <span class="fw-bold">
                                    @lang('forms.created-at.label')
                                </span>
                                <p>{{ Carbon\Carbon::parse($administrator->created_at)->isoFormat('dddd, D MMMM Y | HH:mm:ss') }}
                                </p>

                                <span class="fw-bold">
                                    @lang('forms.updated-at.label')
                                </span>
                                <p>{{ Carbon\Carbon::parse($administrator->updated_at)->isoFormat('dddd, D MMMM Y | HH:mm:ss') }}
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- end card-body-->
                </div>
            </div>
        </div>
        <!-- end card -->
    </div>
@endsection
