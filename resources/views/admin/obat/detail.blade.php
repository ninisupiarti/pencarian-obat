@extends('admin.template.base')

@section('content')
    <div class="container-fluid">
        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-flex align-items-center justify-content-between">
                    <a href="{{ url('drugs') }}" class="btn btn-dark rounded-pill">
                        <i class="ri-arrow-left-fill"></i> @lang('forms.button.back')
                    </a>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">{{ env('APP_NAME') }}</a></li>
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Master Data</a></li>
                            <li class="breadcrumb-item">@lang('admin/drug.title')</li>
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
                        <h6 class="header-title">@lang('admin/drug.detail-title')</h6>
                    </div>

                    <div class="card-body">
                        <div class="row">
                            @if ($drug->image)
                                <div class="col-4">
                                    <span class="fw-bold mb-2">
                                        @lang('forms.image.label')
                                    </span>
                                    <img src="{{ asset($drug->image) }}" class="img-fluid">
                                </div>
                            @endif
                            <div class="col">
                                <div class="fw-bold">
                                    @lang('forms.name.label')
                                </div>
                                <p>{{ $drug->name }}</p>

                                <div class="fw-bold">
                                    @lang('forms.created-at.label')
                                </div>
                                <p>
                                    {{ Carbon\Carbon::parse($drug->created_at)->isoFormat('dddd, D MMMM Y | HH:mm:ss') }}
                                </p>

                                <div class="fw-bold">
                                    @lang('forms.updated-at.label')
                                </div>
                                <p>
                                    {{ Carbon\Carbon::parse($drug->updated_at)->isoFormat('dddd, D MMMM Y | HH:mm:ss') }}
                                </p>

                                <div class="fw-bold mb-1">
                                    @lang('forms.tag.label')
                                </div>
                                @foreach ($drug->tags_models as $tag)
                                    <span class="bg-primary-subtle text-primary-emphasis px-2 py-1 me-1 rounded-pill fs-10">
                                        {{ $tag->name }}
                                    </span>
                                @endforeach

                                <div class="fw-bold mt-2">
                                    @lang('forms.drug.class.label')
                                </div>
                                <div class="d-flex mt-1 mb-2 gap-1 align-content-center">
                                    <img src="{{ asset($drug->drugClassification->image) }}"
                                        alt="{{ $drug->drugClassification->name }}" height="20" width="35">
                                    <h6 class="my-auto">{{ $drug->drugClassification->name }}</h6>
                                </div>

                                <div class="fw-bold">
                                    @lang('forms.drug.description.label')
                                </div>
                                <p>{{ $drug->description }}</p>
                                <hr>
                                <div class="fw-bold">
                                    @lang('forms.drug.indication.label')
                                </div>
                                <p>{{ $drug->indication }}</p>
                                <hr>
                                <div class="fw-bold">
                                    @lang('forms.drug.composition.label')
                                </div>
                                <p>{{ $drug->composition }}</p>
                                <hr>
                                <div class="fw-bold">
                                    @lang('forms.drug.dose.label')
                                </div>
                                <p>{{ $drug->dose }}</p>
                                <hr>
                                <div class="fw-bold">
                                    @lang('forms.drug.adverse-drug-reaction.label')
                                </div>
                                <p>{{ $drug->adverse_drug_reaction }}</p>
                                <hr>
                                <div class="fw-bold">
                                    @lang('forms.drug.registration-number.label')
                                </div>
                                <p>BPOM: {{ $drug->registration_number }}</p>
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
