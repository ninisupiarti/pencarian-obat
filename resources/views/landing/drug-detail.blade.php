@extends('landing.template.base')

@section('content')
    <div class="container-fluid">
        <div class="page-title-box">
            <div class="page-title">
                <a href="{{ url()->previous() }}" class="btn btn-sm btn-dark">
                    <i class="ri-arrow-left-fill"></i>
                    @lang('forms.button.back')
                </a>
            </div>
        </div>

        <div class="row">
            <div class="col-12 col-md-3">
                @if (empty($drug->image))
                    <div class="text-center my-5">
                        <small>
                            @lang('commons.image-not-found')
                        </small>
                    </div>
                @else
                    <img src="{{ asset($drug->image) }}" alt="{{ $drug->name }}" class="img-fluid">
                @endif
            </div>
            <div class="col-12 col-md-9 px-4">
                <div class="d-flex align-content-center">
                    <h1>{{ $drug->name }}</h1>
                </div>
                @foreach ($drug->tags_models as $tag)
                    <span class="bg-primary-subtle text-primary-emphasis px-2 py-1 me-1 rounded-pill fs-10">
                        {{ $tag->name }}
                    </span>
                @endforeach

                <div class="d-flex my-3 gap-1 align-content-center">
                    <img src="{{ asset($drug->drugClassification->image) }}" alt="{{ $drug->drugClassification->name }}"
                        height="20" width="35">
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
@endsection
