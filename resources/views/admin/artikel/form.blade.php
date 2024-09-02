@extends('admin.template.base')

@section('content')
    <div class="container-fluid">
        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-flex align-items-center justify-content-between">
                    <a href="{{ url('articles') }}" class="btn btn-dark rounded-pill">
                        <i class="ri-arrow-left-fill"></i> @lang('forms.button.back')
                    </a>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">{{ env('APP_NAME') }}</a></li>
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Master Data</a></li>
                            <li class="breadcrumb-item">@lang('admin/article.title')</li>

                            @if (Route::current()->uri == 'articles/create')
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
            <form id="form" action="{{ url('articles/store') }}" method="POST" enctype="multipart/form-data">
                <div class="card-body row">
                    @csrf
                    <input id="id" type="hidden" name="id"
                        value="{{ empty($article->id) ? null : $article->id }}">
                    <div class="col-12 col-lg-5">
                        <div class="form-group mb-2">
                            <label for="image" class="form-label">
                                @lang('forms.image.label')
                            </label>
                            <input id="hidden" type="hidden" name="hidden_image"
                                value="{{ empty($article->image) ? null : $article->image }}">
                            <input id="image" type="file" name="image" class="dropify"
                                data-default-file="{{ empty($article->image) ? null : asset($article->image) }}"
                                accept=".jpg, .png" />
                        </div>
                    </div>
                    <div class="col-12 col-lg-7">
                        <div class="form-group mb-2">
                            <label for="title" class="form-label">
                                @lang('forms.title.label')<x-required-symbol></x-required-symbol>
                            </label>
                            <input id="title" type="text" name="title" class="form-control"
                                placeholder="@lang('forms.title.placeholder')"
                                @if (old('title')) value="{{ old('title') }}"
                                    @else
                                        value="{{ empty($article->title) ? null : $article->title }}" @endif>
                            <span id="titleError" class="invalid-feedback"></span>
                        </div>

                        <div class="form-group mb-2">
                            <label for="tag" class="form-label">
                                @lang('forms.tag.label')<x-required-symbol></x-required-symbol>
                            </label>
                            <select id="tag" name="tag[]" class="select2 form-control select2-multiple"
                                data-toggle="select2" multiple="multiple" data-placeholder="@lang('forms.tag.placeholder')">
                                @foreach ($tags as $tag)
                                    <option value="{{ $tag->id }}" @if (!empty($article->tags) && in_array($tag->id, $article->tags)) selected @endif>
                                        {{ $tag->name }}</option>
                                @endforeach
                            </select>
                            <span id="tagError" class="invalid-feedback"></span>
                        </div>

                        <div class="form-group mb-2">
                            <label for="sourceUrl" class="form-label">
                                @lang('forms.source-url.label')
                            </label>
                            <input id="sourceUrl" type="text" name="source_url" class="form-control"
                                placeholder="@lang('forms.source-url.placeholder')"
                                @if (old('source_url')) value="{{ old('source_url') }}"
                                    @else
                                        value="{{ empty($article->source_url) ? null : $article->source_url }}" @endif>
                            <span id="sourceUrlError" class="invalid-feedback"></span>
                        </div>
                    </div>
                    <div class="col-12">
                        <textarea id="content" name="content" class="tinymce">
@if (old('content'))
{{ old('content') }}
@else
{{ empty($article->content) ? null : $article->content }}
@endif
</textarea>
                    </div>
                </div>
                <div class="card-footer d-flex justify-content-end">
                    @if (Route::current()->uri == 'articles/create')
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
