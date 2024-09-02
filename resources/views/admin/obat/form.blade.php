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

                            @if (Route::current()->uri == 'drugs/create')
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
            <form id="form" action="{{ url('drugs/store') }}" method="POST" enctype="multipart/form-data">
                <div class="card-body row">
                    @csrf
                    <input id="id" type="hidden" name="id" value="{{ empty($drug->id) ? null : $drug->id }}">
                    <div class="col-12 col-lg-5">
                        <div class="form-group mb-2">
                            <label for="image" class="form-label">
                                @lang('forms.image.label')
                            </label>
                            <input id="hiddenPhoto" type="hidden" name="hidden_image"
                                value="{{ empty($drug->image) ? null : $drug->image }}">
                            <input id="image" type="file" name="image" class="dropify"
                                data-default-file="{{ empty($drug->image) ? null : asset($drug->image) }}"
                                accept=".jpg, .png" />
                        </div>
                    </div>
                    <div class="col-12 col-lg-7">
                        <div class="form-group mb-2">
                            <label for="name" class="form-label">
                                @lang('forms.drug.name.label')<span class="text-danger" title="@lang('commons.required')">*</span>
                            </label>
                            <input id="name" type="text" name="name" class="form-control"
                                placeholder="@lang('forms.drug.name.placeholder')"
                                @if (old('name')) value="{{ old('name') }}"
                                    @else
                                        value="{{ empty($drug->name) ? null : $drug->name }}" @endif>
                            <span id="nameError" class="invalid-feedback"></span>
                        </div>

                        <div class="form-group mb-2">
                            <label for="tag" class="form-label">
                                @lang('forms.tag.label')<span class="text-danger" title="@lang('commons.required')">*</span>
                            </label>
                            <select id="tag" name="tag[]" class="select2 form-control select2-multiple"
                                data-toggle="select2" multiple="multiple" data-placeholder="@lang('forms.tag.placeholder')">
                                @foreach ($tags as $tag)
                                    <option value="{{ $tag->id }}" @if (!empty($drug->tags) && in_array($tag->id, $drug->tags)) selected @endif>
                                        {{ $tag->name }}</option>
                                @endforeach
                            </select>
                            <span id="tagError" class="invalid-feedback"></span>
                        </div>

                        <div class="form-group mb-2">
                            <label for="drugClass" drugClass="form-label">
                                @lang('forms.drug.class.label')<span class="text-danger" title="@lang('commons.required')">*</span>
                            </label>
                            <select id="drugClass" class="form-control" name="drug_classification_id">
                                <option value="" selected hidden disabled>@lang('forms.drug.class.placeholder')</option>
                                @foreach ($drug_classifications as $drugClass)
                                    <option value="{{ $drugClass->id }}"
                                        @if (old('drug_classification_id')) {{ old('drug_classification_id') == $drugClass->id ? 'selected' : null }}
                                @elseif (!empty($drug->id))
                                {{ $drug->drug_classification_id == $drugClass->id ? 'selected' : null }} @endif>
                                        {{ $drugClass->name }}</option>
                                @endforeach
                            </select>
                            <span id="drugClassError" class="invalid-feedback"></span>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6">
                        <div class="form-group mb-2">
                            <label for="registrationNumber" class="form-label">
                                @lang('forms.drug.registration-number.label')
                            </label>
                            <input id="registrationNumber" type="text" name="registration_number" class="form-control"
                                placeholder="@lang('forms.drug.registration-number.placeholder')"
                                @if (old('registration_number')) value="{{ old('registration_number') }}"
                                    @else
                                        value="{{ empty($drug->registration_number) ? null : $drug->registration_number }}" @endif>
                            <span id="registrationNumberError" class="invalid-feedback"></span>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6">
                        <div class="form-group mb-2">
                            <label for="composition" class="form-label">
                                @lang('forms.drug.composition.label')
                            </label>
                            <input id="composition" type="text" name="composition" class="form-control"
                                placeholder="@lang('forms.drug.composition.placeholder')"
                                @if (old('composition')) value="{{ old('composition') }}"
                                    @else
                                        value="{{ empty($drug->composition) ? null : $drug->composition }}" @endif>
                            <span id="compositionError" class="invalid-feedback"></span>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6">
                        <div class="form-group mb-2">
                            <label for="dose" class="form-label">
                                @lang('forms.drug.dose.label')
                            </label>
                            <textarea id="dose" name="dose" rows="7" class="form-control">
@if (old('dose'))
{{ old('dose') }}@else{{ empty($drug->dose) ? null : $drug->dose }}
@endif
</textarea>
                            <span id="doseError" class="invalid-feedback"></span>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6">
                        <div class="form-group mb-2">
                            <label for="indication" class="form-label">
                                @lang('forms.drug.indication.label')
                            </label>
                            <textarea id="indication" name="indication" rows="7" class="form-control">
@if (old('indication'))
{{ old('indication') }}@else{{ empty($drug->indication) ? null : $drug->indication }}
@endif
</textarea>
                            <span id="indicationError" class="invalid-feedback"></span>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6">
                        <div class="form-group mb-2">
                            <label for="description" class="form-label">
                                @lang('forms.drug.description.label')
                            </label>
                            <textarea id="description" name="description" rows="7" class="form-control">
@if (old('description'))
{{ old('description') }}@else{{ empty($drug->description) ? null : $drug->description }}
@endif
</textarea>
                            <span id="descriptionError" class="invalid-feedback"></span>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6">
                        <div class="form-group mb-2">
                            <label for="adverseDrugReaction" class="form-label">
                                @lang('forms.drug.adverse-drug-reaction.label')
                            </label>
                            <textarea id="adverseDrugReaction" name="adverse_drug_reaction" rows="7" class="form-control">
@if (old('adverse_drug_reaction'))
{{ old('adverse_drug_reaction') }}@else{{ empty($drug->adverse_drug_reaction) ? null : $drug->adverse_drug_reaction }}
@endif
</textarea>
                            <span id="adverseDrugReactionError" class="invalid-feedback"></span>
                        </div>
                    </div>
                </div>
                <div class="card-footer d-flex justify-content-end">
                    @if (Route::current()->uri == 'drugs/create')
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
