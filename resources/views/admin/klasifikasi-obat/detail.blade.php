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
                        <h6 class="header-title">@lang('admin/drug-class.detail-title')</h6>
                    </div>

                    <div class="card-body">
                        <div class="row">
                            @if ($drugClass->image)
                                <div class="col-4">
                                    <span class="fw-bold mb-2">
                                        @lang('forms.image.label')
                                    </span>
                                    <img src="{{ asset($drugClass->image) }}" class="img-fluid">
                                </div>
                            @endif
                            <div class="col">
                                <span class="fw-bold">
                                    @lang('forms.name.label')
                                </span>
                                <p>{{ $drugClass->name }}</p>
                            </div>

                            <div class="col">
                                <span class="fw-bold">
                                    @lang('forms.created-at.label')
                                </span>
                                <p>{{ Carbon\Carbon::parse($drugClass->created_at)->isoFormat('dddd, D MMMM Y | HH:mm:ss') }}
                                </p>

                                <span class="fw-bold">
                                    @lang('forms.updated-at.label')
                                </span>
                                <p>{{ Carbon\Carbon::parse($drugClass->updated_at)->isoFormat('dddd, D MMMM Y | HH:mm:ss') }}
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
